<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alquiler Entity
 *
 * @property int $id
 * @property string $user
 * @property string $book
 * @property \Cake\I18n\FrozenDate $startDate
 * @property \Cake\I18n\FrozenDate $endDate
 * @property \Cake\I18n\FrozenDate $deliveryDate
 * @property string $status
 * @property string $statusFine
 * @property int $fine
 */
class Alquiler extends Entity
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
        'user' => true,
        'book' => true,
        'startDate' => true,
        'endDate' => true,
        'deliveryDate' => true,
        'status' => true,
        'statusFine' => true,
        'fine' => true,
    ];
}
