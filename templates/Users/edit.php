<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id_user],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id_user), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <?php
                    echo $this->Form->control('nom_user');
                    echo $this->Form->control('prenom_user');
                    echo $this->Form->control('sexe_user');
                    echo $this->Form->control('num_rue_user');
                    echo $this->Form->control('rue_user');
                    echo $this->Form->control('cp_user');
                    echo $this->Form->control('ville_user');
                    echo $this->Form->control('num_tel_user');
                    echo $this->Form->control('email_user');
                    echo $this->Form->control('mdp_user');
                    echo $this->Form->control('date_naissance_user');
                    echo $this->Form->control('situation_familial_user');
                    echo $this->Form->control('cgu_consent_user');
                    echo $this->Form->control('id_role_user');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
