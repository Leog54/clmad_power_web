<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ressource $ressource
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ressource'), ['action' => 'edit', $ressource->id_ress], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ressource'), ['action' => 'delete', $ressource->id_ress], ['confirm' => __('Are you sure you want to delete # {0}?', $ressource->id_ress), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ressources'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ressource'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ressources view content">
            <h3><?= h($ressource->id_ress) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom Ress') ?></th>
                    <td><?= h($ressource->nom_ress) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Ress') ?></th>
                    <td><?= $this->Number->format($ressource->id_ress) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
