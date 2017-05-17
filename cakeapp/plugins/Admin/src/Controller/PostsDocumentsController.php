<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * PostsDocuments Controller
 *
 * @property \Admin\Model\Table\PostsDocumentsTable $PostsDocuments
 *
 * @method \Admin\Model\Entity\PostsDocument[] paginate($object = null, array $settings = [])
 */
class PostsDocumentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Posts', 'Documents']
        ];
        $postsDocuments = $this->paginate($this->PostsDocuments);

        $this->set(compact('postsDocuments'));
        $this->set('_serialize', ['postsDocuments']);
    }

    /**
     * View method
     *
     * @param string|null $id Posts Document id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postsDocument = $this->PostsDocuments->get($id, [
            'contain' => ['Posts', 'Documents']
        ]);

        $this->set('postsDocument', $postsDocument);
        $this->set('_serialize', ['postsDocument']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postsDocument = $this->PostsDocuments->newEntity();
        if ($this->request->is('post')) {
            $postsDocument = $this->PostsDocuments->patchEntity($postsDocument, $this->request->getData());
            if ($this->PostsDocuments->save($postsDocument)) {
                $this->Flash->success(__('The posts document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The posts document could not be saved. Please, try again.'));
        }
        $posts = $this->PostsDocuments->Posts->find('list', ['limit' => 200]);
        $documents = $this->PostsDocuments->Documents->find('list', ['limit' => 200]);
        $this->set(compact('postsDocument', 'posts', 'documents'));
        $this->set('_serialize', ['postsDocument']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Posts Document id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postsDocument = $this->PostsDocuments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postsDocument = $this->PostsDocuments->patchEntity($postsDocument, $this->request->getData());
            if ($this->PostsDocuments->save($postsDocument)) {
                $this->Flash->success(__('The posts document has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The posts document could not be saved. Please, try again.'));
        }
        $posts = $this->PostsDocuments->Posts->find('list', ['limit' => 200]);
        $documents = $this->PostsDocuments->Documents->find('list', ['limit' => 200]);
        $this->set(compact('postsDocument', 'posts', 'documents'));
        $this->set('_serialize', ['postsDocument']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Posts Document id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postsDocument = $this->PostsDocuments->get($id);
        if ($this->PostsDocuments->delete($postsDocument)) {
            $this->Flash->success(__('The posts document has been deleted.'));
        } else {
            $this->Flash->error(__('The posts document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
