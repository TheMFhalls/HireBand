<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Banda Entity
 *
 * @property int $id
 * @property int $usuario_id
 * @property string $nome_banda
 * @property \Cake\I18n\FrozenDate $data_inicio
 * @property string $endereco
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Estilo[] $estilos
 */
class Banda extends Entity
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
        'usuario_id' => true,
        'nome_banda' => true,
        'data_inicio' => true,
        'endereco' => true,
        'created' => true,
        'modified' => true,
        'usuario' => true,
        'estilos' => true
    ];
}
