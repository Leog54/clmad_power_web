<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relation $relation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $relation->id_user],
                ['confirm' => __('Are you sure you want to delete # {0}?', $relation->id_user), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Relation'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="relation form content">
            <?= $this->Form->create($relation) ?>
            <fieldset>
                <legend><?= __('Edit Relation') ?></legend>
                <?php
                    echo $this->Form->control('statut');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
