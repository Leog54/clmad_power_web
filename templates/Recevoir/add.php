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
            <?= $this->Html->link(__('List Recevoir'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="recevoir form content">
            <?= $this->Form->create($recevoir) ?>
            <fieldset>
                <legend><?= __('Add Recevoir') ?></legend>
                <?php
                    echo $this->Form->control('date_reception', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
