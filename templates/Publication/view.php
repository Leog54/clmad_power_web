<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publication $publication
 */
?>
<div class="publication detail">
    <h3><?= "Publication de " . $user[0]['nom_user'] . " " . $user[0]['prenom_user'] ?></h3>
    <p>Catégorie : <?= h($categorie[0]['nom_categ']) ?></p>
    <p><?= $publication->contenu_publi ?></p>
    <p><?php if ($publication->link_img_publi != "") { echo $this->Html->image($publication->link_img_publi, ['class' => 'imagePubli']); } ?></p>

    <div class="formulaireCommentaire">
        <?= $this->Form->create($commentaires, ['url' => ['controller' => 'publication', 'action' => 'view', $publication->id_publi]]) ?>
        <fieldset>
            <legend><?= __('Ajouter un commentaire') ?></legend>
            <?php
                echo $this->Form->control('contenu_comm', ['label' => 'Contenu de votre message']);
                echo $this->Form->control('id_publi', ['type' => 'hidden', 'value' => $publication->id_publi]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Envoyer')) ?>
        <?= $this->Form->end() ?>
    </div>

    <div class="sectionCommentaires">
        <p><?= count($commentaires) . " commentaires" ?></p>
        <?php foreach($commentaires as $commentaire): ?>
        <p><?= $commentaire->contenu_comm ?></p>
        <p><?= h($commentaire->date_comm->nice('Europe/Paris', 'fr-FR')) ?></p>
        <?php endforeach; ?>
    </div>
</div>


