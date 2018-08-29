<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnrollmentsFixture
 *
 */
class EnrollmentsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'enrollments_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'grade' => ['type' => 'decimal', 'length' => 3, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'student_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'subject_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'student_id' => ['type' => 'index', 'columns' => ['student_id'], 'length' => []],
            'subject_id' => ['type' => 'index', 'columns' => ['subject_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['enrollments_id'], 'length' => []],
            'enrollments_ibfk_1' => ['type' => 'foreign', 'columns' => ['student_id'], 'references' => ['students', 'students_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'enrollments_ibfk_2' => ['type' => 'foreign', 'columns' => ['subject_id'], 'references' => ['subjects', 'subjects_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'enrollments_id' => 1,
                'grade' => 1.5,
                'student_id' => 1,
                'subject_id' => 1
            ],
        ];
        parent::init();
    }
}
