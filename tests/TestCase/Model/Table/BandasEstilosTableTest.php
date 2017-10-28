<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BandasEstilosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BandasEstilosTable Test Case
 */
class BandasEstilosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BandasEstilosTable
     */
    public $BandasEstilos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bandas_estilos',
        'app.bandas',
        'app.usuarios',
        'app.estabelecimentos',
        'app.videos',
        'app.estilos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('BandasEstilos') ? [] : ['className' => BandasEstilosTable::class];
        $this->BandasEstilos = TableRegistry::get('BandasEstilos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->BandasEstilos);

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
