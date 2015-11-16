<!DOCTYPE html>
<html class="st-layout ls-top-navbar-large ls-bottom-footer show-sidebar sidebar-l3" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> <?php echo $this->title ?> </title>
        <?php
        $themeUrl = $this->themeUrl;
        $cs = Yii::app()->getClientScript();

        $cs->registerCssFile($themeUrl . '/css/bootstrap.min.css');
        $cs->registerCssFile($themeUrl . '/css/style.css');
        $cs->registerCssFile($themeUrl . '/css/responisve.css');
        $cs->registerCssFile($themeUrl . '/css/font-awesome.css');
        $cs->registerCssFile($themeUrl . '/css/owl.carousel.css');
        ?>
    </head>
    <body>
        <?php $this->renderPartial('//layouts/_headerBar'); ?>
        <div class="body-cont">
            <?php echo $content; ?>
        </div>
        <?php $this->renderPartial('//layouts/_footer'); ?>
        
        <?php
        $cs_pos_end = CClientScript::POS_END;
        $cs->registerScriptFile($themeUrl . '/js/jquery.1.11.3.min.js', $cs_pos_end);
        $cs->registerScriptFile($themeUrl . '/js/bootstrap.min.js', $cs_pos_end);
        $cs->registerScriptFile($themeUrl . '/js/waypoints.min.js', $cs_pos_end);
        $cs->registerScriptFile($themeUrl . '/js/jquery.counterup.min.js', $cs_pos_end);
        $cs->registerScriptFile($themeUrl . '/js/owl.carousel.min.js', $cs_pos_end);
        ?>
    </body>
</html>