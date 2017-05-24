<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!--grid-->
<div class="validation-system">
    <div class="validation-form">
        <!---->
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

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Title</label>
                <?= $this->Form->text('title', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Short Description</label>
                <?= $this->Form->text('short_description', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Description</label>
                <?= $this->Form->textarea('description', ['id'=>'editor1']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group2 group-mail">
                <label class="control-label">Category</label>
                <?= $this->Form->select('category_id', $categories, ['empty' => '(choose one)']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group2 group-mail">
                <label class="control-label">User</label>
                <?= $this->Form->select('user_id', $users, ['empty' => '(choose one)']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group2 group-mail">
                <label class="control-label">Post Type</label>
                <?= $this->Form->select('post_type_id', $postTypes, ['empty' => '(choose one)']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">status</label>
                <?= $this->Form->text('status', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>            

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">featured_image</label>
                <?= $this->Form->text('featured_image', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group2 group-mail">
                <label class="control-label">tags</label>
                <?= $this->Form->select('tags._ids', $tags, ['class'=>'tokenize-demo']) ?>
            </div>
            <div class="clearfix"></div>

            

            <div class="col-md-12 form-group">
                <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']) ?>
            </div>
            <div class="clearfix"></div>
        <?= $this->Form->end() ?>
        <!---->
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'editor1' );
        </script>
        <script>$('.tokenize-demo').tokenize2();</script>
    </div>
</div>
<!--//grid-->


