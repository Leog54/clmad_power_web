<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Notification Entity
 *
 * @property int $id_notif
 * @property string $nom_notif
 * @property \Cake\I18n\FrozenTime $date_notif
 * @property int $id_message
 * @property int $id_user
 */
class Notification extends Entity
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
        'nom_notif' => true,
        'date_notif' => true,
        'id_message' => true,
        'id_user' => true,
    ];
}
