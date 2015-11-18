<?php
/* @var $this GigCategoryController */
/* @var $model GigCategory */

$this->title='Create Gig Categories';
$this->breadcrumbs=array(
	'Gig Categories'=>array('index'),
	$this->title,
);
?>

<div class="user-create">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
