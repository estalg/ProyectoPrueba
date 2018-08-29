<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrollment[]|\Cake\Collection\CollectionInterface $enrollments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Enrollment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enrollments index large-9 medium-8 columns content">
    <h3><?= __('Enrollments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('enrollments_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enrollments as $enrollment): ?>
            <tr>
                <td><?= $this->Number->format($enrollment->enrollments_id) ?></td>
                <td><?= $this->Number->format($enrollment->grade) ?></td>
                <td><?= $enrollment->has('student') ? $this->Html->link($enrollment->student->students_id, ['controller' => 'Students', 'action' => 'view', $enrollment->student->students_id]) : '' ?></td>
                <td><?= $enrollment->has('subject') ? $this->Html->link($enrollment->subject->title, ['controller' => 'Subjects', 'action' => 'view', $enrollment->subject->subjects_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $enrollment->enrollments_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enrollment->enrollments_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enrollment->enrollments_id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrollment->enrollments_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
