<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Recipients Controller
 *
 * @property \App\Model\Table\RecipientsTable $Recipients
 */
class RecipientsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $recipients = $this->paginate($this->Recipients);

        $this->set(compact('recipients'));
        $this->set('_serialize', ['recipients']);
    }

    /**
     * View method
     *
     * @param string|null $id Recipient id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recipient = $this->Recipients->get($id, [
            'contain' => ['Dispositions']
        ]);

        $this->set('recipient', $recipient);
        $this->set('_serialize', ['recipient']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recipient = $this->Recipients->newEntity();
        if ($this->request->is('post')) {
            $recipient = $this->Recipients->patchEntity($recipient, $this->request->data);
            if ($this->Recipients->save($recipient)) {
                $this->Flash->success(__('The recipient has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recipient could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('recipient'));
        $this->set('_serialize', ['recipient']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recipient id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recipient = $this->Recipients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recipient = $this->Recipients->patchEntity($recipient, $this->request->data);
            if ($this->Recipients->save($recipient)) {
                $this->Flash->success(__('The recipient has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recipient could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('recipient'));
        $this->set('_serialize', ['recipient']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recipient id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recipient = $this->Recipients->get($id);
        if ($this->Recipients->delete($recipient)) {
            $this->Flash->success(__('The recipient has been deleted.'));
        } else {
            $this->Flash->error(__('The recipient could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
