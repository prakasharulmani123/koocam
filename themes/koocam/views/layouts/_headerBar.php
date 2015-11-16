<?php $themeUrl = $this->themeUrl; ?>
<div class="header-cont">
    <div class="container homepage-txt">
        <div class="row">
            <div class="header-row1">
                <div class="col-xs-9 col-sm-4 col-md-5 col-lg-5 logo"> 
                    <?php
                    $text = CHtml::image($themeUrl . '/img/logo.png', '');
                    echo CHtml::link($text, $this->homeUrl);
                    ?>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-7 col-lg-6 col-lg-offset-1 menu">
                    <nav class="navbar navbar-default"> 

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button aria-expanded="false" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
                                <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button>
                            <!--  <a href="#" class="navbar-brand">Brand</a> --> 
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <?php if (!Yii::app()->user->isGuest) { ?>
                            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"> SELL YOUR TIME </a></li>
                                    <li><a href="#"> HOW IT WORKS </a></li>
                                    <li><a href="#"> Log out</a></li>
                                </ul>
                            </div>
                        <?php } else { ?>
                            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                    <li><a href="#"> SELL YOUR TIME </a></li>
                                    <li><a href="#"> HOW IT WORKS </a></li>
                                    <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm1"> LOGIN </a></li>
                                    <li class="active"><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"> SIGN UP</a></li>
                                </ul>
                            </div>
                        <?php } ?>
                        <!-- /.navbar-collapse --> 
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Signup --> 
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> Sign Up</h4>
            </div>
            <div class="modal-body">

                <div class="form-group"> <input name="" type="text" class="form-control"  placeholder="User Name"> </div>
                <div class="form-group"> <input name="" type="text" class="form-control"  placeholder="Email Address"> </div>
                <div class="form-group"> <input name="" type="text" class="form-control"  placeholder="Password"> </div>
                <div class="form-group"> <input name="" type="text" class="form-control"  placeholder="Confirm Password"> </div>
                <div class="form-group"> <input name="" type="button" class="btn btn-default  btn-lg explorebtn form-btn" value=" Submit"> </div>

                <div class="form-group">   <div class="spe"> <img src="<?php echo $themeUrl ?>/img/or.png" alt=""> </div> 
                    <div class="line"></div> </div>
                <div class="form-group"> <button data-provider="facebook" class="btn btn-default  btn-lg explorebtn form-btn fb-btn oAuthLogin"> <i class="fa fa-facebook"></i> Facebook</button> </div>
                <div class="form-group"> <button data-provider="google" class="btn btn-default  btn-lg explorebtn form-btn gplus-btn oAuthLogin"> <i class="fa fa-google-plus"></i> Google +</button> </div>

                <div class="form-group already-member"> Already have an account? <a href="#"> <b> Login </b> </a> </div>


            </div>
        </div>
    </div>
</div>

<!--Signup --> 


<!--Login --> 
<div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> Login</h4>
            </div>
            <div class="modal-body">
                <?php
                $model = new LoginForm();
                $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'login-form',
                            'action' => array('/site/default/login'),
                            'htmlOptions' => array('role' => 'form', 'class' => ''),
                            'clientOptions' => array(
                                'validateOnSubmit' => true,
                            ),
                            'enableAjaxValidation' => true,
                        ));
                ?>

                <div class="form-group"> 
                    <?php echo $form->textField($model, 'username', array('autofocus', 'class' => 'form-control', 'placeholder' => "User Name (or) Email Address")); ?> 
                </div>
                <div class="form-group">                             
                    <?php echo $form->passwordField($model, 'password', array('autofocus', 'class' => 'form-control', 'placeholder' => "Enter Password")); ?>
                </div>
                <div class="form-group">                             
                    <?php echo $form->checkBox($model, 'rememberMe', array('id' => 'check', 'checked' => 'checked')); ?>
                    <?php echo ' Remember Me'; ?>
                </div>
                <div class="form-group forgot-password"> <a href="#">Forgot Password ?</a></div>
                <div class="form-group"> 
                    <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-default btn-lg explorebtn form-btn', 'name' => 'sign_in')) ?>
                </div>

                <div class="form-group">   <div class="spe"> <img src="<?php echo $themeUrl ?>/img/or.png" alt=""> </div> 
                    <div class="line"></div> </div>
                <div class="form-group"> <button data-provider="facebook" class="btn btn-default  btn-lg explorebtn form-btn fb-btn oAuthLogin"> <i class="fa fa-facebook"></i> Facebook</button> </div>
                <div class="form-group"> <button data-provider="google" class="btn btn-default  btn-lg explorebtn form-btn gplus-btn oAuthLogin"> <i class="fa fa-google-plus"></i> Google + </button> </div>

                <div class="form-group already-member"> Don't have an account?    
                    <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm" data-dismiss=".bs-example-modal-sm1"> <b> Sign up </b></a>
                </div>
                <?php $this->endWidget(); ?>


            </div>
        </div>
    </div>
</div>

<!--Login --> 
