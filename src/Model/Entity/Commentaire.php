<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Commentaire Entity
 *
 * @property int $id_comm
 * @property string $contenu_comm
 * @property \Cake\I18n\FrozenTime $date_comm
 * @property int $id_publi
 */
class Commentaire extends Entity
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
        'contenu_comm' => true,
        'date_comm' => true,
        'id_publi' => true,
    ];
}
