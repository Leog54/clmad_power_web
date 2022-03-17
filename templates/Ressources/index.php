<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ressource[]|\Cake\Collection\CollectionInterface $ressources
 */
?>
<div class="ressources index content">
    <?= $this->Html->link(__('New Ressource'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ressources') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_ress') ?></th>
                    <th><?= $this->Paginator->sort('nom_ress') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ressources as $ressource): ?>
                <tr>
                    <td><?= $this->Number->format($ressource->id_ress) ?></td>
                    <td><?= h($ressource->nom_ress) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ressource->id_ress]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ressource->id_ress]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ressource->id_ress], ['confirm' => __('Are you sure you want to delete # {0}?', $ressource->id_ress)]) ?>
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
