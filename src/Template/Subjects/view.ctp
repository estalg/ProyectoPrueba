<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->subjects_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->subjects_id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->subjects_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Enrollments'), ['controller' => 'Enrollments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enrollment'), ['controller' => 'Enrollments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subjects view large-9 medium-8 columns content">
    <h3><?= h($subject->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($subject->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subjects Id') ?></th>
            <td><?= $this->Number->format($subject->subjects_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credits') ?></th>
            <td><?= $this->Number->format($subject->credits) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Enrollments') ?></h4>
        <?php if (!empty($subject->enrollments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Enrollments Id') ?></th>
                <th scope="col"><?= __('Grade') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col"><?= __('Subject Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subject->enrollments as $enrollments): ?>
            <tr>
                <td><?= h($enrollments->enrollments_id) ?></td>
                <td><?= h($enrollments->grade) ?></td>
                <td><?= h($enrollments->student_id) ?></td>
                <td><?= h($enrollments->subject_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Enrollments', 'action' => 'view', $enrollments->enrollments_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Enrollments', 'action' => 'edit', $enrollments->enrollments_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enrollments', 'action' => 'delete', $enrollments->enrollments_id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrollments->enrollments_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
