<?php

namespace Instagram\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;

/**
 * Instagram helper
 */
class InstagramHelper extends Helper
{

    /**
     * Returns an authentication URL
     *
     * @return mixed URL or false if not configured well
     */
    public function getAuthUrl()
    {
        if (!Configure::read('Instagram.config')) {
            return false;
        }

        $apiEndpoint = Configure::read('Instagram.apiEndpoint') . '/oauth/authorize/?';
        $apiEndpoint .= 'client_id=' . Configure::read('Instagram.config.clientId');
        $apiEndpoint .= '&redirect_uri=' . Configure::read('Instagram.config.redirectUri');
        $apiEndpoint .= '&response_type=code';

        return $apiEndpoint;
    }
}
