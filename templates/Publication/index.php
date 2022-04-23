<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publication[]|\Cake\Collection\CollectionInterface $publication
 */

use Cake\I18n\FrozenTime;
use PHPUnit\Framework\Constraint\IsNull;

use function PHPUnit\Framework\isEmpty;

?>
<div class="publication index content">
    <?= $this->Html->link(__('Créer une nouvelle publication'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bonjour ' . $connectedUser->prenom_user . ', voici votre fil d\'actualité... ')  ?></h3>

        <div class="posts">
            <?php foreach ($publications as $i => $publication): 
                if ($publication->visi == 1 || $publication->id_user == $connectedUser->id_user) {
            ?>
            
            <div class="post">
                <div class="contenu">
                    <p><?= h($AuthorUserPubli[$i][0]['nom_user'] . " " . $AuthorUserPubli[$i][0]['prenom_user']) ?></p>
                    <?php $datePublication = new FrozenTime($publication->date_publi); ?>
                    <p><?= h(__($datePublication->timeAgoInWords(['format' => 'd MMM YYY', 'end' => '+6 month']))) ?></p>
                    <p><?= h($publication->contenu_publi) ?></p>
                    <?php if ($publication->link_img_publi != "") { echo $this->Html->image($publication->link_img_publi, ['class' => 'imagePubli']); } ?>
                </div>
                <div class="actions">
                    <div class="like">
                        <?= $this->Html->link("J'aime", ['class' => 'likeButton']) ?>
                    </div>
                    <div class="commentaire">
                        <?= $this->Html->link("Commenter", ['class' => 'commentButton', 'controller' => 'Likecomm', 'action' => 'add']) ?>
                    </div>
                    <div class="share">
                        <?= $this->Html->link("Partager", ['class' => 'shareButton']) ?>
                    </div>
                </div>
            </div>
            <?php } endforeach; ?>
        </div>
</div>
