<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!--grid-->
<div class="validation-system">
    <div class="validation-form">
        <!---->
        <?= $this->Form->create($menu) ?>
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
                <label class="control-label">Url</label>
                <?= $this->Form->text('url', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Serial Number</label>
                <?= $this->Form->text('serial_number', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group2 group-mail">
                <label class="control-label">Parent Id</label>
                <?= $this->Form->select('parent_id', $parentMenus, ['empty' => '(choose one)']) ?>
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

