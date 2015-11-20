<?php
/* @var $this UserController */
/* @var $model User */

$this->title = 'Update User';
$this->breadcrumbs = array(
    'Users' => array('index'),
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
                <?php echo CHtml::link('<i class="fa fa-reply"></i> Back', array('/admin/user/index'), array("class" => "btn btn-inverse pull-right"));
                ?>
            </div>
        </div>
    </div>
    <?php $this->renderPartial('_form', array('model' => $model, 'userProfile' => $userProfile)); ?>        
</div>
