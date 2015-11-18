<?php
/* @var $this GigCategoryController */
/* @var $model GigCategory */

$this->title='Update Gig Categories: '. $model->cat_id;
$this->breadcrumbs=array(
	'Gig Categories'=>array('index'),
	'Update Gig Categories',
);
?>

<div class="user-create">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?></div>