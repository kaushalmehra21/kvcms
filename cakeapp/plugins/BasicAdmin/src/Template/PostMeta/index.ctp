<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Post Metum'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postMeta index large-9 medium-8 columns content">
    <h3><?= __('Post Meta') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($postMeta as $postMetum): ?>
            <tr>
                <td><?= $this->Number->format($postMetum->id) ?></td>
                <td><?= $postMetum->has('post') ? $this->Html->link($postMetum->post->title, ['controller' => 'Posts', 'action' => 'view', $postMetum->post->id]) : '' ?></td>
                <td><?= h($postMetum->post_key) ?></td>
                <td><?= h($postMetum->created) ?></td>
                <td><?= h($postMetum->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $postMetum->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $postMetum->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $postMetum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $postMetum->id)]) ?>
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
