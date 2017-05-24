<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!--grid-->
<div class="validation-system">
    <div class="validation-form">
        <!---->
        <?= $this->Form->create($user) ?>
            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Username</label>
                <?= $this->Form->text('username', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Password</label>
                <?= $this->Form->text('password', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Email</label>
                <?= $this->Form->text('email', ['class'=>'control-label']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group2 group-mail">
                <label class="control-label">Role</label>
                <?= $this->Form->select('role_id', $roles, ['empty' => '(choose one)']) ?>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 form-group1 group-mail">
                <label class="control-label">Activation Key</label>
                <?= $this->Form->text('activation_key', ['class'=>'control-label']) ?>
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
