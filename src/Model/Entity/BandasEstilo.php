<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BandasEstilo Entity
 *
 * @property int $id
 * @property int $banda_id
 * @property int $estilo_id
 *
 * @property \App\Model\Entity\Banda $banda
 * @property \App\Model\Entity\Estilo $estilo
 */
class BandasEstilo extends Entity
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
        'banda_id' => true,
        'estilo_id' => true,
        'banda' => true,
        'estilo' => true
    ];
}
