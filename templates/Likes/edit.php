<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Like $like
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $like->id_like],
                ['confirm' => __('Are you sure you want to delete # {0}?', $like->id_like), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Likes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="likes form content">
            <?= $this->Form->create($like) ?>
            <fieldset>
                <legend><?= __('Edit Like') ?></legend>
                <?php
                    echo $this->Form->control('id_comm');
                    echo $this->Form->control('id_user');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
