<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AvaliacaoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AvaliacaoTable Test Case
 */
class AvaliacaoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AvaliacaoTable
     */
    public $Avaliacao;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.avaliacao',
        'app.bandas',
        'app.usuarios',
        'app.estabelecimentos',
        'app.videos',
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
        $config = TableRegistry::exists('Avaliacao') ? [] : ['className' => AvaliacaoTable::class];
        $this->Avaliacao = TableRegistry::get('Avaliacao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Avaliacao);

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
