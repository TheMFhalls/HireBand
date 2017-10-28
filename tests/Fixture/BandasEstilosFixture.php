<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BandasEstilosFixture
 *
 */
class BandasEstilosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'banda_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'estilo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'banda_id' => ['type' => 'index', 'columns' => ['banda_id'], 'length' => []],
            'estilo_id' => ['type' => 'index', 'columns' => ['estilo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'bandas_estilos_ibfk_1' => ['type' => 'foreign', 'columns' => ['banda_id'], 'references' => ['bandas', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'bandas_estilos_ibfk_2' => ['type' => 'foreign', 'columns' => ['estilo_id'], 'references' => ['estilos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'banda_id' => 1,
            'estilo_id' => 1
        ],
    ];
}
