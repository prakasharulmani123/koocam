<div class="clearfix"></div>
<div class="footer-cont">
    <div class="container">
        <div class="footer-row1">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul>
                        <li><a href="#"> Home </a></li>
                        <li><a href="#">Sell your time </a></li>
                        <li><a href="#"> How its works </a></li>
                        <li><a href="#"> Login </a></li>
                        <li><a href="#"> Signup </a></li>
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