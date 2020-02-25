<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <?php echo $this->Html->image('logo.png');?>
                    </a>
                </div>
                <div class="login-form">

                    <?php echo $this->Session->flash();?>

                        <?php echo $this->Form->create();?>

                            <div class="form-group">
                                <?php echo $this->Form->input('email address',array('class'=>"form-control", "placeholder"=>"Email"));?>
                            </div>

                            <div class="form-group">
                                <?php echo $this->Form->input('password', array('type'=>'password',"class"=>"form-control", "placeholder"=>"Password"));?>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                                <label class="pull-right">
                                    <a href="#">Forgotten Password?</a>
                                </label>
                            </div>

                                <?php echo $this->Form->button('SIGN IN',array('class'=>'btn btn-success btn-flat m-b-30 m-t-30'));?>

                            <div class="social-login-content">
                                <div class="social-button">
                                    <button type="button" class="btn social facebook btn-flat btn-addon mb-3"><i class="ti-facebook"></i>Sign in with facebook</button>
                                    <button type="button" class="btn social twitter btn-flat btn-addon mt-2"><i class="ti-twitter"></i>Sign in with twitter</button>
                                </div>
                            </div>
                            <div class="register-link m-t-15 text-center">
                                <p>Don't have account ? <a href="#"> Sign Up Here</a></p>
                            </div>
                </div>
            </div>
        </div>
    </div>