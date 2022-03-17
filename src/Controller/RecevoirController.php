<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Recevoir Controller
 *
 * @property \App\Model\Table\RecevoirTable $Recevoir
 * @method \App\Model\Entity\Recevoir[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RecevoirController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $recevoir = $this->paginate($this->Recevoir);

        $this->set(compact('recevoir'));
        $this->viewBuilder()->setOption('serialize', 'recevoir');
    }

    /**
     * View method
     *
     * @param string|null $id Recevoir id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recevoir = $this->Recevoir->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('recevoir'));
        $this->viewBuilder()->setOption('serialize', 'recevoir');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recevoir = $this->Recevoir->newEmptyEntity();
        if ($this->request->is('post')) {
            $recevoir = $this->Recevoir->patchEntity($recevoir, $this->request->getData());
            if ($this->Recevoir->save($recevoir)) {
                $this->Flash->success(__('The recevoir has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recevoir could not be saved. Please, try again.'));
        }
        $this->set(compact('recevoir'));
        $this->viewBuilder()->setOption('serialize', 'recevoir');
    }

    /**
     * Edit method
     *
     * @param string|null $id Recevoir id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recevoir = $this->Recevoir->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recevoir = $this->Recevoir->patchEntity($recevoir, $this->request->getData());
            if ($this->Recevoir->save($recevoir)) {
                $this->Flash->success(__('The recevoir has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recevoir could not be saved. Please, try again.'));
        }
        $this->set(compact('recevoir'));
        $this->viewBuilder()->setOption('serialize', 'recevoir');
    }

    /**
     * Delete method
     *
     * @param string|null $id Recevoir id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recevoir = $this->Recevoir->get($id);
        if ($this->Recevoir->delete($recevoir)) {
            $this->Flash->success(__('The recevoir has been deleted.'));
        } else {
            $this->Flash->error(__('The recevoir could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setOption('serialize', 'recevoir');
    }
}
