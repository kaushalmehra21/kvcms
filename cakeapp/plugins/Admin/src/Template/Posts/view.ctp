<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Post Types'), ['controller' => 'PostTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post Type'), ['controller' => 'PostTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Post Meta'), ['controller' => 'PostMeta', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post Metum'), ['controller' => 'PostMeta', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($post->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($post->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Short Description') ?></th>
            <td><?= h($post->short_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $post->has('category') ? $this->Html->link($post->category->title, ['controller' => 'Categories', 'action' => 'view', $post->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $post->has('user') ? $this->Html->link($post->user->id, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Type') ?></th>
            <td><?= $post->has('post_type') ? $this->Html->link($post->post_type->title, ['controller' => 'PostTypes', 'action' => 'view', $post->post_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Featured Image') ?></th>
            <td><?= h($post->featured_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($post->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($post->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($post->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($post->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($post->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Post Meta') ?></h4>
        <?php if (!empty($post->post_meta)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Post Id') ?></th>
                <th scope="col"><?= __('Post Key') ?></th>
                <th scope="col"><?= __('Post Value') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($post->post_meta as $postMeta): ?>
            <tr>
                <td><?= h($postMeta->id) ?></td>
                <td><?= h($postMeta->post_id) ?></td>
                <td><?= h($postMeta->post_key) ?></td>
                <td><?= h($postMeta->post_value) ?></td>
                <td><?= h($postMeta->created) ?></td>
                <td><?= h($postMeta->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PostMeta', 'action' => 'view', $postMeta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PostMeta', 'action' => 'edit', $postMeta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PostMeta', 'action' => 'delete', $postMeta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postMeta->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Documents') ?></h4>
        <?php if (!empty($post->documents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Short Description') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Extention') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Size') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($post->documents as $documents): ?>
            <tr>
                <td><?= h($documents->id) ?></td>
                <td><?= h($documents->title) ?></td>
                <td><?= h($documents->name) ?></td>
                <td><?= h($documents->short_description) ?></td>
                <td><?= h($documents->description) ?></td>
                <td><?= h($documents->extention) ?></td>
                <td><?= h($documents->type) ?></td>
                <td><?= h($documents->size) ?></td>
                <td><?= h($documents->user_id) ?></td>
                <td><?= h($documents->created) ?></td>
                <td><?= h($documents->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Documents', 'action' => 'view', $documents->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Documents', 'action' => 'edit', $documents->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Documents', 'action' => 'delete', $documents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documents->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
