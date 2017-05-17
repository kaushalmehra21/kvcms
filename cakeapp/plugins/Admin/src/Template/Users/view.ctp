<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Meta'), ['controller' => 'UserMeta', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Metum'), ['controller' => 'UserMeta', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $user->has('role') ? $this->Html->link($user->role->title, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activation Key') ?></th>
            <td><?= h($user->activation_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Companies') ?></h4>
        <?php if (!empty($user->companies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Logo') ?></th>
                <th scope="col"><?= __('Banner') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->companies as $companies): ?>
            <tr>
                <td><?= h($companies->id) ?></td>
                <td><?= h($companies->title) ?></td>
                <td><?= h($companies->description) ?></td>
                <td><?= h($companies->logo) ?></td>
                <td><?= h($companies->banner) ?></td>
                <td><?= h($companies->user_id) ?></td>
                <td><?= h($companies->created) ?></td>
                <td><?= h($companies->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'view', $companies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $companies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Companies', 'action' => 'delete', $companies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Documents') ?></h4>
        <?php if (!empty($user->documents)): ?>
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
            <?php foreach ($user->documents as $documents): ?>
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
    <div class="related">
        <h4><?= __('Related Posts') ?></h4>
        <?php if (!empty($user->posts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Short Description') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Post Type Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Featured Image') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->posts as $posts): ?>
            <tr>
                <td><?= h($posts->id) ?></td>
                <td><?= h($posts->title) ?></td>
                <td><?= h($posts->slug) ?></td>
                <td><?= h($posts->short_description) ?></td>
                <td><?= h($posts->description) ?></td>
                <td><?= h($posts->category_id) ?></td>
                <td><?= h($posts->user_id) ?></td>
                <td><?= h($posts->post_type_id) ?></td>
                <td><?= h($posts->status) ?></td>
                <td><?= h($posts->featured_image) ?></td>
                <td><?= h($posts->created) ?></td>
                <td><?= h($posts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Posts', 'action' => 'view', $posts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Posts', 'action' => 'edit', $posts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Posts', 'action' => 'delete', $posts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $posts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related User Meta') ?></h4>
        <?php if (!empty($user->user_meta)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('User Key') ?></th>
                <th scope="col"><?= __('User Value') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_meta as $userMeta): ?>
            <tr>
                <td><?= h($userMeta->id) ?></td>
                <td><?= h($userMeta->user_id) ?></td>
                <td><?= h($userMeta->user_key) ?></td>
                <td><?= h($userMeta->user_value) ?></td>
                <td><?= h($userMeta->created) ?></td>
                <td><?= h($userMeta->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserMeta', 'action' => 'view', $userMeta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserMeta', 'action' => 'edit', $userMeta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserMeta', 'action' => 'delete', $userMeta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userMeta->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
