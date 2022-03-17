<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_user') ?></th>
                    <th><?= $this->Paginator->sort('nom_user') ?></th>
                    <th><?= $this->Paginator->sort('prenom_user') ?></th>
                    <th><?= $this->Paginator->sort('sexe_user') ?></th>
                    <th><?= $this->Paginator->sort('num_rue_user') ?></th>
                    <th><?= $this->Paginator->sort('rue_user') ?></th>
                    <th><?= $this->Paginator->sort('cp_user') ?></th>
                    <th><?= $this->Paginator->sort('ville_user') ?></th>
                    <th><?= $this->Paginator->sort('num_tel_user') ?></th>
                    <th><?= $this->Paginator->sort('email_user') ?></th>
                    <th><?= $this->Paginator->sort('mdp_user') ?></th>
                    <th><?= $this->Paginator->sort('date_naissance_user') ?></th>
                    <th><?= $this->Paginator->sort('situation_familial_user') ?></th>
                    <th><?= $this->Paginator->sort('cgu_consent_user') ?></th>
                    <th><?= $this->Paginator->sort('id_role_user') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id_user) ?></td>
                    <td><?= h($user->nom_user) ?></td>
                    <td><?= h($user->prenom_user) ?></td>
                    <td><?= h($user->sexe_user) ?></td>
                    <td><?= h($user->num_rue_user) ?></td>
                    <td><?= h($user->rue_user) ?></td>
                    <td><?= h($user->cp_user) ?></td>
                    <td><?= h($user->ville_user) ?></td>
                    <td><?= h($user->num_tel_user) ?></td>
                    <td><?= h($user->email_user) ?></td>
                    <td><?= h($user->mdp_user) ?></td>
                    <td><?= h($user->date_naissance_user) ?></td>
                    <td><?= h($user->situation_familial_user) ?></td>
                    <td><?= h($user->cgu_consent_user) ?></td>
                    <td><?= $this->Number->format($user->id_role_user) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id_user]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id_user]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id_user], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id_user)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
