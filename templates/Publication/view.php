<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Publication $publication
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Publication'), ['action' => 'edit', $publication->id_publi], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Publication'), ['action' => 'delete', $publication->id_publi], ['confirm' => __('Are you sure you want to delete # {0}?', $publication->id_publi), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Publication'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Publication'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="publication view content">
            <h3><?= h($publication->id_publi) ?></h3>
            <table>
                <tr>
                    <th><?= __('Contenu Publi') ?></th>
                    <td><?= h($publication->contenu_publi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Link Img Publi') ?></th>
                    <td><?= h($publication->link_img_publi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Link Pj Publi') ?></th>
                    <td><?= h($publication->link_pj_publi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Publi') ?></th>
                    <td><?= $this->Number->format($publication->id_publi) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Categ') ?></th>
                    <td><?= $this->Number->format($publication->id_categ) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($publication->id_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Publi') ?></th>
                    <td><?= h($publication->date_publi) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
