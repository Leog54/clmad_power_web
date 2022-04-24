<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users view content">
    <div class="avatar">
        <img src="/clmad_app/webroot/img/thumbnail_a1_f1769e813a.png" alt="avatar_profil">
    </div>
    <h3><?= h($user->nom_user." ".$user->prenom_user) ?></h3>
    <div class="edit">
        <?= $this->Html->link("Modifier votre profil", ['action' => 'edit/'.$_SESSION['Auth']['id_user']]) ?>
    </div>
</div>
