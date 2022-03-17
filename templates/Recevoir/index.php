<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recevoir[]|\Cake\Collection\CollectionInterface $recevoir
 */
?>
<div class="recevoir index content">
    <?= $this->Html->link(__('New Recevoir'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Recevoir') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_message') ?></th>
                    <th><?= $this->Paginator->sort('id_conver') ?></th>
                    <th><?= $this->Paginator->sort('date_reception') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recevoir as $recevoir): ?>
                <tr>
                    <td><?= $this->Number->format($recevoir->id_message) ?></td>
                    <td><?= $this->Number->format($recevoir->id_conver) ?></td>
                    <td><?= h($recevoir->date_reception) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $recevoir->id_message]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recevoir->id_message]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recevoir->id_message], ['confirm' => __('Are you sure you want to delete # {0}?', $recevoir->id_message)]) ?>
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
