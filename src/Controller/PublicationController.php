<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Categorie;
use Cake\ORM\TableRegistry;

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
        $this->Authorization->skipAuthorization();
        $publications = $this->paginate($this->Publication);
        $connectedUser = $this->Authentication->getIdentity();
        $AuthorUserPubli = [];
        $CommentairesPubli = [];

        foreach ($publications as $publication) {
            $query = $this->fetchTable('Users')->find('all', [
                'fields' => ['nom_user', 'prenom_user'],
                'conditions' => ['Users.id_user =' => $publication->id_user]
                ]);
            $result = $query->all();
            $user = $result->toArray();
            array_push($AuthorUserPubli, $user);

            $query2 = $this->fetchTable('Commentaire')->find('all', [
                'fields' => ['contenu_comm', 'date_comm'],
                'conditions' => ['Commentaire.id_publi' => $publication->id_publi]
            ]);
            $result2 = $query2->all();
            $commentaire = $result2->toArray();
            array_push($CommentairesPubli, $commentaire);
        }

        $this->set(compact('publications'));
        $this->set(compact('connectedUser'));
        $this->set(compact('AuthorUserPubli'));
        $this->set(compact('CommentairesPubli'));

        $this->viewBuilder()->setOption('serialize', 'publications');
    }

    /**
     * View method
     *
     * @param string|null $id Publication id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id)
    {
        $this->Authorization->skipAuthorization();
        $publication = $this->Publication->get($id);

        $query = $this->fetchTable('Users')->find('all', [
            'fields' => ['nom_user', 'prenom_user'],
            'conditions' => ['Users.id_user =' => $publication->id_user]
            ]);
        $result = $query->all();
        $user = $result->toArray();

        $query2 = $this->fetchTable('Commentaire')->find('all', [
            'fields' => ['contenu_comm', 'date_comm'],
            'conditions' => ['Commentaire.id_publi' => $publication->id_publi]
        ]);
        $result2 = $query2->all();
        $commentaires = $result2->toArray();

        $query3 = $this->fetchTable('Categorie')->find('all', [
            'fields' => ['nom_categ'],
            'conditions' => ['Categorie.id_categ' => $publication->id_categ]
        ]);

        $result3 = $query3->all();
        $categorie = $result3->toArray();

            $commentaireTable = TableRegistry::getTableLocator()->get('Commentaire');
            $newCommentaire = $commentaireTable->newEntity($this->request->getData());
            $commentaire = $commentaireTable->patchEntity($newCommentaire, $this->request->getData());
            if (!$commentaire->isEmpty('contenu_comm')) {
                if ($commentaireTable->save($commentaire)) {
                    $this->Flash->success(__('Le commentaire a été ajouté avec succès.'));
                }
                else {
                    $this->Flash->error(__('Le commentaire n\'a pas été enregistré. Merci de réessayer.'));
                }
                $this->redirect($this->referer());
            } 

        $this->set(compact('publication'));
        $this->set(compact('user'));
        $this->set(compact('commentaires'));
        $this->set(compact('categorie'));
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
        $this->Authorization->authorize($publication);
        $user = $this->Authentication->getIdentity();
        $userId = $user->id_user;

        if ($this->request->is('post')) {
            $publication = $this->Publication->patchEntity($publication, $this->request->getData());
            $pjPubli = $this->request->getData('link_pj_publi');

            if (!$publication->getErrors) {
                $name = $pjPubli->getClientFilename();
                $targetPath = WWW_ROOT.'img'.DS.$name;
                
                if ($name) {
                    $pjPubli->moveTo($targetPath);
                    $publication->link_pj_publi = $name;
                }
            }
            
            if ($this->Publication->save($publication)) {
                $this->Flash->success(__('The publication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publication could not be saved. Please, try again.'));
        }


        $data = $this->fetchTable('Categorie')->find('list', [
            'order' => 'Categorie.nom_categ ASC',
            'valueField' => 'nom_categ'
        ]);

        $result = $data->all();
        $categories = $result->toArray();

        $this->set(compact('userId'));
        $this->set(compact('categories'));
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
    public function edit($id)
    {
        $publication = $this->Publication->get($id, [
            'contain' => [],
        ]);
        $this->Authorization->authorize($publication);
        $user = $this->Authentication->getIdentity();
        $userId = $user->id_user;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publication = $this->Publication->patchEntity($publication, $this->request->getData(), [
                'accessibleFields' => ['id_user' => false]
            ]);
            if ($this->Publication->save($publication)) {
                $this->Flash->success(__('The publication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The publication could not be saved. Please, try again.'));
        }

        $data = $this->fetchTable('Categorie')->find('list', [
            'order' => 'Categorie.nom_categ ASC',
            'valueField' => 'nom_categ'
        ]);

        $result = $data->all();
        $categories = $result->toArray();

        $this->set(compact('categories'));
        $this->set(compact('publication'));
        $this->set(compact('userId'));
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
        $this->Authorization->authorize($publication);
        if ($this->Publication->delete($publication)) {
            $this->Flash->success(__('The publication has been deleted.'));
        } else {
            $this->Flash->error(__('The publication could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        $this->viewBuilder()->setOption('serialize', 'publication');
    }
}
