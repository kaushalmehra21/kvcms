<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Metum'), ['action' => 'edit', $userMetum->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Metum'), ['action' => 'delete', $userMetum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userMetum->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Meta'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Metum'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userMeta view large-9 medium-8 columns content">
    <h3><?= h($userMetum->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userMetum->has('user') ? $this->Html->link($userMetum->user->id, ['controller' => 'Users', 'action' => 'view', $userMetum->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Key') ?></th>
            <td><?= h($userMetum->user_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userMetum->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userMetum->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userMetum->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('User Value') ?></h4>
        <?= $this->Text->autoParagraph(h($userMetum->user_value)); ?>
    </div>
</div>
