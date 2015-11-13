<?php
$this->title = 'Change Password';
$this->breadcrumbs = array(
    $this->title
);
?>

<!-- sidebar effects INSIDE of st-pusher: -->
<!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->
<!-- this is the wrapper for the content -->
<div class="st-content">
    <!-- extra div for emulating position:fixed of the menu -->
    <div class="st-content-inner padding-none">
        <div class="container-fluid">

            <div class="page-section">
                <h1 class="text-display-1 margin-none"><?php echo $this->title; ?></h1>
            </div>

            <div class="page-section third">
                <!-- Tabbable Widget -->
                <div class="tabbable paper-shadow relative" data-z="0.5">
                    <!-- Panes -->
                    <div class="tab-content">
                        <div id="account" class="tab-pane active">
                            <?php
                            $form = $this->beginWidget('CActiveForm', array(
                                'id' => 'change-password-form',
                                'htmlOptions' => array(
                                    'class' => 'form-horizontal',
                                ),
                            ));
                            ?>

                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'old_password', array('class' => 'col-md-2 control-label')); ?>
                                <div class="col-md-6">
                                    <div class="form-control-material">
                                        <?php echo $form->passwordField($model, 'old_password', array('class' => 'form-control used', 'placeholder' => 'Old Password')); ?> 
                                        <?php echo $form->labelEx($model, 'old_password'); ?>
                                    </div>
                                    <?php echo $form->error($model, 'old_password'); ?> 
                                </div>
                            </div>

                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'new_password', array('class' => 'col-md-2 control-label')); ?>
                                <div class="col-md-6">
                                    <div class="form-control-material">
                                        <?php echo $form->passwordField($model, 'new_password', array('class' => 'form-control used', 'placeholder' => 'New Password')); ?> 
                                        <?php echo $form->labelEx($model, 'new_password'); ?>
                                    </div>
                                    <?php echo $form->error($model, 'new_password'); ?> 
                                </div>
                            </div>

                            <div class="form-group">
                                <?php echo $form->labelEx($model, 'repeat_password', array('class' => 'col-md-2 control-label')); ?>
                                <div class="col-md-6">
                                    <div class="form-control-material">
                                        <?php echo $form->passwordField($model, 'repeat_password', array('class' => 'form-control used', 'placeholder' => 'Repeat Password')); ?> 
                                        <?php echo $form->labelEx($model, 'repeat_password'); ?>
                                    </div>
                                    <?php echo $form->error($model, 'repeat_password'); ?> 
                                </div>
                            </div>

                            <div class="form-group margin-none">
                                <div class="col-md-offset-2 col-md-10">
                                    <?php echo CHtml::submitButton('Change Password', array('class' => 'btn btn-primary paper-shadow relative', 'data-z' => '0.5', 'data-hover-z' => '1', 'data-animated' => '')); ?>
                                </div>
                            </div>

                            <?php $this->endWidget(); ?>
                        </div>
                    </div>
                    <!-- // END Panes -->
                </div>
                <!-- // END Tabbable Widget -->
            </div>
        </div>
    </div>
    <!-- /st-content-inner -->
</div>
<!-- /st-content -->