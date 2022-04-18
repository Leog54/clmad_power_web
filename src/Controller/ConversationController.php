<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Conversation Controller
 *
 * @property \App\Model\Table\ConversationTable $Conversation
 * @method \App\Model\Entity\Conversation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConversationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $conversation = $this->paginate($this->Conversation);

        $this->set(compact('conversation'));
        $this->viewBuilder()->setOption('serialize', 'conversation');
    }

    /**
     * View method
     *
     * @param string|null $id Conversation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $conversation = $this->Conversation->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('conversation'));
        $this->viewBuilder()->setOption('serialize', 'conversation');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $conversation = $this->Conversation->newEmptyEntity();
        $this->Authorization->authorize($conversation);
        if ($this->request->is('post')) {
            $conversation = $this->Conversation->patchEntity($conversation, $this->request->getData());
            if ($this->Conversation->save($conversation)) {
                $this->Flash->success(__('The conversation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conversation could not be saved. Please, try again.'));
        }
        $this->set(compact('conversation'));
        $this->viewBuilder()->setOption('serialize', 'conversation');
    }

    /**
     * Edit method
     *
     * @param string|null $id Conversation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $conversation = $this->Conversation->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($conversation);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $conversation = $this->Conversation->patchEntity($conversation, $this->request->getData());
            if ($this->Conversation->save($conversation)) {
                $this->Flash->success(__('The conversation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The conversation could not be saved. Please, try again.'));
        }
        $this->set(compact('conversation'));
        $this->viewBuilder()->setOption('serialize', 'conversation');
    }

    /**
     * Delete method
     *
     * @param string|null $id Conversation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $conversation = $this->Conversation->get($id);
        $this->Authorization->authorize($conversation);
        if ($this->Conversation->delete($conversation)) {
            $this->Flash->success(__('The conversation has been deleted.'));
        } else {
            $this->Flash->error(__('The conversation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setOption('serialize', 'conversation');
    }
}
