<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorie $categorie
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Categorie'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categorie form content">
            <?= $this->Form->create($categorie) ?>
            <fieldset>
                <legend><?= __('Add Categorie') ?></legend>
                <?php
                    echo $this->Form->control('nom_categ');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
