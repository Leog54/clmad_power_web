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
            <?= $this->Html->link(__('List Publication'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="publication form content">
            <?= $this->Form->create($publication, ['type' => 'file']) ?>
            <fieldset>
                <legend><?= __('Ajouter une publication') ?></legend>
                <?php
                    echo $this->Form->textarea('contenu_publi', ['label' => 'Contenu :', 'rows' => '3']);
                    echo $this->Form->control('link_img_publi', ['label' => 'Lien de l\'image :']);
                    echo $this->Form->control('link_pj_publi', ['type' => 'file', 'label' => 'Lien de la pièce jointe :']);
                    echo $this->Form->control('id_categ', ['options' => $categories, 'label' => 'Catégorie :']);
                    echo $this->Form->control('id_user', ['type' => 'hidden', 'value' => $userId]);
                    echo "<label>Visibilité</label>";  
                    echo $this->Form->radio('visi', ['Privée','Amis','Tout le monde']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Ajouter')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
