<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversation $conversation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conversation'), ['action' => 'edit', $conversation->id_conver], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conversation'), ['action' => 'delete', $conversation->id_conver], ['confirm' => __('Are you sure you want to delete # {0}?', $conversation->id_conver), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conversation'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conversation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conversation view content">
            <h3><?= h($conversation->id_conver) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom Conver') ?></th>
                    <td><?= h($conversation->nom_conver) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Conver') ?></th>
                    <td><?= $this->Number->format($conversation->id_conver) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($conversation->id_user) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
