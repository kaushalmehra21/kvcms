<?php

namespace Admin\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{
	public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            'unauthorizedRedirect' => $this->referer() // If unauthorized, return them to page they were just on
        ]);

        // Allow the display action so our pages controller
        // continues to work.
        $this->Auth->allow(['display']);
    }
}
