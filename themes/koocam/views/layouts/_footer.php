<?php
/* @var $this Controller */
?>
<div class="clearfix"></div>
<div class="footer-cont">
    <div class="container">
        <div class="footer-row1">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul>
                        <li><?php echo CHtml::link(' Home ', $this->homeUrl, array()); ?></li>
                        <li><?php echo CHtml::link(' Sell your time ', array('/site/gig/create'), array()); ?></li>
                        <li><?php echo CHtml::link(' How its works ', array('/site/cms/view', 'slug' => 'how-it-works'), array()); ?></li>
                        <?php if(Yii::app()->user->isGuest){ ?>
                        <li><?php echo CHtml::link(' Login ', '#', array('data-toggle' => "modal", 'data-target' => ".bs-example-modal-sm1")); ?></li>
                        <li><?php echo CHtml::link(' Signup ', '#', array('data-toggle' => "modal", 'data-target' => ".bs-example-modal-sm")); ?></li>
                        <?php } ?>
                    </ul>
                    <p> Copyrights © 2015. Koocam.com. Allrights reserved </p>
                </div>
            </div>
        </div>
        <div class="footer-row2">
            <p> 
                <span> Address : Dummystreet,city-123456 </span> 
                <span> Phone : (123) 456-7890 </span> 
                <span> Email : <?php echo CHtml::link('support@koocam.com', 'mailto:support@koocam.com'); ?></span> 
            </p>
            <p> 
                <?php echo CHtml::link(CHtml::image($this->themeUrl.'/images/fb.png', '', array()), '#', array('target' => '_blank')); ?>
                <?php echo CHtml::link(CHtml::image($this->themeUrl.'/images/twitter.png', '', array()), '#', array('target' => '_blank')); ?>
                <?php echo CHtml::link(CHtml::image($this->themeUrl.'/images/gplus.png', '', array('width' => '32', 'height' => '32')), '#', array('target' => '_blank')); ?>
                <?php echo CHtml::link(CHtml::image($this->themeUrl.'/images/youtube.png', '', array('width' => '32', 'height' => '32')), '#', array('target' => '_blank')); ?>
            </p>
        </div>
    </div>
</div>