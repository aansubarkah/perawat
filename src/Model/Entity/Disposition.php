<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Disposition Entity.
 *
 * @property int $id
 * @property int $parent_id
 * @property \App\Model\Entity\ParentDisposition $parent_disposition
 * @property int $letter_id
 * @property \App\Model\Entity\Letter $letter
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $lft
 * @property int $rght
 * @property int $recipient_id
 * @property \App\Model\Entity\Recipient $recipient
 * @property string $content
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $isread
 * @property bool $finish
 * @property bool $active
 * @property \App\Model\Entity\ChildDisposition[] $child_dispositions
 * @property \App\Model\Entity\Evidence[] $evidences
 */
class Disposition extends Entity
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
