<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorie $categorie
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categorie'), ['action' => 'edit', $categorie->id_categ], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categorie'), ['action' => 'delete', $categorie->id_categ], ['confirm' => __('Are you sure you want to delete # {0}?', $categorie->id_categ), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categorie'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categorie'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categorie view content">
            <h3><?= h($categorie->id_categ) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom Categ') ?></th>
                    <td><?= h($categorie->nom_categ) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Categ') ?></th>
                    <td><?= $this->Number->format($categorie->id_categ) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
