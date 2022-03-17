<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recevoir $recevoir
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recevoir->id_message],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recevoir->id_message), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Recevoir'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="recevoir form content">
            <?= $this->Form->create($recevoir) ?>
            <fieldset>
                <legend><?= __('Edit Recevoir') ?></legend>
                <?php
                    echo $this->Form->control('date_reception', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
