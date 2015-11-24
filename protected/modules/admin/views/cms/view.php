<?php
/* @var $this CmsController */
/* @var $model Cms */

$this->title='View Cms';
$this->breadcrumbs=array(
	'Cms'=>array('index'),
	$this->title,
);
?>


<div class="container-fluid">
    <div class="page-section">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="text-display-1 margin-none">
                    <?php echo $this->title; ?>
                </h1>
            </div>
            <div class="col-lg-4">
                <?php                echo CHtml::link('<i class="fa fa-reply"></i> Back', array('/admin/cms/index'), array("class" => "btn btn-inverse pull-right"));
                ?>
            </div>
        </div>
    </div>
    <div class="page-section third">
        <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'htmlOptions' => array('class'=>'table table-striped table-bordered'),
        'nullDisplay' => '-',
        'attributes'=>array(
        		'cms_id',
		'cms_slug',
		'cms_title',
		'cms_description',
		'cms_meta_keywords',
		'cms_meta_description',
		array(
                'name' => 'status',
                'type' => 'raw',
                'value' => $model->status == 1 ? '<i class="fa fa-circle text-green-500"></i>' : '<i class="fa fa-circle text-red-500"></i>'
            ),
		'created_at',
        ),
        )); ?>

    </div>
</div>
