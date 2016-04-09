<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EvidencesLetters Controller
 *
 * @property \App\Model\Table\EvidencesLettersTable $EvidencesLetters
 */
class EvidencesLettersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Evidences', 'Letters']
        ];
        $evidencesLetters = $this->paginate($this->EvidencesLetters);

        $this->set(compact('evidencesLetters'));
        $this->set('_serialize', ['evidencesLetters']);
    }

    /**
     * View method
     *
     * @param string|null $id Evidences Letter id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evidencesLetter = $this->EvidencesLetters->get($id, [
            'contain' => ['Evidences', 'Letters']
        ]);

        $this->set('evidencesLetter', $evidencesLetter);
        $this->set('_serialize', ['evidencesLetter']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evidencesLetter = $this->EvidencesLetters->newEntity();
        if ($this->request->is('post')) {
            $evidencesLetter = $this->EvidencesLetters->patchEntity($evidencesLetter, $this->request->data);
            if ($this->EvidencesLetters->save($evidencesLetter)) {
                $this->Flash->success(__('The evidences letter has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evidences letter could not be saved. Please, try again.'));
            }
        }
        $evidences = $this->EvidencesLetters->Evidences->find('list', ['limit' => 200]);
        $letters = $this->EvidencesLetters->Letters->find('list', ['limit' => 200]);
        $this->set(compact('evidencesLetter', 'evidences', 'letters'));
        $this->set('_serialize', ['evidencesLetter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evidences Letter id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evidencesLetter = $this->EvidencesLetters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evidencesLetter = $this->EvidencesLetters->patchEntity($evidencesLetter, $this->request->data);
            if ($this->EvidencesLetters->save($evidencesLetter)) {
                $this->Flash->success(__('The evidences letter has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evidences letter could not be saved. Please, try again.'));
            }
        }
        $evidences = $this->EvidencesLetters->Evidences->find('list', ['limit' => 200]);
        $letters = $this->EvidencesLetters->Letters->find('list', ['limit' => 200]);
        $this->set(compact('evidencesLetter', 'evidences', 'letters'));
        $this->set('_serialize', ['evidencesLetter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evidences Letter id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evidencesLetter = $this->EvidencesLetters->get($id);
        if ($this->EvidencesLetters->delete($evidencesLetter)) {
            $this->Flash->success(__('The evidences letter has been deleted.'));
        } else {
            $this->Flash->error(__('The evidences letter could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
