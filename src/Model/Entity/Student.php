<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $students_id
 * @property string $first_name
 * @property string $last_name
 * @property \Cake\I18n\FrozenDate $enrollment_date
 * @property string $email
 *
 * @property \App\Model\Entity\Enrollment[] $enrollments
 */
class Student extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'enrollment_date' => true,
        'email' => true,
        'enrollments' => true
    ];
}
