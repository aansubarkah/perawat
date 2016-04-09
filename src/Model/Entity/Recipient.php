<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recipient Entity.
 *
 * @property int $id
 * @property string $username
 * @property string $fullname
 * @property bool $active
 * @property \App\Model\Entity\Disposition[] $dispositions
 */
class Recipient extends Entity
{

}
