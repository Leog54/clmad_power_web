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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $publication->id_publi],
                ['confirm' => __('Are you sure you want to delete # {0}?', $publication->id_publi), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Publication'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="publication form content">
            <?= $this->Form->create($publication) ?>
            <fieldset>
                <legend><?= __('Edit Publication') ?></legend>
                <?php
                    echo $this->Form->textarea('contenu_publi', ['label' => 'Contenu :', 'rows' => '3']);
                    echo $this->Form->control('link_img_publi');
                    echo $this->Form->control('link_pj_publi', ['type' => 'file']);
                    echo $this->Form->control('id_categ', ['options' => $categories]);
                    echo $this->Form->control('id_user', ['type' => 'hidden', 'value' => $userId]);
                    echo "<label>Visibilité</label>";  
                    echo $this->Form->radio('visi', ['Privé','Amis','Tout le monde']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
