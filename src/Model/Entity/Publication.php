<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Publication Entity
 *
 * @property int $id_publi
 * @property string $contenu_publi
 * @property \Cake\I18n\FrozenTime $date_publi
 * @property string|null $link_img_publi
 * @property string|null $link_pj_publi
 * @property int $id_categ
 * @property int $id_user
 */
class Publication extends Entity
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
        'contenu_publi' => true,
        'date_publi' => true,
        'link_img_publi' => true,
        'link_pj_publi' => true,
        'id_categ' => true,
        'id_user' => true,
    ];
}
