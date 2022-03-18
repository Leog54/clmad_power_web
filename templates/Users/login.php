<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Merci de rentrer votre adresse email et votre mot de passe') ?></legend>
        <?= $this->Form->control('email', ['label' => 'Email '], ['required' => true]) ?>
        <?= $this->Form->control('password', ['label' => 'Mot de passe ', 'type' => 'password'], ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Add User", ['action' => 'add']) ?>
</div>