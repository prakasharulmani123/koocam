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
$nameColumn = $this->guessNameColumn($this->tableSchema->columns);
$label = $this->pluralize($this->class2name($this->modelClass));
$classToName = $this->modelClass;

echo "\$this->title='View $classToName';\n";
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$this->title,
);\n";
?>
?>
<?php
$restrict = $this->giiGenerateHiddenFields();
$activeFields = $this->giiGenerateActiveInActiveFields();
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
                        <h1 class="text-display-1 margin-none">
                            <?php echo "<?php"; ?> echo $this->title; ?>
                        </h1>
                    </div>
                    <div class="col-lg-4">
                        <?php echo "<?php"; ?>
                        echo CHtml::link('<i class="fa fa-reply"></i> Back', array('/admin/<?php echo $classToName; ?>/index'), array("class" => "btn btn-inverse pull-right"));
                        ?>
                    </div>
                </div>
            </div>
            <div class="page-section third">
                <?php echo "<?php"; ?> $this->widget('zii.widgets.CDetailView', array(
                'data'=>$model,
                'htmlOptions' => array('class'=>'table table-striped table-bordered'),
                'attributes'=>array(
                <?php
                foreach ($this->tableSchema->columns as $column)
                    if (in_array($column->name, $activeFields)):
                        $green = '<i class="fa fa-circle text-green-500"></i>';
                        $red = '<i class="fa fa-circle text-red-500"></i>';
                        echo "\t\tarray(
                'name' => '{$column->name}',
                'type' => 'raw',
                'value' => \$model->{$column->name} == 1 ? '{$green}' : '{$red}'
            ),\n";
                    elseif (!in_array($column->name, $restrict)):
                        echo "\t\t'" . $column->name . "',\n";
                endif;
                ?>
                ),
                )); ?>

            </div>
        </div>
    </div>
    <!-- /st-content-inner -->
</div>
<!-- /st-content -->