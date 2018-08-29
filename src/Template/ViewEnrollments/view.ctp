<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrollment $enrollment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Enrollments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li> 
    </ul>
</nav>
<div class="enrollments view large-9 medium-8 columns content">
    <h3><?= h($viewEnrollment->enrollments_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $viewEnrollment->has('student') ? $this->Html->link($viewEnrollment->student->students_id, ['controller' => 'Students', 'action' => 'view', $viewEnrollment->student->students_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= $viewEnrollment->has('subject') ? $this->Html->link($viewEnrollment->subject->title, ['controller' => 'Subjects', 'action' => 'view', $viewEnrollment->subject->subjects_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enrollments Id') ?></th>
            <td><?= $this->Number->format($viewEnrollment->enrollments_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grade') ?></th>
            <td><?= $this->Number->format($viewEnrollment->grade) ?></td>
        </tr>
    </table>
</div>
