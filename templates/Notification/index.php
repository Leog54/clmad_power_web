<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notification[]|\Cake\Collection\CollectionInterface $notification
 */
?>
<div class="notification index content">
    <?= $this->Html->link(__('New Notification'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Notification') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_notif') ?></th>
                    <th><?= $this->Paginator->sort('nom_notif') ?></th>
                    <th><?= $this->Paginator->sort('date_notif') ?></th>
                    <th><?= $this->Paginator->sort('id_message') ?></th>
                    <th><?= $this->Paginator->sort('id_user') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notification as $notification): ?>
                <tr>
                    <td><?= $this->Number->format($notification->id_notif) ?></td>
                    <td><?= h($notification->nom_notif) ?></td>
                    <td><?= h($notification->date_notif) ?></td>
                    <td><?= $this->Number->format($notification->id_message) ?></td>
                    <td><?= $this->Number->format($notification->id_user) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $notification->id_notif]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $notification->id_notif]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $notification->id_notif], ['confirm' => __('Are you sure you want to delete # {0}?', $notification->id_notif)]) ?>
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
