<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BandasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BandasTable Test Case
 */
class BandasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BandasTable
     */
    public $Bandas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bandas',
        'app.usuarios',
        'app.estilos',
        'app.bandas_estilos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Bandas') ? [] : ['className' => BandasTable::class];
        $this->Bandas = TableRegistry::get('Bandas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bandas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
