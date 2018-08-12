<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Url Entity
 *
 * @property int $id
 * @property string $main_url
 * @property string $tiny_url
 * @property string $user_ip
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Url extends Entity
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
        'main_url' => true,
        'tiny_url' => true,
        'user_ip' => true,
        'created' => true,
        'modified' => true
    ];
}
