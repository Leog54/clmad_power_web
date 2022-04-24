<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
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
    <p>Nombre de relations : 0</p>
    <?php if($_SESSION['Auth']['id_user'] == $id): ?>
        <div class="edit">
            <?= $this->Html->link("Modifier votre profil", ['action' => 'edit/'.$_SESSION['Auth']['id_user']]) ?>
        </div>
        <div class="addPubli">
            <p>Nouvelle Ressource ?</p>
            <?= $this->Html->link("Que voulez-vous dire ?", ['controller' => 'Publication', 'action' => 'add']) ?>
        </div>
        <div class="publi">
            <p>Vos ressources</p>
            <?php foreach ($publication as $p): 
                    if ($p->visi == 1 || $p->id_user == $_SESSION['Auth']['id_user']) {
                ?>
                
                <div class="post">
                    <div class="contenu">
                        <?php $datePublication = new FrozenTime($p->date_publi); ?>
                        <p><?= h(__($datePublication->timeAgoInWords(['format' => 'd MMM YYY', 'end' => '+6 month']))) ?></p>
                        <p><?= h($p->contenu_publi) ?></p>
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
        <div class="publi">
            <?php echo $this->Form->create($relation); ?>
                <?= $this->Form->control('id_user', ['value' => $_SESSION['Auth']['id_user'], "type" => 'hidden']) ?> 
                <?= $this->Form->control('id_user_1', ['value' => $id, "type" => 'hidden']) ?>     
                <?= $this->Form->submit(__("Ajouter une relation")) ?>
            <?= $this->Form->end() ?>
            <p>Ses ressources</p>
            <?php foreach ($publication as $p): 
                    if ($p->visi == 1 || $p->id_user == $_SESSION['Auth']['id_user']) {
                ?>
                
                <div class="post">
                    <div class="contenu">
                        <?php $datePublication = new FrozenTime($p->date_publi); ?>
                        <p><?= h(__($datePublication->timeAgoInWords(['format' => 'd MMM YYY', 'end' => '+6 month']))) ?></p>
                        <p><?= h($p->contenu_publi) ?></p>
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
