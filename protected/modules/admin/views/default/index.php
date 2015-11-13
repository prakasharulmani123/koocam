<?php
/* @var $this DefaultController */

$this->title = 'Dashboard';
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
                <h1 class="text-display-1 margin-none">Dashboard</h1>
            </div>
            <div class="panel panel-default">
                <div class="media v-middle">
                    <div class="media-left">
                        <div class="bg-green-400 text-white">
                            <div class="panel-body">
                                <i class="fa fa-dashboard fa-fw fa-2x"></i>
                            </div>
                        </div>
                    </div>
                    <div class="media-body">
                        Welcome to <?php echo Yii::app()->name; ?>
                    </div>
                </div>
            </div>
            <br/>
        </div>
    </div>
    <!-- /st-content-inner -->
</div>
<!-- /st-content -->
