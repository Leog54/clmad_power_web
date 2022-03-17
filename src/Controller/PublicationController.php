<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Publication Controller
 *
 * @property \App\Model\Table\PublicationTable $Publication
 * @method \App\Model\Entity\Publication[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PublicationController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $publication = $this->paginate($this->Publication);

        $this->set(compact('publication'));
        $this->viewBuilder()->setOption('serialize', 'publication');
    }

    /**
     * View method
     *
     * @param string|null $id Publication id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publication = $this->Publication->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('publication'));
        $this->viewBuilder()->setOption('serialize', 'publication');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publication = $this->Publication->newEmptyEntity();
        if ($this->request->is('post')) {
            $publication = $this->Publication->patchEntity($publication, $this->request->getData());
            if ($this->Publication->save($publication)) {
                $this->Flash->success(__('The publication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publication could not be saved. Please, try again.'));
        }
        $this->set(compact('publication'));
        $this->viewBuilder()->setOption('serialize', 'publication');
    }

    /**
     * Edit method
     *
     * @param string|null $id Publication id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publication = $this->Publication->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publication = $this->Publication->patchEntity($publication, $this->request->getData());
            if ($this->Publication->save($publication)) {
                $this->Flash->success(__('The publication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publication could not be saved. Please, try again.'));
        }
        $this->set(compact('publication'));
        $this->viewBuilder()->setOption('serialize', 'publication');
    }

    /**
     * Delete method
     *
     * @param string|null $id Publication id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publication = $this->Publication->get($id);
        if ($this->Publication->delete($publication)) {
            $this->Flash->success(__('The publication has been deleted.'));
        } else {
            $this->Flash->error(__('The publication could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setOption('serialize', 'publication');
    }
}
