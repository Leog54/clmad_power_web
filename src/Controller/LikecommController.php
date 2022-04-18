<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Likecomm Controller
 *
 * @property \App\Model\Table\LikecommTable $Likecomm
 * @method \App\Model\Entity\Likecomm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LikecommController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->Authorization->skipAuthorization();
        $likecomm = $this->paginate($this->Likecomm);

        $this->set(compact('likecomm'));
    }

    /**
     * View method
     *
     * @param string|null $id Likecomm id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->Authorization->skipAuthorization();
        $likecomm = $this->Likecomm->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('likecomm'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $likecomm = $this->Likecomm->newEmptyEntity();
        $this->Authorization->authorize($likecomm);
        if ($this->request->is('post')) {
            $likecomm = $this->Likecomm->patchEntity($likecomm, $this->request->getData());
            if ($this->Likecomm->save($likecomm)) {
                $this->Flash->success(__('The likecomm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likecomm could not be saved. Please, try again.'));
        }
        $this->set(compact('likecomm'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Likecomm id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $likecomm = $this->Likecomm->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($likecomm);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $likecomm = $this->Likecomm->patchEntity($likecomm, $this->request->getData());
            if ($this->Likecomm->save($likecomm)) {
                $this->Flash->success(__('The likecomm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The likecomm could not be saved. Please, try again.'));
        }
        $this->set(compact('likecomm'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Likecomm id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $likecomm = $this->Likecomm->get($id);
        $this->Authorization->authorize($likecomm);
        if ($this->Likecomm->delete($likecomm)) {
            $this->Flash->success(__('The likecomm has been deleted.'));
        } else {
            $this->Flash->error(__('The likecomm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
