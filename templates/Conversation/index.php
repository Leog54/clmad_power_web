<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversation[]|\Cake\Collection\CollectionInterface $conversation
 */
?>
<div class="conversation index content">
    <?= $this->Html->link(__('New Conversation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conversation') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_conver') ?></th>
                    <th><?= $this->Paginator->sort('nom_conver') ?></th>
                    <th><?= $this->Paginator->sort('id_user') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conversation as $conversation): ?>
                <tr>
                    <td><?= $this->Number->format($conversation->id_conver) ?></td>
                    <td><?= h($conversation->nom_conver) ?></td>
                    <td><?= $this->Number->format($conversation->id_user) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conversation->id_conver]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conversation->id_conver]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conversation->id_conver], ['confirm' => __('Are you sure you want to delete # {0}?', $conversation->id_conver)]) ?>
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
