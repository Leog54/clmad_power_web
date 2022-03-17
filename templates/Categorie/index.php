<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorie[]|\Cake\Collection\CollectionInterface $categorie
 */
?>
<div class="categorie index content">
    <?= $this->Html->link(__('New Categorie'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categorie') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_categ') ?></th>
                    <th><?= $this->Paginator->sort('nom_categ') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorie as $categorie): ?>
                <tr>
                    <td><?= $this->Number->format($categorie->id_categ) ?></td>
                    <td><?= h($categorie->nom_categ) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $categorie->id_categ]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categorie->id_categ]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categorie->id_categ], ['confirm' => __('Are you sure you want to delete # {0}?', $categorie->id_categ)]) ?>
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
