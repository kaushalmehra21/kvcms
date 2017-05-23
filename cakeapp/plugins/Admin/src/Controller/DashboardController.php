<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

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

        $this->viewBuilder()->setLayout('Admin.admin');
        
        
    }
}
