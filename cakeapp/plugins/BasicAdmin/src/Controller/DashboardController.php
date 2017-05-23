<?php
namespace BasicAdmin\Controller;

use BasicAdmin\Controller\AppController;

/**
 * Users Controller
 *
 * @property \Admin\Model\Table\UsersTable $Users
 *
 * @method \Admin\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class DashBoardController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout']);
    }


    public function index()
    {

        $this->viewBuilder()->setLayout('BasicAdmin.admin');
        
        
    }
}
