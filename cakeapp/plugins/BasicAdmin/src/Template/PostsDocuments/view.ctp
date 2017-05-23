<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Posts Document'), ['action' => 'edit', $postsDocument->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Posts Document'), ['action' => 'delete', $postsDocument->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postsDocument->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Posts Document'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="postsDocuments view large-9 medium-8 columns content">
    <h3><?= h($postsDocument->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Post') ?></th>
            <td><?= $postsDocument->has('post') ? $this->Html->link($postsDocument->post->title, ['controller' => 'Posts', 'action' => 'view', $postsDocument->post->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Document') ?></th>
            <td><?= $postsDocument->has('document') ? $this->Html->link($postsDocument->document->name, ['controller' => 'Documents', 'action' => 'view', $postsDocument->document->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($postsDocument->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($postsDocument->modified) ?></td>
        </tr>
    </table>
</div>
