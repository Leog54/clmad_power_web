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
            <?= $this->Html->link(__('List Commentaire'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commentaire form content">
            <?= $this->Form->create($commentaire) ?>
            <fieldset>
                <legend><?= __('Add Commentaire') ?></legend>
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
