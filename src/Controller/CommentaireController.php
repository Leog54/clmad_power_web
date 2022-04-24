<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Commentaire Controller
 *
 * @property \App\Model\Table\CommentaireTable $Commentaire
 * @method \App\Model\Entity\Commentaire[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CommentaireController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $commentaire = $this->paginate($this->Commentaire);

        $this->set(compact('commentaire'));
        $this->viewBuilder()->setOption('serialize', 'commentaire');
    }

    /**
     * View method
     *
     * @param string|null $id Commentaire id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $commentaire = $this->Commentaire->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('commentaire'));
        $this->viewBuilder()->setOption('serialize', 'commentaire');
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($id)
    {
        $commentaire = $this->Commentaire->newEmptyEntity();
        $this->Authorization->authorize($commentaire);
        $user = $this->Authentication->getIdentity();
        $userId = $user->id_user;

        if ($this->request->is('post')) {
            $commentaire = $this->Commentaire->patchEntity($commentaire, $this->request->getData());
            debug($commentaire);
            if ($this->Commentaire->save($commentaire)) {
                $this->Flash->success(__('The commentaire has been saved.'));

                return $this->redirect(['controller' => 'publication', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('The commentaire could not be saved. Please, try again.'));
        }

        $this->set(compact('userId'));
        $this->set(compact('commentaire'));
        $this->viewBuilder()->setOption('serialize', 'commentaire');
    }

    /**
     * Edit method
     *
     * @param string|null $id Commentaire id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commentaire = $this->Commentaire->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($commentaire);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commentaire = $this->Commentaire->patchEntity($commentaire, $this->request->getData());
            if ($this->Commentaire->save($commentaire)) {
                $this->Flash->success(__('The commentaire has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The commentaire could not be saved. Please, try again.'));
        }
        $this->set(compact('commentaire'));
        $this->viewBuilder()->setOption('serialize', 'commentaire');
    }

    /**
     * Delete method
     *
     * @param string|null $id Commentaire id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commentaire = $this->Commentaire->get($id);
        $this->Authorization->authorize($commentaire);
        if ($this->Commentaire->delete($commentaire)) {
            $this->Flash->success(__('The commentaire has been deleted.'));
        } else {
            $this->Flash->error(__('The commentaire could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setOption('serialize', 'commentaire');
    }
}
