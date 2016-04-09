<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Evidences Controller
 *
 * @property \App\Model\Table\EvidencesTable $Evidences
 */
class EvidencesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $evidences = $this->paginate($this->Evidences);

        $this->set(compact('evidences'));
        $this->set('_serialize', ['evidences']);
    }

    /**
     * View method
     *
     * @param string|null $id Evidence id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evidence = $this->Evidences->get($id, [
            'contain' => ['Users', 'Dispositions', 'Letters']
        ]);

        $this->set('evidence', $evidence);
        $this->set('_serialize', ['evidence']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evidence = $this->Evidences->newEntity();
        if ($this->request->is('post')) {
            $evidence = $this->Evidences->patchEntity($evidence, $this->request->data);
            if ($this->Evidences->save($evidence)) {
                $this->Flash->success(__('The evidence has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evidence could not be saved. Please, try again.'));
            }
        }
        $users = $this->Evidences->Users->find('list', ['limit' => 200]);
        $dispositions = $this->Evidences->Dispositions->find('list', ['limit' => 200]);
        $letters = $this->Evidences->Letters->find('list', ['limit' => 200]);
        $this->set(compact('evidence', 'users', 'dispositions', 'letters'));
        $this->set('_serialize', ['evidence']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evidence id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evidence = $this->Evidences->get($id, [
            'contain' => ['Dispositions', 'Letters']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evidence = $this->Evidences->patchEntity($evidence, $this->request->data);
            if ($this->Evidences->save($evidence)) {
                $this->Flash->success(__('The evidence has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evidence could not be saved. Please, try again.'));
            }
        }
        $users = $this->Evidences->Users->find('list', ['limit' => 200]);
        $dispositions = $this->Evidences->Dispositions->find('list', ['limit' => 200]);
        $letters = $this->Evidences->Letters->find('list', ['limit' => 200]);
        $this->set(compact('evidence', 'users', 'dispositions', 'letters'));
        $this->set('_serialize', ['evidence']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evidence id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evidence = $this->Evidences->get($id);
        if ($this->Evidences->delete($evidence)) {
            $this->Flash->success(__('The evidence has been deleted.'));
        } else {
            $this->Flash->error(__('The evidence could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
