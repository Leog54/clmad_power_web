<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Relation Controller
 *
 * @property \App\Model\Table\RelationTable $Relation
 * @method \App\Model\Entity\Relation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RelationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $relation = $this->paginate($this->Relation);

        $this->set(compact('relation'));
    }

    /**
     * View method
     *
     * @param string|null $id Relation id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $relation = $this->Relation->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('relation'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->Authorization->skipAuthorization();
        $relation = $this->Relation->newEmptyEntity();
        if ($this->request->is('post')) {
            $relation = $this->Relation->patchEntity($relation, $this->request->getData());
            if ($this->Relation->save($relation)) {
                $this->Flash->success(__('The relation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The relation could not be saved. Please, try again.'));
        }
        $this->set(compact('relation'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Relation id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $relation = $this->Relation->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $relation = $this->Relation->patchEntity($relation, $this->request->getData());
            if ($this->Relation->save($relation)) {
                $this->Flash->success(__('The relation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The relation could not be saved. Please, try again.'));
        }
        $this->set(compact('relation'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Relation id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $relation = $this->Relation->get($id);
        if ($this->Relation->delete($relation)) {
            $this->Flash->success(__('The relation has been deleted.'));
        } else {
            $this->Flash->error(__('The relation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
