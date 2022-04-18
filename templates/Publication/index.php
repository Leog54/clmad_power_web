<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publication[]|\Cake\Collection\CollectionInterface $publication
 */

use PHPUnit\Framework\Constraint\IsNull;

use function PHPUnit\Framework\isEmpty;

?>
<div class="publication index content">
    <?= $this->Html->link(__('New Publication'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bonjour ' . $userPrenom . ', voici votre fil d\'actualité... ')  ?></h3>

        <div class="posts">
            <?php foreach ($publication as $publication): ?>
            <div class="post">
                <div class="contenu">

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
            <?php endforeach; ?>
        </div>
</div>
