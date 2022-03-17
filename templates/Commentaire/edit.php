<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commentaire $commentaire
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $commentaire->id_comm],
                ['confirm' => __('Are you sure you want to delete # {0}?', $commentaire->id_comm), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Commentaire'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commentaire form content">
            <?= $this->Form->create($commentaire) ?>
            <fieldset>
                <legend><?= __('Edit Commentaire') ?></legend>
                <?php
                    echo $this->Form->control('contenu_comm');
                    echo $this->Form->control('date_comm');
                    echo $this->Form->control('id_publi');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
