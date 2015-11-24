<?php
/* @var $this DefaultController */
/* @var $model Cms */

$this->title = "View - {$model->cms_title}";
$themeUrl = $this->themeUrl;
?>


<div id="inner-banner" class="tt-fullHeight3">
    <div class="container homepage-txt">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1  col-lg-offset-2 page-details user-details">
                <h2><?php echo $model->cms_title; ?></h2>
            </div>
        </div>
    </div>
</div>
<div class="innerpage-cont">
    <div class="container">
        <div class="row">
            <?php echo $model->cms_description; ?>
        </div>
    </div>
</div>
