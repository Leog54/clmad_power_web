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
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Ajouter un utilisateur') ?></legend>
                <?php
                    echo $this->Form->control('nom_user', ['label' => 'Nom']);
                    echo $this->Form->control('prenom_user', ['label' => 'Prénom']); 
                    echo "<div class='civilite'>";
                    echo "<label>Civilité</label>";                  
                    echo $this->Form->radio('sexe_user', ['Masculin','Féminin','Neutre']);
                    echo "</div>";
                    echo $this->Form->control('num_rue_user', ['label' => 'Numéro de rue']);
                    echo $this->Form->control('rue_user', ['label' => 'Rue']);
                    echo $this->Form->control('cp_user', ['label' => 'Code Postal']);
                    echo $this->Form->control('ville_user', ['label' => 'Ville']);
                    echo $this->Form->control('num_tel_user', ['label' => 'Téléphone']);
                    echo $this->Form->control('email_user', ['label' => 'Email']);
                    echo $this->Form->control('mdp_user', ['label' => 'Mot de passe']);
                    echo $this->Form->control('date_naissance_user', ['label' => 'Date de naissance']);
                    echo $this->Form->control('situation_familial_user', ['label' => 'Situation familiale']);
                    echo $this->Form->control('cgu_consent_user', ['label' => 'J\'accepte les termes d\'utilisation']);               
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
