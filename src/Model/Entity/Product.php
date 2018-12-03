<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string $alias
 * @property float $price
 * @property string $content
 * @property int $discount
 * @property string $image_link
 * @property string $image_list
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int $view
 * @property string $warranty
 * @property int $total
 * @property int $buyed
 * @property int $rate_total
 * @property int $rate_count
 * @property string $gifts
 * @property string $video
 * @property string $feature
 *
 * @property \App\Model\Entity\Category $category
 */
class Product extends Entity
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
        'category_id' => true,
        'name' => true,
        'alias' => true,
        'price' => true,
        'content' => true,
        'discount' => true,
        'image_link' => true,
        'image_list' => true,
        'created' => true,
        'view' => true,
        'warranty' => true,
        'total' => true,
        'buyed' => true,
        'rate_total' => true,
        'rate_count' => true,
        'gifts' => true,
        'video' => true,
        'feature' => true,
        'category' => true
    ];
}
