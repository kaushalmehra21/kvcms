<?php
/**
  * @var \App\View\AppView $this
  */
?>
<h2>Sign In</h2>
<form action="#" method="post">
    <div class="username">
        <span class="username">Username:</span>
        <?= $this->Form->email('email', ['placeholder'=>'Email', 'class'=>'name', 'required']) ?>
        <!-- <input type="text" name="name" class="name" placeholder="" required=""> -->
        <div class="clearfix"></div>
    </div>
    <div class="password-agileits">
        <span class="username">Password:</span>
        <?= $this->Form->password('password', ['placeholder'=>'Password', 'class'=>'password', 'required']) ?>
        <!-- <input type="password" name="password" class="password" placeholder="" required=""> -->
        <div class="clearfix"></div>
    </div>
    <div class="rem-for-agile">
        <input type="checkbox" name="remember" class="remember">Remember me<br>
        <a href="#">Forgot Password</a><br>
    </div>
    <div class="login-w3">
        <?= $this->Form->submit('Login', ['class'=>'login']) ?>
        <!-- <input type="submit" class="login" value="Sign In"> -->
    </div>
    <div class="clearfix"></div>
</form>
<div class="back">
    <a href="index.html">Back to home</a>
</div>
