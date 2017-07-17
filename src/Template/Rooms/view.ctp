<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Room $room
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Room Members'), ['controller' => 'RoomMembers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Room Member'), ['controller' => 'RoomMembers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Whispers'), ['controller' => 'Whispers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Whisper'), ['controller' => 'Whispers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rooms view large-9 medium-8 columns content">
    <h3><?= h($room->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($room->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($room->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($room->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= h($room->deleted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($room->name)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Room Members') ?></h4>
        <?php if (!empty($room->room_members)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Room Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Is Master') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($room->room_members as $roomMembers): ?>
            <tr>
                <td><?= h($roomMembers->id) ?></td>
                <td><?= h($roomMembers->room_id) ?></td>
                <td><?= h($roomMembers->user_id) ?></td>
                <td><?= h($roomMembers->is_master) ?></td>
                <td><?= h($roomMembers->created) ?></td>
                <td><?= h($roomMembers->modified) ?></td>
                <td><?= h($roomMembers->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'RoomMembers', 'action' => 'view', $roomMembers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'RoomMembers', 'action' => 'edit', $roomMembers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RoomMembers', 'action' => 'delete', $roomMembers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomMembers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Whispers') ?></h4>
        <?php if (!empty($room->whispers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Room Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Message') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($room->whispers as $whispers): ?>
            <tr>
                <td><?= h($whispers->id) ?></td>
                <td><?= h($whispers->room_id) ?></td>
                <td><?= h($whispers->user_id) ?></td>
                <td><?= h($whispers->message) ?></td>
                <td><?= h($whispers->created) ?></td>
                <td><?= h($whispers->modified) ?></td>
                <td><?= h($whispers->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Whispers', 'action' => 'view', $whispers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Whispers', 'action' => 'edit', $whispers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Whispers', 'action' => 'delete', $whispers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $whispers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
