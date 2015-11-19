<?php
/* @var $this GigCategoryController */
/* @var $model GigCategory */

$this->title = 'Update Gig Category';
$this->breadcrumbs = array(
    'Gig Categories' => array('index'),
    $this->title,
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
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="text-display-1 margin-none"><?php echo $this->title; ?></h1>
                    </div>
                    <div class="col-lg-4">
                        <?php
                        echo CHtml::link('<i class="fa fa-reply"></i> Back', array('/admin/gigCategory/index'), array("class" => "btn btn-inverse pull-right"));
                        ?>
                    </div>
                </div>
            </div>
            <?php $this->renderPartial('_form', array('model' => $model)); ?>
        </div>
    </div>
    <!-- /st-content-inner -->
</div>
<!-- /st-content -->
