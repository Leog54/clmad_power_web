<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Like[]|\Cake\Collection\CollectionInterface $likes
 */
?>
<div class="likes index content">
    <?= $this->Html->link(__('New Like'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Likes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_like') ?></th>
                    <th><?= $this->Paginator->sort('id_comm') ?></th>
                    <th><?= $this->Paginator->sort('id_user') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($likes as $like): ?>
                <tr>
                    <td><?= $this->Number->format($like->id_like) ?></td>
                    <td><?= $this->Number->format($like->id_comm) ?></td>
                    <td><?= $this->Number->format($like->id_user) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $like->id_like]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $like->id_like]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $like->id_like], ['confirm' => __('Are you sure you want to delete # {0}?', $like->id_like)]) ?>
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
