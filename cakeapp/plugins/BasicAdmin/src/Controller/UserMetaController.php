<?php
namespace BasicAdmin\Controller;

use BasicAdmin\Controller\AppController;

/**
 * UserMeta Controller
 *
 * @property \Admin\Model\Table\UserMetaTable $UserMeta
 *
 * @method \Admin\Model\Entity\UserMetum[] paginate($object = null, array $settings = [])
 */
class UserMetaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $userMeta = $this->paginate($this->UserMeta);

        $this->set(compact('userMeta'));
        $this->set('_serialize', ['userMeta']);
    }

    /**
     * View method
     *
     * @param string|null $id User Metum id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userMetum = $this->UserMeta->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userMetum', $userMetum);
        $this->set('_serialize', ['userMetum']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userMetum = $this->UserMeta->newEntity();
        if ($this->request->is('post')) {
            $userMetum = $this->UserMeta->patchEntity($userMetum, $this->request->getData());
            if ($this->UserMeta->save($userMetum)) {
                $this->Flash->success(__('The user metum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user metum could not be saved. Please, try again.'));
        }
        $users = $this->UserMeta->Users->find('list', ['limit' => 200]);
        $this->set(compact('userMetum', 'users'));
        $this->set('_serialize', ['userMetum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Metum id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userMetum = $this->UserMeta->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userMetum = $this->UserMeta->patchEntity($userMetum, $this->request->getData());
            if ($this->UserMeta->save($userMetum)) {
                $this->Flash->success(__('The user metum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user metum could not be saved. Please, try again.'));
        }
        $users = $this->UserMeta->Users->find('list', ['limit' => 200]);
        $this->set(compact('userMetum', 'users'));
        $this->set('_serialize', ['userMetum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Metum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userMetum = $this->UserMeta->get($id);
        if ($this->UserMeta->delete($userMetum)) {
            $this->Flash->success(__('The user metum has been deleted.'));
        } else {
            $this->Flash->error(__('The user metum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
