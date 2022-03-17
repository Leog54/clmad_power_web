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
            <?= $this->Html->link(__('Edit Like'), ['action' => 'edit', $like->id_like], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Like'), ['action' => 'delete', $like->id_like], ['confirm' => __('Are you sure you want to delete # {0}?', $like->id_like), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Likes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Like'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="likes view content">
            <h3><?= h($like->id_like) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Like') ?></th>
                    <td><?= $this->Number->format($like->id_like) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Comm') ?></th>
                    <td><?= $this->Number->format($like->id_comm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($like->id_user) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
