<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DepartementsUsers Controller
 *
 * @property \App\Model\Table\DepartementsUsersTable $DepartementsUsers
 */
class DepartementsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departements', 'Users']
        ];
        $departementsUsers = $this->paginate($this->DepartementsUsers);

        $this->set(compact('departementsUsers'));
        $this->set('_serialize', ['departementsUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Departements User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departementsUser = $this->DepartementsUsers->get($id, [
            'contain' => ['Departements', 'Users']
        ]);

        $this->set('departementsUser', $departementsUser);
        $this->set('_serialize', ['departementsUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departementsUser = $this->DepartementsUsers->newEntity();
        if ($this->request->is('post')) {
            $departementsUser = $this->DepartementsUsers->patchEntity($departementsUser, $this->request->data);
            if ($this->DepartementsUsers->save($departementsUser)) {
                $this->Flash->success(__('The departements user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The departements user could not be saved. Please, try again.'));
            }
        }
        $departements = $this->DepartementsUsers->Departements->find('list', ['limit' => 200]);
        $users = $this->DepartementsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('departementsUser', 'departements', 'users'));
        $this->set('_serialize', ['departementsUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Departements User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departementsUser = $this->DepartementsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departementsUser = $this->DepartementsUsers->patchEntity($departementsUser, $this->request->data);
            if ($this->DepartementsUsers->save($departementsUser)) {
                $this->Flash->success(__('The departements user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The departements user could not be saved. Please, try again.'));
            }
        }
        $departements = $this->DepartementsUsers->Departements->find('list', ['limit' => 200]);
        $users = $this->DepartementsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('departementsUser', 'departements', 'users'));
        $this->set('_serialize', ['departementsUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Departements User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departementsUser = $this->DepartementsUsers->get($id);
        if ($this->DepartementsUsers->delete($departementsUser)) {
            $this->Flash->success(__('The departements user has been deleted.'));
        } else {
            $this->Flash->error(__('The departements user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
