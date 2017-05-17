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
                ['action' => 'delete', $postsDocument->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $postsDocument->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Posts Documents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['controller' => 'Posts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post'), ['controller' => 'Posts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="postsDocuments form large-9 medium-8 columns content">
    <?= $this->Form->create($postsDocument) ?>
    <fieldset>
        <legend><?= __('Edit Posts Document') ?></legend>
        <?php
            echo $this->Form->control('post_id', ['options' => $posts]);
            echo $this->Form->control('document_id', ['options' => $documents]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
