<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Avaliacao Entity
 *
 * @property int $id
 * @property int $banda_id
 * @property int $usuario_id
 * @property float $avaliacao
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Banda $banda
 * @property \App\Model\Entity\Usuario $usuario
 */
class Avaliacao extends Entity
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
        'usuario_id' => true,
        'avaliacao' => true,
        'created' => true,
        'modified' => true,
        'banda' => true,
        'usuario' => true
    ];
}
