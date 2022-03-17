<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message[]|\Cake\Collection\CollectionInterface $message
 */
?>
<div class="message index content">
    <?= $this->Html->link(__('New Message'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Message') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_message') ?></th>
                    <th><?= $this->Paginator->sort('date_message') ?></th>
                    <th><?= $this->Paginator->sort('contenu_message') ?></th>
                    <th><?= $this->Paginator->sort('id_conver') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($message as $message): ?>
                <tr>
                    <td><?= $this->Number->format($message->id_message) ?></td>
                    <td><?= h($message->date_message) ?></td>
                    <td><?= h($message->contenu_message) ?></td>
                    <td><?= $this->Number->format($message->id_conver) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $message->id_message]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $message->id_message]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $message->id_message], ['confirm' => __('Are you sure you want to delete # {0}?', $message->id_message)]) ?>
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
