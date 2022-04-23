<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publication $publication
 */
?>
<div class="publication detail">
    <h3><?= "Publication de " . $user[0]['nom_user'] . " " . $user[0]['prenom_user'] ?></h3>
    <p>Catégorie : <?= h($categorie[0]['nom_categ']) ?></p>
    <p><?= h($publication->contenu_publi) ?></p>

    <div class="sectionCommentaires">
        <?php foreach($commentaires as $commentaire): ?>
        <p><?= h($commentaire->contenu_comm) ?></p>
        <p><?= h($commentaire->date_comm->nice('Europe/Paris', 'fr-FR')) ?></p>
        <?php endforeach; ?>
    </div>


</div>
