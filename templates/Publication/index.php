<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publication[]|\Cake\Collection\CollectionInterface $publication
 */
?>
<div class="publication index content">
    <?= $this->Html->link(__('New Publication'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Publication') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_publi') ?></th>
                    <th><?= $this->Paginator->sort('contenu_publi') ?></th>
                    <th><?= $this->Paginator->sort('date_publi') ?></th>
                    <th><?= $this->Paginator->sort('link_img_publi') ?></th>
                    <th><?= $this->Paginator->sort('link_pj_publi') ?></th>
                    <th><?= $this->Paginator->sort('id_categ') ?></th>
                    <th><?= $this->Paginator->sort('id_user') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($publication as $publication): ?>
                <tr>
                    <td><?= $this->Number->format($publication->id_publi) ?></td>
                    <td><?= h($publication->contenu_publi) ?></td>
                    <td><?= h($publication->date_publi) ?></td>
                    <td><?= h($publication->link_img_publi) ?></td>
                    <td><?= h($publication->link_pj_publi) ?></td>
                    <td><?= $this->Number->format($publication->id_categ) ?></td>
                    <td><?= $this->Number->format($publication->id_user) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $publication->id_publi]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publication->id_publi]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publication->id_publi], ['confirm' => __('Are you sure you want to delete # {0}?', $publication->id_publi)]) ?>
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
