<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 * @var \App\Model\Entity\Relation $relation
 */

use Cake\I18n\FrozenTime;
use PHPUnit\Framework\Constraint\IsNull;

use function PHPUnit\Framework\isEmpty;

?>


<div class="users view content">
    <div class="avatar">
        <img src="/clmad_app/webroot/img/thumbnail_a1_f1769e813a.png" alt="avatar_profil">
    </div>
    <h3><?= h($user->nom_user." ".$user->prenom_user) ?></h3>
    <?php if($_SESSION['Auth']['id_user'] == $id): ?>
        <p>Nombre de relations : <?= count($rel) ?></p>
        <div class="edit">
            <?= $this->Html->link("Modifier votre profil", ['action' => 'edit/'.$_SESSION['Auth']['id_user']]) ?>
        </div>
        <div class="addPubli">
            <p>Nouvelle Ressource ?</p>
            <?= $this->Html->link("Que voulez-vous dire ?", ['controller' => 'Publication', 'action' => 'add', 'class' => 'add']) ?>
        </div>
        <div class="publi">
            <p>Vos ressources</p>
            <?php foreach ($publication as $p): 
                    if ($p->visi == 1 || $p->id_user == $_SESSION['Auth']['id_user']) {
                ?>
                
                <div class="post">
                    <div class="contenu">
                        <?php $datePublication = new FrozenTime($p->date_publi); ?>
                        <p class="date"><?= h(__($datePublication->timeAgoInWords(['format' => 'd MMM YYY', 'end' => '+6 month']))) ?></p>
                        <p class="contenu"><?= h($p->contenu_publi) ?></p>
                        <?php if ($p->link_img_publi != "") { echo $this->Html->link($this->Html->image($p->link_img_publi, ['class' => 'imagePubli']), "/publication/view/".$p->id_publi."", ["escape" => false]) ; } ?>
                    </div>
                    <div class="actions">
                        <div class="like">
                            <?= $this->Html->link("J'aime", ['class' => 'likeButton']) ?>
                        </div>
                        <div class="commentaire">
                            <?= $this->Html->link("Commenter", ['class' => 'commentButton', 'action' => 'view', $p->id_publi]) ?>
                        </div>
                        <div class="share">
                            <?= $this->Html->link("Partager", ['class' => 'shareButton']) ?>
                        </div>
                    </div>
                </div>
            <?php } endforeach; ?>
        </div>
    <?php else: ?>
        <p>Nombre de relations : <?= count($relcible) ?></p>
        <div class="publi">
            <?php 
                // var_dump($ifrel);
                if($ifrel){
                    echo $this->Html->link("Supprimer la relation", ['controller' => 'Relation', 'action' => 'delete']);
                } else{
                    echo $this->Html->link("Ajouter une relation", ['controller' => 'Relation', 'action' => 'add']);
                }

            ?>
            <p>Ses ressources</p>
            <?php foreach ($publication as $p): 
                    if ($p->visi == 1 || $p->id_user == $_SESSION['Auth']['id_user']) {
                ?>
                
                <div class="post">
                    <div class="contenu">
                        <?php $datePublication = new FrozenTime($p->date_publi); ?>
                        <p class="date"><?= h(__($datePublication->timeAgoInWords(['format' => 'd MMM YYY', 'end' => '+6 month']))) ?></p>
                        <p class="contenu"><?= h($p->contenu_publi) ?></p>
                        <?php if ($p->link_img_publi != "") { echo $this->Html->link($this->Html->image($p->link_img_publi, ['class' => 'imagePubli']), "/publication/view/".$p->id_publi."", ["escape" => false]) ; } ?>
                    </div>
                    <div class="actions">
                        <div class="like">
                            <?= $this->Html->link("J'aime", ['class' => 'likeButton']) ?>
                        </div>
                        <div class="commentaire">
                            <?= $this->Html->link("Commenter", ['class' => 'commentButton', 'action' => 'view', $p->id_publi]) ?>
                        </div>
                        <div class="share">
                            <?= $this->Html->link("Partager", ['class' => 'shareButton']) ?>
                        </div>
                    </div>
                </div>
                <?php } endforeach; ?>
        </div>
    <?php endif; ?>
</div>
