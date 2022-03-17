<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Notification $notification
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Notification'), ['action' => 'edit', $notification->id_notif], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Notification'), ['action' => 'delete', $notification->id_notif], ['confirm' => __('Are you sure you want to delete # {0}?', $notification->id_notif), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Notification'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Notification'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="notification view content">
            <h3><?= h($notification->id_notif) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom Notif') ?></th>
                    <td><?= h($notification->nom_notif) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Notif') ?></th>
                    <td><?= $this->Number->format($notification->id_notif) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Message') ?></th>
                    <td><?= $this->Number->format($notification->id_message) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($notification->id_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Notif') ?></th>
                    <td><?= h($notification->date_notif) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
