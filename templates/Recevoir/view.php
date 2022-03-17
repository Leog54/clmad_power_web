<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Recevoir $recevoir
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Recevoir'), ['action' => 'edit', $recevoir->id_message], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Recevoir'), ['action' => 'delete', $recevoir->id_message], ['confirm' => __('Are you sure you want to delete # {0}?', $recevoir->id_message), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Recevoir'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Recevoir'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="recevoir view content">
            <h3><?= h($recevoir->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Message') ?></th>
                    <td><?= $this->Number->format($recevoir->id_message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Conver') ?></th>
                    <td><?= $this->Number->format($recevoir->id_conver) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Reception') ?></th>
                    <td><?= h($recevoir->date_reception) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
