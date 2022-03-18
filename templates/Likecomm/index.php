<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Likecomm[]|\Cake\Collection\CollectionInterface $likecomm
 */
?>
<div class="likecomm index content">
    <?= $this->Html->link(__('New Likecomm'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Likecomm') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_user') ?></th>
                    <th><?= $this->Paginator->sort('id_comm') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($likecomm as $likecomm): ?>
                <tr>
                    <td><?= $this->Number->format($likecomm->id_user) ?></td>
                    <td><?= $this->Number->format($likecomm->id_comm) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $likecomm->id_user]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $likecomm->id_user]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $likecomm->id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $likecomm->id_user)]) ?>
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
