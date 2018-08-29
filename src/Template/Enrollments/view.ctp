<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrollment $enrollment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Enrollment'), ['action' => 'edit', $enrollment->enrollments_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Enrollment'), ['action' => 'delete', $enrollment->enrollments_id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrollment->enrollments_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Enrollments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enrollment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enrollments view large-9 medium-8 columns content">
    <h3><?= h($enrollment->enrollments_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $enrollment->has('student') ? $this->Html->link($enrollment->student->students_id, ['controller' => 'Students', 'action' => 'view', $enrollment->student->students_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= $enrollment->has('subject') ? $this->Html->link($enrollment->subject->title, ['controller' => 'Subjects', 'action' => 'view', $enrollment->subject->subjects_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enrollments Id') ?></th>
            <td><?= $this->Number->format($enrollment->enrollments_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grade') ?></th>
            <td><?= $this->Number->format($enrollment->grade) ?></td>
        </tr>
    </table>
</div>
