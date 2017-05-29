<?php

namespace Admin\Utility;

use BadFunctionCallException;
use Cake\Core\Configure;
use Cake\Http\Client;
use Admin\Utility\Exception\MissingAccessTokenException;
use Admin\Utility\Exception\MissingCredentialsException;

/*
 * Instagram client
 *
 */

class InstagramClient
{

    /**
     * Instagram API endpoint
     *
     * @var string URL
     */
    protected $_apiEndpoint = "";

    /**
     * Instagram API endpoint URL
     *
     * @var string URL
     */
    private $_apiEndpointUrl = "";

    /**
     * Access token
     *
     * @var string
     */
    private $_accessToken = "";

    /**
     * Instagram Client ID
     *
     * @var string
     */
    protected $_clientId = "";

    /**
     * Instagram Client Secret
     *
     * @var string
     */
    protected $_clientSecret = "";

    /**
     * HTTP Client
     *
     * @var object Cake\Http\Client
     */
    protected $_httpClient;

    /**
     *
     * The $options array accepts the following keys:
     *
     * - clientId: Instagram API Key
     * - clientSecret: Instagram API Secret
     * - redirectURL: Redirect URL
     *
     * @param array $options Options
     */
    public function __construct($options = [])
    {
        if (empty($options['clientId']) || empty($options['clientSecret'])) {
            throw new MissingCredentialsException('Api Key or Secret is missing.');
        }

        $this->_clientId = $options['clientId'];
        $this->_clientSecret = $options['clientSecret'];

        $this->_apiEndpoint = Configure::read('Admin.apiEndpoint');
        $this->_apiEndpointUrl = Configure::read('Admin.apiEndpoint') . '/' . Configure::read('Admin.apiVersion');

        $this->_httpClient = new Client();
    }

    /**
     * Fetches oauth access token from Instagram
     *
     * @param string $code Access code
     * @param string $redirectUrl Auth redirection url
     * @return mixed API Response
     */
    public function getAccessToken($code = null, $redirectUrl = null)
    {
        if (empty($code) || empty($redirectUrl)) {
            return false;
        }

        $response = $this->_httpClient->post($this->_apiEndpoint . '/oauth/access_token', [
            'client_id' => $this->_clientId,
            'client_secret' => $this->_clientSecret,
            'grant_type' => 'authorization_code',
            'redirect_uri' => $redirectUrl,
            'code' => $code
        ]);

        return $response->body('json_decode');
    }

    /**
     * Gets/Sets access token
     *
     * @param string $token Authentication token
     * @return mixes String if $token is empty, true otherwise
     */
    public function accessToken($token = null)
    {
        if ($token === null) {
            return $this->_accessToken;
        }
        $this->_accessToken = $token;

        return true;
    }

    /**
     * Magic method for Instagram API based.
     *
     * For example:
     *
     * $instagramClient = new InstagramClient();
     *
     * $instagramClient->getProfile();
     *
     * $options = ['count' => '10'];
     * $instagramClient->getMedia($options);
     *
     * @param string $name Method name to use.
     * @param array $arguments Parameters to pass when calling methods.
     * @return mixed API Response.
     * @throws BadFunctionCallException If method does not exist.
     * @throws MissingAccessTokenException If access token is not set.
     */
    public function __call($name, $arguments = [])
    {
        $methodName = "_" . $name;
        if (!method_exists($this, $methodName)) {
            throw new BadFunctionCallException();
        }

        if (empty($this->_accessToken)) {
            throw new MissingAccessTokenException();
        }

        $args = isset($arguments[0]) ? $arguments[0] : [];

        return $this->$methodName($args);
    }

    /**
     * Returns the user profile data
     *
     * The $options array accepts the following keys:
     *
     * - user_id: User id (self will be used if not set)
     *
     * @param array $options List of options for this API method
     * @return mixed API Response
     */
    private function _getProfile($options = [])
    {
        $userId = "self";
        if (!empty($options['user_id'])) {
            $userId = $options['user_id'];
        }

        $options = ['access_token' => $this->_accessToken];

        $endpoint = $this->_apiEndpointUrl .
            "/users/{$userId}/";

        $response = $this->_httpClient->get($endpoint, $options);

        return $response->body('json_decode');
    }

    /**
     * Returns recent media
     *
     * The $options array accepts the following keys:
     *
     * - user_id: User id (self will be used if not set)
     * - url: API url (mostly used in pagination (next_url), if set other
     *   options will be ignored)
     * - count: Count of media to return
     * - min_id: Return media later than this min_id
     * - max_id: Return media earlier than this max_ids
     *
     * @param array $options List of options for this API method
     * @return mixed API Response
     */
    private function _getMedia($options = [])
    {
        $userId = "self";
        if (!empty($options['user_id'])) {
            $userId = $options['user_id'];
            unset($options['user_id']);
        }

        if (!empty($options['url'])) {
            $endpoint = $options['url'];
            $options = [];
        } else {
            $options += ['access_token' => $this->_accessToken];
            $endpoint = $this->_apiEndpointUrl .
                "/users/{$userId}/media/recent";
        }

        $response = $this->_httpClient->get($endpoint, $options);

        return $response->body('json_decode');
    }
}
