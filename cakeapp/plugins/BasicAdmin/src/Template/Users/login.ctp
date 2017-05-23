

<!--form-stars-here-->
<div class="form-w3-agile">
    <h2>Credit login form</h2>
    <?= $this->Form->create() ?>
        <div class="form-sub-w3">

        	<?= $this->Form->email('email', ['placeholder'=>'Customer number or username', 'required']) ?>

            <div class="icon-w3">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
        </div>
        <div class="form-sub-w3">

        	<?= $this->Form->password('password', ['placeholder'=>'Password', 'required']) ?>

            <div class="icon-w3">
                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            </div>
        </div>
        <p class="p-bottom-w3ls">Are you new to eBanking?<a class="w3_play_icon1" href="#small-dialog1">  Register here</a></p>
        
        <div class="submit-w3l">

			<?= $this->Form->submit('Login') ?>
        </div>
    <?= $this->Form->end() ?>
</div>
<!--//form-ends-here-->

<div id="small-dialog1" class="mfp-hide">
    <div class="contact-form1">
        <div class="contact-w3-agileits">
            <h3>Register Form</h3>
            <form action="#" method="post">
                <div class="form-sub-w3ls">
                    <input placeholder="User Name"  type="text" required="">
                    <div class="icon-agile">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="form-sub-w3ls">
                    <input placeholder="Email" class="mail" type="email" required="">
                    <div class="icon-agile">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="form-sub-w3ls">
                    <input placeholder="Password"  type="password" required="">
                    <div class="icon-agile">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="form-sub-w3ls">
                    <input placeholder="Confirm Password"  type="password" required="">
                    <div class="icon-agile">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="login-check">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><p>I Accept Terms & Conditions</p></label>
                </div>
                <div class="submit-w3l">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>  
    </div>
</div> 
