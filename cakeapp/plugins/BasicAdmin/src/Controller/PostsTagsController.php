<?php
namespace BasicAdmin\Controller;

use BasicAdmin\Controller\AppController;

/**
 * PostsTags Controller
 *
 * @property \Admin\Model\Table\PostsTagsTable $PostsTags
 *
 * @method \Admin\Model\Entity\PostsTag[] paginate($object = null, array $settings = [])
 */
class PostsTagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Posts', 'Tags']
        ];
        $postsTags = $this->paginate($this->PostsTags);

        $this->set(compact('postsTags'));
        $this->set('_serialize', ['postsTags']);
    }

    /**
     * View method
     *
     * @param string|null $id Posts Tag id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $postsTag = $this->PostsTags->get($id, [
            'contain' => ['Posts', 'Tags']
        ]);

        $this->set('postsTag', $postsTag);
        $this->set('_serialize', ['postsTag']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $postsTag = $this->PostsTags->newEntity();
        if ($this->request->is('post')) {
            $postsTag = $this->PostsTags->patchEntity($postsTag, $this->request->getData());
            if ($this->PostsTags->save($postsTag)) {
                $this->Flash->success(__('The posts tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The posts tag could not be saved. Please, try again.'));
        }
        $posts = $this->PostsTags->Posts->find('list', ['limit' => 200]);
        $tags = $this->PostsTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('postsTag', 'posts', 'tags'));
        $this->set('_serialize', ['postsTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Posts Tag id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $postsTag = $this->PostsTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $postsTag = $this->PostsTags->patchEntity($postsTag, $this->request->getData());
            if ($this->PostsTags->save($postsTag)) {
                $this->Flash->success(__('The posts tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The posts tag could not be saved. Please, try again.'));
        }
        $posts = $this->PostsTags->Posts->find('list', ['limit' => 200]);
        $tags = $this->PostsTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('postsTag', 'posts', 'tags'));
        $this->set('_serialize', ['postsTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Posts Tag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $postsTag = $this->PostsTags->get($id);
        if ($this->PostsTags->delete($postsTag)) {
            $this->Flash->success(__('The posts tag has been deleted.'));
        } else {
            $this->Flash->error(__('The posts tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
