<?php
namespace Admin\Controller;

use Admin\Controller\AppController;

/**
 * CompanyMeta Controller
 *
 * @property \Admin\Model\Table\CompanyMetaTable $CompanyMeta
 *
 * @method \Admin\Model\Entity\CompanyMetum[] paginate($object = null, array $settings = [])
 */
class CompanyMetaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companies']
        ];
        $companyMeta = $this->paginate($this->CompanyMeta);

        $this->set(compact('companyMeta'));
        $this->set('_serialize', ['companyMeta']);
    }

    /**
     * View method
     *
     * @param string|null $id Company Metum id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companyMetum = $this->CompanyMeta->get($id, [
            'contain' => ['Companies']
        ]);

        $this->set('companyMetum', $companyMetum);
        $this->set('_serialize', ['companyMetum']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companyMetum = $this->CompanyMeta->newEntity();
        if ($this->request->is('post')) {
            $companyMetum = $this->CompanyMeta->patchEntity($companyMetum, $this->request->getData());
            if ($this->CompanyMeta->save($companyMetum)) {
                $this->Flash->success(__('The company metum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company metum could not be saved. Please, try again.'));
        }
        $companies = $this->CompanyMeta->Companies->find('list', ['limit' => 200]);
        $this->set(compact('companyMetum', 'companies'));
        $this->set('_serialize', ['companyMetum']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Company Metum id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $companyMetum = $this->CompanyMeta->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companyMetum = $this->CompanyMeta->patchEntity($companyMetum, $this->request->getData());
            if ($this->CompanyMeta->save($companyMetum)) {
                $this->Flash->success(__('The company metum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The company metum could not be saved. Please, try again.'));
        }
        $companies = $this->CompanyMeta->Companies->find('list', ['limit' => 200]);
        $this->set(compact('companyMetum', 'companies'));
        $this->set('_serialize', ['companyMetum']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Company Metum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $companyMetum = $this->CompanyMeta->get($id);
        if ($this->CompanyMeta->delete($companyMetum)) {
            $this->Flash->success(__('The company metum has been deleted.'));
        } else {
            $this->Flash->error(__('The company metum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
