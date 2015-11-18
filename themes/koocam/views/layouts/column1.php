<?php $this->beginContent('//layouts/main'); ?>
<?php
$this->widget('zii.widgets.CBreadcrumbs', array(
    'links' => $this->breadcrumbs,
    'tagName' => 'ul', // container tag
    'htmlOptions' => array('class' => 'breadcrumb'), // no attributes on container
    'separator' => '', // no separator
    'homeLink' => '<li><a href="' . Yii::app()->baseUrl . '/admin/default/index"><i class="fa fa-home"></i> Home</a></li>', // home link template
    'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>', // active link template
    'inactiveLinkTemplate' => '<li class="active">{label}</li>', // in-active link template
));
?>
<?php if (isset($this->flashMessages)): ?>
    <?php foreach ($this->flashMessages as $key => $message) { ?>
<!--        <div class="alert alert-<?php echo $key; ?> fade in">
            <button type="button" class="close close-sm" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>
            <?php // echo $message; ?>
        </div>-->
    <?php } ?>
<?php endif ?>

<?php echo $content; ?>
<?php $this->endContent(); ?>