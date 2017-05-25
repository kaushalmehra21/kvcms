<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!--grid-->
<div class="validation-system">
    <div class="validation-form">
        <!---->
        <?= $this->Form->create($document) ?>
            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">title</label>
                <?= $this->Form->text('title', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">name</label>
                <?= $this->Form->text('name') ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">short_description</label>
                <?= $this->Form->text('short_description', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">description</label>
                <?= $this->Form->text('description', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">extention</label>
                <?= $this->Form->text('extention', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">type</label>
                <?= $this->Form->text('type', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">size</label>
                <?= $this->Form->text('size', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group2 group-mail">
                <label class="control-label">user_id</label>
                <?= $this->Form->select('user_id', $users, ['empty' => '(choose one)']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group2 group-mail">
                <label class="control-label">post_id</label>
                <?= $this->Form->select('posts._ids', $posts, ['empty' => '(choose one)']) ?>
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

