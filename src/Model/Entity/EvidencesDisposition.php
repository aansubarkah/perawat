<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EvidencesDisposition Entity.
 *
 * @property int $id
 * @property int $evidence_id
 * @property \App\Model\Entity\Evidence $evidence
 * @property int $disposition_id
 * @property \App\Model\Entity\Disposition $disposition
 * @property bool $active
 */
class EvidencesDisposition extends Entity
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
