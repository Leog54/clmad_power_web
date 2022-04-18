<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="add">
<div class="connForm">
    <h3>Inscrivez-vous</h3>
    <?= $this->Form->create($user) ?>
    <fieldset> 
        <?php
            echo "<div class='nomComplet'>";
            echo $this->Form->control('nom_user', ['label' => 'Nom']);
            echo $this->Form->control('prenom_user', ['label' => 'Prénom']); 
            echo "</div>";
            echo "<div class='civilite'>";
            echo "<label>Civilité : </label>";                  
            echo $this->Form->radio('sexe_user', ['Masculin','Féminin','Neutre']);
            echo "</div>";
            echo "<div class='numeroRue'>";
            echo $this->Form->control('num_rue_user', ['label' => 'Numéro de rue']);  
            echo "</div>";
            echo $this->Form->control('rue_user', ['label' => 'Rue']);
            
            echo $this->Form->control('cp_user', ['label' => 'Code Postal']);
            echo $this->Form->control('ville_user', ['label' => 'Ville']);
            echo $this->Form->control('num_tel_user', ['label' => 'Téléphone']);
            echo $this->Form->control('email', ['label' => 'Adresse e-mail']);
            echo $this->Form->control('password', ['label' => 'Mot de passe']);
            echo $this->Form->control('date_naissance_user', ['label' => 'Date de naissance']);
            echo $this->Form->control('situation_familial_user', ['label' => 'Situation familiale']);
            echo $this->Form->control('cgu_consent_user', ['label' => 'J\'accepte les termes d\'utilisation']);               
        ?>
    </fieldset>
    <?= $this->Form->submit(__("S'enregistrer")) ?>
    <?= $this->Form->end() ?>
</div>
</div>
