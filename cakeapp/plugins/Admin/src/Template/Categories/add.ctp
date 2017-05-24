<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!--grid-->
<div class="validation-system">
    <div class="validation-form">
        <!---->
        <?= $this->Form->create($category) ?>
            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Title</label>
                <?= $this->Form->text('title', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"> </div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Short Description</label>
                <?= $this->Form->text('short_description') ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Description</label>
                <?= $this->Form->textarea('description') ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Image</label>
                <?= $this->Form->text('image', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group2 group-mail">
                <label class="control-label">Parent Id</label>
                <?= $this->Form->select('parent_id', $parentCategories, ['empty' => '(choose one)']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group">
                <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']) ?>
            </div>
            <div class="clearfix"></div>
        <?= $this->Form->end() ?>
        <!---->
    </div>
</div>
<!--//grid-->

