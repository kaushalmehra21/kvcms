<?php
namespace BasicAdmin\Controller;

use BasicAdmin\Controller\AppController;

/**
 * PostMeta Controller
 *
 * @property \Admin\Model\Table\PostMetaTable $PostMeta
 *
 * @method \Admin\Model\Entity\PostMetum[] paginate($object = null, array $settings = [])
 */
class PostMetaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Posts']
        ];
        $postMeta = $this->paginate($this->PostMeta);

        $this->set(compact('postMeta'));
        $this->set('_serialize', ['postMeta']);
    }

    /**
     * View method
     *
     * @param string|null $id Post Metum id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postMetum = $this->PostMeta->get($id, [
            'contain' => ['Posts']
        ]);

        $this->set('postMetum', $postMetum);
        $this->set('_serialize', ['postMetum']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postMetum = $this->PostMeta->newEntity();
        if ($this->request->is('post')) {
            $postMetum = $this->PostMeta->patchEntity($postMetum, $this->request->getData());
            if ($this->PostMeta->save($postMetum)) {
                $this->Flash->success(__('The post metum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post metum could not be saved. Please, try again.'));
        }
        $posts = $this->PostMeta->Posts->find('list', ['limit' => 200]);
        $this->set(compact('postMetum', 'posts'));
        $this->set('_serialize', ['postMetum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Post Metum id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postMetum = $this->PostMeta->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postMetum = $this->PostMeta->patchEntity($postMetum, $this->request->getData());
            if ($this->PostMeta->save($postMetum)) {
                $this->Flash->success(__('The post metum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The post metum could not be saved. Please, try again.'));
        }
        $posts = $this->PostMeta->Posts->find('list', ['limit' => 200]);
        $this->set(compact('postMetum', 'posts'));
        $this->set('_serialize', ['postMetum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Post Metum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postMetum = $this->PostMeta->get($id);
        if ($this->PostMeta->delete($postMetum)) {
            $this->Flash->success(__('The post metum has been deleted.'));
        } else {
            $this->Flash->error(__('The post metum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
