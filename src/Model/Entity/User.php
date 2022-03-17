<?php
declare(strict_types=1);

namespace App\Model\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id_user
 * @property string $nom_user
 * @property string $prenom_user
 * @property string $sexe_user
 * @property string $num_rue_user
 * @property string $rue_user
 * @property string $cp_user
 * @property string|null $ville_user
 * @property string $num_tel_user
 * @property string $email_user
 * @property string $mdp_user
 * @property \Cake\I18n\FrozenTime $date_naissance_user
 * @property string|null $situation_familial_user
 * @property bool|null $cgu_consent_user
 * @property int|null $id_role_user
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nom_user' => true,
        'prenom_user' => true,
        'sexe_user' => true,
        'num_rue_user' => true,
        'rue_user' => true,
        'cp_user' => true,
        'ville_user' => true,
        'num_tel_user' => true,
        'email_user' => true,
        'mdp_user' => true,
        'date_naissance_user' => true,
        'situation_familial_user' => true,
        'cgu_consent_user' => true,
        'id_role_user' => true,
    ];

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
