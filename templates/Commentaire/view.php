<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commentaire $commentaire
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Commentaire'), ['action' => 'edit', $commentaire->id_comm], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Commentaire'), ['action' => 'delete', $commentaire->id_comm], ['confirm' => __('Are you sure you want to delete # {0}?', $commentaire->id_comm), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Commentaire'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Commentaire'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="commentaire view content">
            <h3><?= h($commentaire->id_comm) ?></h3>
            <table>
                <tr>
                    <th><?= __('Contenu Comm') ?></th>
                    <td><?= h($commentaire->contenu_comm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Comm') ?></th>
                    <td><?= $this->Number->format($commentaire->id_comm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Publi') ?></th>
                    <td><?= $this->Number->format($commentaire->id_publi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Comm') ?></th>
                    <td><?= h($commentaire->date_comm) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
