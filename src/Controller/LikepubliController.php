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

    public function add($idPubli)
    {
        $likepubli = $this->Likepubli->newEmptyEntity();
        $this->Authorization->authorize($likepubli);
        $user = $this->Authentication->getIdentity();
        $likepubli = $this->Likepubli->newEntity([
            'id_user' => $user->id_user,
            'id_publi' => $idPubli
        ]);

        if ($this->Likepubli->save($likepubli)) {
            return $this->redirect(['controller' => 'publication', 'action' => 'index']);
        }
        else {
            $this->Flash->error(__('Le like n\'a pas été ajouté. Merci de réessayer.'));
        }
    }

    public function delete($idPubli)
    {
        $likepubli = $this->Likepubli->newEmptyEntity();
        $this->Authorization->authorize($likepubli);
        $user = $this->Authentication->getIdentity();
        $likepubli = $this->Likepubli->newEntity([
            'id_user' => $user->id_user,
            'id_publi' => $idPubli
        ]);

        $likepubli = $this->Likepubli->get(['id_user' => $user->id_user,'id_publi' => $idPubli]);

        if ($this->Likepubli->delete($likepubli)) {
            return $this->redirect(['controller' => 'publication', 'action' => 'index']);
        }
        else {
            $this->Flash->error(__('Le like n\'a pas été enlevé. Merci de réessayer.'));
        }
    }
}
