<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property int $status
 * @property int $user_id
 * @property string $user_name
 * @property string $user_email
 * @property string $user_phone
 * @property float $amount
 * @property string $payment
 * @property string|null $payment_info
 * @property string|null $message
 * @property string|null $security
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Order[] $orders
 */
class Transaction extends Entity
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
        'status' => true,
        'user_id' => true,
        'user_name' => true,
        'user_email' => true,
        'user_phone' => true,
        'amount' => true,
        'payment' => true,
        'payment_info' => true,
        'message' => true,
        'security' => true,
        'created' => true,
        'user' => true,
        'orders' => true
    ];
}
