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
            <?= $this->Html->link(__('Edit Relation'), ['action' => 'edit', $relation->id_user], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Relation'), ['action' => 'delete', $relation->id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $relation->id_user), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Relation'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Relation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="relation view content">
            <h3><?= h($relation->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($relation->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($relation->id_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User 1') ?></th>
                    <td><?= $this->Number->format($relation->id_user_1) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
