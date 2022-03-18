<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Likepubli $likepubli
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Likepubli'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="likepubli form content">
            <?= $this->Form->create($likepubli) ?>
            <fieldset>
                <legend><?= __('Add Likepubli') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
