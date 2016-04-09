<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DepartementsUser Entity.
 *
 * @property int $id
 * @property int $departement_id
 * @property \App\Model\Entity\Departement $departement
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property \Cake\I18n\Time $start
 * @property \Cake\I18n\Time $end
 * @property bool $active
 */
class DepartementsUser extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
