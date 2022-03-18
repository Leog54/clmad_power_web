<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Likecomm $likecomm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Likecomm'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="likecomm form content">
            <?= $this->Form->create($likecomm) ?>
            <fieldset>
                <legend><?= __('Add Likecomm') ?></legend>
                <?php
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
