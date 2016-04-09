<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vias Controller
 *
 * @property \App\Model\Table\ViasTable $Vias
 */
class ViasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $vias = $this->paginate($this->Vias);

        $this->set(compact('vias'));
        $this->set('_serialize', ['vias']);
    }

    /**
     * View method
     *
     * @param string|null $id Via id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $via = $this->Vias->get($id, [
            'contain' => ['Letters']
        ]);

        $this->set('via', $via);
        $this->set('_serialize', ['via']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $via = $this->Vias->newEntity();
        if ($this->request->is('post')) {
            $via = $this->Vias->patchEntity($via, $this->request->data);
            if ($this->Vias->save($via)) {
                $this->Flash->success(__('The via has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The via could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('via'));
        $this->set('_serialize', ['via']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Via id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $via = $this->Vias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $via = $this->Vias->patchEntity($via, $this->request->data);
            if ($this->Vias->save($via)) {
                $this->Flash->success(__('The via has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The via could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('via'));
        $this->set('_serialize', ['via']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Via id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $via = $this->Vias->get($id);
        if ($this->Vias->delete($via)) {
            $this->Flash->success(__('The via has been deleted.'));
        } else {
            $this->Flash->error(__('The via could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
