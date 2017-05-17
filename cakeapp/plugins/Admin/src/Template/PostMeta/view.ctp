<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post Metum'), ['action' => 'edit', $postMetum->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post Metum'), ['action' => 'delete', $postMetum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postMetum->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Post Meta'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post Metum'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="postMeta view large-9 medium-8 columns content">
    <h3><?= h($postMetum->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Post') ?></th>
            <td><?= $postMetum->has('post') ? $this->Html->link($postMetum->post->title, ['controller' => 'Posts', 'action' => 'view', $postMetum->post->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Key') ?></th>
            <td><?= h($postMetum->post_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($postMetum->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($postMetum->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($postMetum->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Post Value') ?></h4>
        <?= $this->Text->autoParagraph(h($postMetum->post_value)); ?>
    </div>
</div>
