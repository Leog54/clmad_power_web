<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Message'), ['action' => 'edit', $message->id_message], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Message'), ['action' => 'delete', $message->id_message], ['confirm' => __('Are you sure you want to delete # {0}?', $message->id_message), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Message'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Message'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="message view content">
            <h3><?= h($message->id_message) ?></h3>
            <table>
                <tr>
                    <th><?= __('Contenu Message') ?></th>
                    <td><?= h($message->contenu_message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Message') ?></th>
                    <td><?= $this->Number->format($message->id_message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Conver') ?></th>
                    <td><?= $this->Number->format($message->id_conver) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Message') ?></th>
                    <td><?= h($message->date_message) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
