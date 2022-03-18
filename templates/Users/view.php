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
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id_user], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id_user), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id_user) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom User') ?></th>
                    <td><?= h($user->nom_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Prenom User') ?></th>
                    <td><?= h($user->prenom_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sexe User') ?></th>
                    <td><?= h($user->sexe_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Rue User') ?></th>
                    <td><?= h($user->num_rue_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rue User') ?></th>
                    <td><?= h($user->rue_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cp User') ?></th>
                    <td><?= h($user->cp_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ville User') ?></th>
                    <td><?= h($user->ville_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num Tel User') ?></th>
                    <td><?= h($user->num_tel_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email User') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mdp User') ?></th>
                    <td><?= h($user->password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Situation Familial User') ?></th>
                    <td><?= h($user->situation_familial_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($user->id_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Role User') ?></th>
                    <td><?= $this->Number->format($user->id_role_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Naissance User') ?></th>
                    <td><?= h($user->date_naissance_user) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cgu Consent User') ?></th>
                    <td><?= $user->cgu_consent_user ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
