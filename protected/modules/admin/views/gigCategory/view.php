<?php
/* @var $this GigCategoryController */
/* @var $model GigCategory */

$this->title='View GigCategory:'.$model->cat_id;
$this->breadcrumbs=array(
	'Gig Categories'=>array('index'),
	'View '.'GigCategory',
);
?>
<div class="user-view">
    <?php    if ($export == false) {
    ?>
    <p>
        <?php        $this->widget(
                'application.components.MyTbButton', array(
                    'label' => 'Update',
                    'url' => array('update', 'id' =>  $model->cat_id ),
                    'buttonType' => 'link',
                    'context' => 'primary',
                )
        );
        echo "&nbsp;&nbsp;";
        $this->widget(
                'application.components.MyTbButton', array(
                    'label' => 'Delete',
                    'url' => array('delete', 'id' =>  $model->cat_id ),
                    'buttonType' => 'link',
                    'context' => 'danger',
                    'htmlOptions' => array('confirm' => 'Are you sure you want to delete this item?'),
                )
        );
        echo "&nbsp;&nbsp;";
        $this->widget(
                'application.components.MyTbButton', array(
            'label' => 'Download',
            'url' => array('view', 'id' =>  $model->cat_id , 'export' => 'PDF'),
            'buttonType' => 'link',
            'context' => 'warning',
                )
        );
        ?>
    </p>
    <?php    }
    ?>
    <?php    if ($export) { ?>
        <h3 class="text-center"><?php echo $this->title ?></h3>
    <?php        
    }
    ?>
    <?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions' => array('class'=>'table table-striped table-bordered'),
	'attributes'=>array(
		'cat_id',
		'cat_name',
		'cat_description',
		'cat_image',
		'status',
		'created_at',
		'modified_at',
		'created_by',
		'modified_by',
	),
)); ?>
</div>



