<?php
/* @var $this GigController */
/* @var $model Gig */
/* @var $form CActiveForm */

$this->title = 'Create GIG';
$this->breadcrumbs = array(
    'Gig' => array('/site/gig'),
    'Create',
);
$themeUrl = $this->themeUrl;
?>
<div class="body-cont">
    <div id="inner-banner" class="tt-fullHeight3">
        <div class="container homepage-txt">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1  col-lg-offset-2 page-details">
                    <h2> Create your gig </h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id 
                        ultrices massa. Ut id purus lacinia enim pharetra maximus. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="innerpage-cont">
        <div class="container">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'gig-create-form',
                'htmlOptions' => array('role' => 'form', 'class' => '', 'enctype' => "multipart/form-data"),
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
                'enableAjaxValidation' => true,
            ));
            $categories = GigCategory::getCategoryList();
            ?>            
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sub-heading"> ONLY 1 STEP AND YOUR GIG IS UP :) </div>
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1  col-lg-offset-2 ">
                    <div class="forms-cont">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-heading"> gig information </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <?php echo $form->textField($model, 'gig_title', array('class' => 'form-control', 'placeholder' => $model->getAttributeLabel('gig_title'))); ?> 
                                <?php echo $form->error($model, 'gig_title'); ?> 
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <?php echo $form->dropDownList($model, 'cat_id', $categories, array('class' => 'selectpicker', 'prompt' => '')); ?> 
                                <?php echo $form->error($model, 'cat_id'); ?> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <span class="btn btn-default btn-file">
                                    <i class="fa fa-upload"></i>  Upload Video (or)  Photo <span> (Recomended Video) </span>
                                    <?php echo $form->fileField($model, 'gig_media'); ?>
                                </span>
                                <?php echo $form->error($model, 'gig_media'); ?> 
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <?php echo $form->textField($model, 'gig_tag', array('class' => 'form-control', 'placeholder' => $model->getAttributeLabel('gig_tag'))); ?> 
                                <?php echo $form->error($model, 'gig_tag'); ?> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">  
                                <?php echo $form->textArea($model, 'gig_description', array('class' => 'form-control', 'placeholder' => $model->getAttributeLabel('gig_description'))); ?> 
                                <?php echo $form->error($model, 'gig_description'); ?> 
                            </div></div>

                        <div class="form-group"> 
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ">
                                <?php echo $form->textField($model, 'gig_duration', array('class' => 'form-control time', 'placeholder' => $model->getAttributeLabel('gig_duration'))); ?> 
                                <?php echo $form->error($model, 'gig_duration'); ?> 
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ">
                                <?php echo $form->textField($model, 'gig_price', array('class' => 'form-control', 'placeholder' => $model->getAttributeLabel('gig_price'))); ?> 
                                <?php echo $form->error($model, 'gig_price'); ?> 
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <?php echo $form->checkBox($model, 'is_extra', array('value' => 'Y', 'uncheckValue' => 'N')); ?>&nbsp;&nbsp;<?php echo $form->labelEx($model, 'is_extra'); ?>
                            </div>
                        </div>
                        <div class="form-group hide" id="extras_div">
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ">
                                <?php echo $form->textField($model, 'extra_price', array('class' => 'form-control', 'placeholder' => $model->getAttributeLabel('extra_price'))); ?> 
                                <?php echo $form->error($model, 'extra_price'); ?> 
                            </div>
                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-6 ">
                                <?php echo $form->textField($model, 'extra_desc', array('class' => 'form-control', 'placeholder' => $model->getAttributeLabel('extra_desc'))); ?> 
                                <?php echo $form->error($model, 'extra_desc'); ?> 
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 ">
                                <span class="btn btn-default btn-file">
                                    <i class="fa fa-upload"></i>  Upload File 
                                <?php echo $form->fileField($model, 'extra_file'); ?>
                                </span>
                                <?php echo $form->error($model, 'extra_file'); ?> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 ">
                                <?php echo $form->checkBox($model, 'gig_avail_visual', array('value' => 'Y', 'uncheckValue' => 'N')); ?>&nbsp;&nbsp; <?php echo $form->labelEx($model, 'gig_avail_visual'); ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 ">
                                <?php echo $form->checkBox($model, 'is_age', array('value' => 'Y', 'uncheckValue' => '')); ?>&nbsp;&nbsp; <?php echo $form->labelEx($model, 'is_age'); ?>
                                <?php echo $form->error($model, 'is_age'); ?> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                                <?php echo CHtml::submitButton(' Create Your Gig', array('class' => 'btn btn-default  btn-lg explorebtn form-btn')) ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>

<?php
$cs = Yii::app()->getClientScript();
$cs_pos_end = CClientScript::POS_END;
$cs->registerScriptFile($themeUrl . '/js/mask.min.js', $cs_pos_end);

$js = <<< EOD
    jQuery(document).ready(function ($) {
        $('#Gig_is_extra').on('click', function(){
            if($(this).is(':checked')){
                $('#extras_div').removeClass('hide');
            }else{
                $('#extras_div').addClass('hide');
            }
        });
        $(".time").mask("99:99");
    });

EOD;

Yii::app()->clientScript->registerScript('gig_create', $js);
?>