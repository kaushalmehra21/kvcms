<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Post Types'), ['controller' => 'PostTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post Type'), ['controller' => 'PostTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Post Meta'), ['controller' => 'PostMeta', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Post Metum'), ['controller' => 'PostMeta', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <script>
        //CKEDITOR.config.toolbarLocation = 'bottom';
        CKEDITOR.config.toolbar = [
            { name: 'document', items: [ 'Source', '-' ] },
            { name: 'clipboard', items: [ '-', 'Undo', 'Redo' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', '-' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
            { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
            { name: 'insert', items: [ 'Image' ] },
            { name: 'tools', items: [ 'Maximize' ] }
        ];
    </script>
    <fieldset>
        <legend><?= __('Add Post') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('slug');
            echo $this->Form->control('short_description');
            echo $this->Form->control('description', ['id'=>'editor1']);
            echo '<br>';
            echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('post_type_id', ['options' => $postTypes]);
            echo $this->Form->control('status');
            echo $this->Form->control('featured_image');
            echo $this->Form->control('documents._ids', ['options' => $documents]);
        ?>
    </fieldset>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
