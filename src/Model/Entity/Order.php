<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $transaction_id
 * @property int $id
 * @property int $product_id
 * @property int $qty
 * @property float $amount
 * @property int $status
 *
 * @property \App\Model\Entity\Transaction $transaction
 * @property \App\Model\Entity\Product $product
 */
class Order extends Entity
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
        'transaction_id' => true,
        'product_id' => true,
        'qty' => true,
        'amount' => true,
        'status' => true,
        'transaction' => true,
        'product' => true
    ];
}
