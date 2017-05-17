<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Post Meta'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postMeta form large-9 medium-8 columns content">
    <?= $this->Form->create($postMetum) ?>
    <fieldset>
        <legend><?= __('Add Post Metum') ?></legend>
        <?php
            echo $this->Form->control('post_id', ['options' => $posts]);
            echo $this->Form->control('post_key');
            echo $this->Form->control('post_value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
