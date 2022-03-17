<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversation $conversation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conversation->id_conver],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conversation->id_conver), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conversation'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conversation form content">
            <?= $this->Form->create($conversation) ?>
            <fieldset>
                <legend><?= __('Edit Conversation') ?></legend>
                <?php
                    echo $this->Form->control('nom_conver');
                    echo $this->Form->control('id_user');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
