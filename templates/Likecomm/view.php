<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Likecomm $likecomm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Likecomm'), ['action' => 'edit', $likecomm->id_user], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Likecomm'), ['action' => 'delete', $likecomm->id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $likecomm->id_user), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Likecomm'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Likecomm'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="likecomm view content">
            <h3><?= h($likecomm->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($likecomm->id_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Comm') ?></th>
                    <td><?= $this->Number->format($likecomm->id_comm) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
