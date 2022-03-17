<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commentaire[]|\Cake\Collection\CollectionInterface $commentaire
 */
?>
<div class="commentaire index content">
    <?= $this->Html->link(__('New Commentaire'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Commentaire') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_comm') ?></th>
                    <th><?= $this->Paginator->sort('contenu_comm') ?></th>
                    <th><?= $this->Paginator->sort('date_comm') ?></th>
                    <th><?= $this->Paginator->sort('id_publi') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($commentaire as $commentaire): ?>
                <tr>
                    <td><?= $this->Number->format($commentaire->id_comm) ?></td>
                    <td><?= h($commentaire->contenu_comm) ?></td>
                    <td><?= h($commentaire->date_comm) ?></td>
                    <td><?= $this->Number->format($commentaire->id_publi) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $commentaire->id_comm]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commentaire->id_comm]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commentaire->id_comm], ['confirm' => __('Are you sure you want to delete # {0}?', $commentaire->id_comm)]) ?>
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
