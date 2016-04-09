<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EvidencesDispositions Controller
 *
 * @property \App\Model\Table\EvidencesDispositionsTable $EvidencesDispositions
 */
class EvidencesDispositionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Evidences', 'Dispositions']
        ];
        $evidencesDispositions = $this->paginate($this->EvidencesDispositions);

        $this->set(compact('evidencesDispositions'));
        $this->set('_serialize', ['evidencesDispositions']);
    }

    /**
     * View method
     *
     * @param string|null $id Evidences Disposition id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evidencesDisposition = $this->EvidencesDispositions->get($id, [
            'contain' => ['Evidences', 'Dispositions']
        ]);

        $this->set('evidencesDisposition', $evidencesDisposition);
        $this->set('_serialize', ['evidencesDisposition']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evidencesDisposition = $this->EvidencesDispositions->newEntity();
        if ($this->request->is('post')) {
            $evidencesDisposition = $this->EvidencesDispositions->patchEntity($evidencesDisposition, $this->request->data);
            if ($this->EvidencesDispositions->save($evidencesDisposition)) {
                $this->Flash->success(__('The evidences disposition has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evidences disposition could not be saved. Please, try again.'));
            }
        }
        $evidences = $this->EvidencesDispositions->Evidences->find('list', ['limit' => 200]);
        $dispositions = $this->EvidencesDispositions->Dispositions->find('list', ['limit' => 200]);
        $this->set(compact('evidencesDisposition', 'evidences', 'dispositions'));
        $this->set('_serialize', ['evidencesDisposition']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evidences Disposition id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evidencesDisposition = $this->EvidencesDispositions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evidencesDisposition = $this->EvidencesDispositions->patchEntity($evidencesDisposition, $this->request->data);
            if ($this->EvidencesDispositions->save($evidencesDisposition)) {
                $this->Flash->success(__('The evidences disposition has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evidences disposition could not be saved. Please, try again.'));
            }
        }
        $evidences = $this->EvidencesDispositions->Evidences->find('list', ['limit' => 200]);
        $dispositions = $this->EvidencesDispositions->Dispositions->find('list', ['limit' => 200]);
        $this->set(compact('evidencesDisposition', 'evidences', 'dispositions'));
        $this->set('_serialize', ['evidencesDisposition']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evidences Disposition id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evidencesDisposition = $this->EvidencesDispositions->get($id);
        if ($this->EvidencesDispositions->delete($evidencesDisposition)) {
            $this->Flash->success(__('The evidences disposition has been deleted.'));
        } else {
            $this->Flash->error(__('The evidences disposition could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
