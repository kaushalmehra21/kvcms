<?php

namespace Admin\View\Helper;

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

        if (!Configure::read('Admin.config')) {
            return false;
        }

        $apiEndpoint = Configure::read('Admin.config.apiEndpoint').'/oauth/authorize/?';
        $apiEndpoint .= 'client_id=' . Configure::read('Admin.config.clientId');
        $apiEndpoint .= '&redirect_uri=' . Configure::read('Admin.config.redirectUri');
        $apiEndpoint .= '&response_type=code';

        return $apiEndpoint;
    }
}
