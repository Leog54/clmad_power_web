<div class="users form">
    <div class="logo">
        <img src="/clmad_app/webroot/img/bigLogo.png" alt="logoAccueil">
    </div>
    <div class="connForm">
            <h3>Connectez-vous</h3>
            <?= $this->Form->create() ?>
            <fieldset>
                <?= $this->Form->control('email', ['label' => 'Adresse e-mail'], ['required' => true]) ?>
                <?= $this->Form->control('password', ['label' => 'Mot de passe ', 'type' => 'password'], ['required' => true]) ?>
                <?= $this->Html->link("Mot de passe oublié ?", ['action' => 'add']) ?>
                <?= $this->Flash->render() ?>
            </fieldset>
            <?= $this->Form->submit(__('Connexion')); ?>
        <?= $this->Form->end() ?>
        <p class="no-account">Pas encore de compte ? <?= $this->Html->link("Inscrivez-vous dès maintenant !", ['action' => 'add']) ?></p>
        <div class="accRess">
            <a href="publication">Accès aux ressources</a>
        </div>
    </div>
</div>