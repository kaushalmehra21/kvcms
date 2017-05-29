<?php
namespace Admin\Controller;

use Admin\Controller\AppController;
use Admin\Utility\InstagramClient;
use Cake\Core\Configure;

/**
 * Posts Controller
 *
 * @property \Admin\Model\Table\PostsTable $Posts
 *
 * @method \Admin\Model\Entity\Post[] paginate($object = null, array $settings = [])
 */
class InstaController extends AppController
{

    public function initialize()
    {
        parent::initialize();
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function request()
    {

        
        
        
    }

    public function response()
    {

        $instagramClient = new InstagramClient(Configure::read('Instagram.config'));
        $instagramClient->accessToken('your-access-token');

        
    }

}
