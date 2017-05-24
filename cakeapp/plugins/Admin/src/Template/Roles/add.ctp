<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!--grid-->
<div class="validation-system">
    <div class="validation-form">
        <!---->
        <?= $this->Form->create($role) ?>
            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Title</label>
                <?= $this->Form->text('title', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Description</label>
                <?= $this->Form->textarea('description', ['class'=>'control-label']) ?>
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
