<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlquilerTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlquilerTable Test Case
 */
class AlquilerTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlquilerTable
     */
    protected $Alquiler;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Alquiler',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Alquiler') ? [] : ['className' => AlquilerTable::class];
        $this->Alquiler = $this->getTableLocator()->get('Alquiler', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Alquiler);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AlquilerTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
