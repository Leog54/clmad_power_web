<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Likepubli[]|\Cake\Collection\CollectionInterface $likepubli
 */
?>
<div class="likepubli index content">
    <?= $this->Html->link(__('New Likepubli'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Likepubli') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_user') ?></th>
                    <th><?= $this->Paginator->sort('id_publi') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($likepubli as $likepubli): ?>
                <tr>
                    <td><?= $this->Number->format($likepubli->id_user) ?></td>
                    <td><?= $this->Number->format($likepubli->id_publi) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $likepubli->id_user]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $likepubli->id_user]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $likepubli->id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $likepubli->id_user)]) ?>
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
