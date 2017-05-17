<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * PostTypes Controller
 *
 * @property \Admin\Model\Table\PostTypesTable $PostTypes
 *
 * @method \Admin\Model\Entity\PostType[] paginate($object = null, array $settings = [])
 */
class PostTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $postTypes = $this->paginate($this->PostTypes);

        $this->set(compact('postTypes'));
        $this->set('_serialize', ['postTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Post Type id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postType = $this->PostTypes->get($id, [
            'contain' => ['Posts']
        ]);

        $this->set('postType', $postType);
        $this->set('_serialize', ['postType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postType = $this->PostTypes->newEntity();
        if ($this->request->is('post')) {
            $postType = $this->PostTypes->patchEntity($postType, $this->request->getData());
            if ($this->PostTypes->save($postType)) {
                $this->Flash->success(__('The post type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post type could not be saved. Please, try again.'));
        }
        $this->set(compact('postType'));
        $this->set('_serialize', ['postType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Post Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postType = $this->PostTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postType = $this->PostTypes->patchEntity($postType, $this->request->getData());
            if ($this->PostTypes->save($postType)) {
                $this->Flash->success(__('The post type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post type could not be saved. Please, try again.'));
        }
        $this->set(compact('postType'));
        $this->set('_serialize', ['postType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Post Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postType = $this->PostTypes->get($id);
        if ($this->PostTypes->delete($postType)) {
            $this->Flash->success(__('The post type has been deleted.'));
        } else {
            $this->Flash->error(__('The post type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
