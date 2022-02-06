<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlquilerFixture
 */
class AlquilerFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'alquiler';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user' => 'Lorem ipsum dolor sit amet',
                'book' => 'Lorem ipsum dolor sit amet',
                'startDate' => '2022-02-06',
                'endDate' => '2022-02-06',
                'deliveryDate' => '2022-02-06',
                'status' => 'Lorem ipsum dolor sit amet',
                'statusFine' => 'Lorem ipsum dolor sit amet',
                'fine' => 1,
            ],
        ];
        parent::init();
    }
}
