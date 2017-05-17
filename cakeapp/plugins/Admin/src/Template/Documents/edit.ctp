<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $document->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Documents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="documents form large-9 medium-8 columns content">
    <?= $this->Form->create($document) ?>
    <fieldset>
        <legend><?= __('Edit Document') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('name');
            echo $this->Form->control('short_description');
            echo $this->Form->control('description');
            echo $this->Form->control('extention');
            echo $this->Form->control('type');
            echo $this->Form->control('size');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('posts._ids', ['options' => $posts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
