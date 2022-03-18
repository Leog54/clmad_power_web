<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Likepubli Controller
 *
 * @property \App\Model\Table\LikepubliTable $Likepubli
 * @method \App\Model\Entity\Likepubli[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LikepubliController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $likepubli = $this->paginate($this->Likepubli);

        $this->set(compact('likepubli'));
    }

    /**
     * View method
     *
     * @param string|null $id Likepubli id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $likepubli = $this->Likepubli->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('likepubli'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $likepubli = $this->Likepubli->newEmptyEntity();
        if ($this->request->is('post')) {
            $likepubli = $this->Likepubli->patchEntity($likepubli, $this->request->getData());
            if ($this->Likepubli->save($likepubli)) {
                $this->Flash->success(__('The likepubli has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likepubli could not be saved. Please, try again.'));
        }
        $this->set(compact('likepubli'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Likepubli id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $likepubli = $this->Likepubli->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $likepubli = $this->Likepubli->patchEntity($likepubli, $this->request->getData());
            if ($this->Likepubli->save($likepubli)) {
                $this->Flash->success(__('The likepubli has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likepubli could not be saved. Please, try again.'));
        }
        $this->set(compact('likepubli'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Likepubli id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $likepubli = $this->Likepubli->get($id);
        if ($this->Likepubli->delete($likepubli)) {
            $this->Flash->success(__('The likepubli has been deleted.'));
        } else {
            $this->Flash->error(__('The likepubli could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
