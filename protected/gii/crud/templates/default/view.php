<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */

<?php
$nameColumn=$this->guessNameColumn($this->tableSchema->columns);
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->title='View {$this->modelClass}:'.\$model->{$nameColumn};\n";
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'View '.'$this->modelClass',
);\n";
?>
?>
<?php 
$restrict = $this->giiGenerateHiddenFields();
$activeFields = $this->giiGenerateActiveInActiveFields();
?>
<div class="user-view">
    <?php echo "<?php"; ?>
    if ($export == false) {
    ?>
    <p>
        <?php echo "<?php"; ?>
        $this->widget(
                'application.components.MyTbButton', array(
                    'label' => 'Update',
                    'url' => array('update', 'id' => <?php echo " \$model->{$this->tableSchema->primaryKey} " ?>),
                    'buttonType' => 'link',
                    'context' => 'primary',
                )
        );
        echo "&nbsp;&nbsp;";
        $this->widget(
                'application.components.MyTbButton', array(
                    'label' => 'Delete',
                    'url' => array('delete', 'id' => <?php echo " \$model->{$this->tableSchema->primaryKey} " ?>),
                    'buttonType' => 'link',
                    'context' => 'danger',
                    'htmlOptions' => array('confirm' => 'Are you sure you want to delete this item?'),
                )
        );
        echo "&nbsp;&nbsp;";
        $this->widget(
                'application.components.MyTbButton', array(
            'label' => 'Download',
            'url' => array('view', 'id' => <?php echo " \$model->{$this->tableSchema->primaryKey} " ?>, 'export' => 'PDF'),
            'buttonType' => 'link',
            'context' => 'warning',
                )
        );
        ?>
    </p>
    <?php echo "<?php"; ?>
    }
    ?>
    <?php echo "<?php"; ?>
    if ($export) { ?>
        <h3 class="text-center"><?php echo  '<?php echo $this->title ?>';?></h3>
    <?php echo "<?php"; ?>        
    }
    ?>
    <?php echo "<?php"; ?> $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'htmlOptions' => array('class'=>'table table-striped table-bordered'),
	'attributes'=>array(
<?php
foreach($this->tableSchema->columns as $column)
    if(in_array($column->name, $activeFields)):
            $green = '<i class="fa fa-circle text-green"></i>';
            $red = '<i class="fa fa-circle text-red"></i>';
            echo "\t\tarray(
                'name' => 'Active',
                'type' => 'raw',
                'value' => \$model->{$column->name} == 1 ? '{$green}' : '{$red}'
            ),\n";
    elseif (!in_array($column->name, $restrict)):
        echo "\t\t'".$column->name."',\n";
    endif;
?>
	),
)); ?>
</div>



