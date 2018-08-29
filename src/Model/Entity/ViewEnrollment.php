<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ViewEnrollment Entity
 *
 * @property int $enrollments_id
 * @property float $grade
 * @property int $student_id
 * @property int $subject_id
 *
 * @property \App\Model\Entity\Enrollment $enrollment
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Subject $subject
 */
class ViewEnrollment extends Entity
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
        'enrollments_id' => true,
        'grade' => true,
        'student_id' => true,
        'subject_id' => true,
        'enrollment' => true,
        'student' => true,
        'subject' => true
    ];
}
