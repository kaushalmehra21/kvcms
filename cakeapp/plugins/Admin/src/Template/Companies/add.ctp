<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!--grid-->
<div class="validation-system">
    <div class="validation-form">
        <!---->
        <?= $this->Form->create($company) ?>
            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">title</label>
                <?= $this->Form->text('title', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">description</label>
                <?= $this->Form->textarea('description') ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">logo</label>
                <?= $this->Form->text('logo', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">banner</label>
                <?= $this->Form->text('banner', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group2 group-mail">
                <label class="control-label">user_id</label>
                <?= $this->Form->select('user_id', $users, ['empty' => '(choose one)']) ?>
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
