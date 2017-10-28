<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstilosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstilosTable Test Case
 */
class EstilosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstilosTable
     */
    public $Estilos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estilos',
        'app.bandas',
        'app.usuarios',
        'app.estabelecimentos',
        'app.videos',
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
        $config = TableRegistry::exists('Estilos') ? [] : ['className' => EstilosTable::class];
        $this->Estilos = TableRegistry::get('Estilos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estilos);

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
}
