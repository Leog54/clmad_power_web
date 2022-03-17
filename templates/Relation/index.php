<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relation[]|\Cake\Collection\CollectionInterface $relation
 */
?>
<div class="relation index content">
    <?= $this->Html->link(__('New Relation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Relation') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_user') ?></th>
                    <th><?= $this->Paginator->sort('id_user_1') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($relation as $relation): ?>
                <tr>
                    <td><?= $this->Number->format($relation->id_user) ?></td>
                    <td><?= $this->Number->format($relation->id_user_1) ?></td>
                    <td><?= h($relation->statut) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $relation->id_user]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $relation->id_user]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $relation->id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $relation->id_user)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
