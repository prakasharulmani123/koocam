<?php
/* @var $this GigCategoryController */
/* @var $model GigCategory */

$this->title = 'View Gig Category';
$this->breadcrumbs = array(
    'Gig Categories' => array('index'),
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
            <div class="page-section third">
                <?php
                $this->widget('zii.widgets.CDetailView', array(
                    'data' => $model,
                    'htmlOptions' => array('class' => 'table table-striped table-bordered'),
                    'nullDisplay' => '-',
                    'attributes' => array(
                        'cat_name',
                        'cat_description',
                        'cat_image',
                        array(
                            'label' => 'Status',
                            'type' => 'raw',
                            'value'=>(CHtml::encode($model->status) == 1)? "<i class='fa fa-circle text-green-500'></i>":"<i class='fa fa-circle text-red-500'></i>",
                            
                        ),
                        'created_at',
                        'modified_at',
                        'created_by',
                        'modified_by',
                    ),
                ));
                ?>
            </div>
        </div>
    </div>
    <!-- /st-content-inner -->
</div>
<!-- /st-content -->



