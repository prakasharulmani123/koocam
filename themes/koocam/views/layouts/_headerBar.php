<?php $themeUrl = $this->themeUrl; ?>
<div class="header-cont">
    <div class="container homepage-txt">
        <div class="row">
            <div class="header-row1">
                <div class="col-xs-9 col-sm-4 col-md-5 col-lg-5 logo"> 
                    <?php
                    $text = CHtml::image($themeUrl . '/img/logo.png', '');
                    echo CHtml::link($text, $this->homeUrl);
                    ?>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-7 col-lg-6 col-lg-offset-1 menu">
                    <nav class="navbar navbar-default"> 

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button aria-expanded="false" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
                                <span class="sr-only">Toggle navigation</span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button>
                            <!--  <a href="#" class="navbar-brand">Brand</a> --> 
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                                <?php
                                $this->widget('zii.widgets.CMenu', array(
                                    'activateParents' => true,
                                    'encodeLabel' => false,
                                    'activateItems' => true,
                                    'items' => array(
                                        array('label' => 'SELL YOUR TIME', 'url' => '#' /* Yii::app()->homeUrl */),
                                        array('label' => 'HOW IT WORKS', 'url' => '#'),
                                        array('label' => 'LOG OUT', 'url' => array('/site/default/logout'), 'visible' => !Yii::app()->user->isGuest),
                                        array('label' => 'LOGIN', 'url' => '#', 'linkOptions' => array('data-toggle' => "modal", 'data-target' => ".bs-example-modal-sm1"), 'visible' => Yii::app()->user->isGuest),
                                        array('label' => 'SIGN UP', 'url' => '#', 'linkOptions' => array('data-toggle' => "modal", 'data-target' => ".bs-example-modal-sm"), 'visible' => Yii::app()->user->isGuest),
                                    ),
                                    'htmlOptions' => array('class' => 'nav navbar-nav')
                                ));
                                ?>
                            </div>
                        <!-- /.navbar-collapse --> 
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
