<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ressources Controller
 *
 * @property \App\Model\Table\RessourcesTable $Ressources
 * @method \App\Model\Entity\Ressource[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RessourcesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $ressources = $this->paginate($this->Ressources);

        $this->set(compact('ressources'));
        $this->viewBuilder()->setOption('serialize', 'ressources');
    }

    /**
     * View method
     *
     * @param string|null $id Ressource id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $ressource = $this->Ressources->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ressource'));
        $this->viewBuilder()->setOption('serialize', 'ressources');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ressource = $this->Ressources->newEmptyEntity();
        $this->Authorization->authorize($ressource);
        if ($this->request->is('post')) {
            $ressource = $this->Ressources->patchEntity($ressource, $this->request->getData());
            if ($this->Ressources->save($ressource)) {
                $this->Flash->success(__('The ressource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ressource could not be saved. Please, try again.'));
        }
        $this->set(compact('ressource'));
        $this->viewBuilder()->setOption('serialize', 'ressources');
    }

    /**
     * Edit method
     *
     * @param string|null $id Ressource id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ressource = $this->Ressources->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($ressource);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ressource = $this->Ressources->patchEntity($ressource, $this->request->getData());
            if ($this->Ressources->save($ressource)) {
                $this->Flash->success(__('The ressource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ressource could not be saved. Please, try again.'));
        }
        $this->set(compact('ressource'));
        $this->viewBuilder()->setOption('serialize', 'ressources');
    }

    /**
     * Delete method
     *
     * @param string|null $id Ressource id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ressource = $this->Ressources->get($id);
        $this->Authorization->authorize($ressource);
        if ($this->Ressources->delete($ressource)) {
            $this->Flash->success(__('The ressource has been deleted.'));
        } else {
            $this->Flash->error(__('The ressource could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setOption('serialize', 'ressources');
    }
}
