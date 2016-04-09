<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dispositions Controller
 *
 * @property \App\Model\Table\DispositionsTable $Dispositions
 */
class DispositionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentDispositions', 'Letters', 'Users', 'Recipients']
        ];
        $dispositions = $this->paginate($this->Dispositions);

        $this->set(compact('dispositions'));
        $this->set('_serialize', ['dispositions']);
    }

    /**
     * View method
     *
     * @param string|null $id Disposition id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $disposition = $this->Dispositions->get($id, [
            'contain' => ['ParentDispositions', 'Letters', 'Users', 'Recipients', 'Evidences', 'ChildDispositions']
        ]);

        $this->set('disposition', $disposition);
        $this->set('_serialize', ['disposition']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $disposition = $this->Dispositions->newEntity();
        if ($this->request->is('post')) {
            $disposition = $this->Dispositions->patchEntity($disposition, $this->request->data);
            if ($this->Dispositions->save($disposition)) {
                $this->Flash->success(__('The disposition has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The disposition could not be saved. Please, try again.'));
            }
        }
        $parentDispositions = $this->Dispositions->ParentDispositions->find('list', ['limit' => 200]);
        $letters = $this->Dispositions->Letters->find('list', ['limit' => 200]);
        $users = $this->Dispositions->Users->find('list', ['limit' => 200]);
        $recipients = $this->Dispositions->Recipients->find('list', ['limit' => 200]);
        $evidences = $this->Dispositions->Evidences->find('list', ['limit' => 200]);
        $this->set(compact('disposition', 'parentDispositions', 'letters', 'users', 'recipients', 'evidences'));
        $this->set('_serialize', ['disposition']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Disposition id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $disposition = $this->Dispositions->get($id, [
            'contain' => ['Evidences']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $disposition = $this->Dispositions->patchEntity($disposition, $this->request->data);
            if ($this->Dispositions->save($disposition)) {
                $this->Flash->success(__('The disposition has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The disposition could not be saved. Please, try again.'));
            }
        }
        $parentDispositions = $this->Dispositions->ParentDispositions->find('list', ['limit' => 200]);
        $letters = $this->Dispositions->Letters->find('list', ['limit' => 200]);
        $users = $this->Dispositions->Users->find('list', ['limit' => 200]);
        $recipients = $this->Dispositions->Recipients->find('list', ['limit' => 200]);
        $evidences = $this->Dispositions->Evidences->find('list', ['limit' => 200]);
        $this->set(compact('disposition', 'parentDispositions', 'letters', 'users', 'recipients', 'evidences'));
        $this->set('_serialize', ['disposition']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Disposition id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $disposition = $this->Dispositions->get($id);
        if ($this->Dispositions->delete($disposition)) {
            $this->Flash->success(__('The disposition has been deleted.'));
        } else {
            $this->Flash->error(__('The disposition could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
