<?php
$this->title = 'Gig Categories';
$this->breadcrumbs = array(
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
                        <button class="btn btn-warning pull-right">
                            <i class="icon-add-symbol"></i> Create Gig Category
                        </button>
                    </div>
                </div>
            </div>
            <div class="page-section third">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <?php
                        $gridColumns = array(
                            array(
                                'class' => 'IndexColumn',
                                'header' => '',
                            ),
                            'cat_name',
                            'status',
                            'created_at',
                            array(
                                'header' => 'Action',
                                'class' => 'application.components.MyActionButtonColumn',
                                'htmlOptions' => array('class' => 'text-center'),
                                'template' => '{update}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{delete}',
                            )
                        );

                        $this->widget('booster.widgets.TbExtendedGridView', array(
                            'filter' => $model,
                            'type' => 'striped bordered',
                            'dataProvider' => $model->search(),
                            'responsiveTable' => true,
                            "itemsCssClass" => "table v-middle",
                            'template' => '<div class="panel panel-default"><div class="table-responsive">{items}{pager}</div></div>',
                            'columns' => $gridColumns
                                )
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /st-content-inner -->
</div>
<!-- /st-content -->