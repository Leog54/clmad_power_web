<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Likepubli $likepubli
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Likepubli'), ['action' => 'edit', $likepubli->id_user], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Likepubli'), ['action' => 'delete', $likepubli->id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $likepubli->id_user), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Likepubli'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Likepubli'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="likepubli view content">
            <h3><?= h($likepubli->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($likepubli->id_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Publi') ?></th>
                    <td><?= $this->Number->format($likepubli->id_publi) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
