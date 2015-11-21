<?php
/* @var $this DefaultController */
/* @var $model Gig */
/* @var $tutor User */

$this->title = "View - {$model->gig_title}";
$themeUrl = $this->themeUrl;

$tutor = $model->tutor;
?>


<div class="body-cont">
    <div id="inner-banner" class="tt-fullHeight3">
        <div class="container homepage-txt">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1  col-lg-offset-2 page-details user-details">
                    <p>
                        <?php echo CHtml::image($themeUrl . '/images/profile-pic.png', '', array('class' => 'img-circle')); ?>
                    </p>
                    <h2><?php echo CHtml::link($tutor->fullname, '#', array()); ?></h2>
                    <?php echo CHtml::link($tutor->userProf->prof_tag, '#', array()); ?>
                    <br/>
                    <?php echo CHtml::image($themeUrl . '/images/ratings.png', '', array()); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="innerpage-cont">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="course-img">
                        <div class="price-bg"> <?php echo $model->totalminutes; ?> min<br/>
                            <b> $ <?php echo (int) $model->gig_price; ?> </b></div>
                        <?php echo CHtml::image($model->getFilePath(false, '/users/' . $tutor->user_id), '', array()); ?>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#" class="big-btn btn btn-default"> <i class="fa fa-video-camera"></i> Start Now ! </a> </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="#" class="big-btn btn btn-default big-btn2"> <i class="fa fa-envelope-o"></i> Message </a> </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 course-details">
                    <h2> <?php echo $model->gig_title; ?></h2>
                    <p class="date"> Created Date : <?php echo date(PHP_SHORT_DATE_FORMAT, strtotime($model->created_at)); ?></p>
                    <p><?php echo $model->gig_description; ?></p>
                    <h4> Languages </h4>
                    <p> <?php echo $tutor->languages; ?></p>
                    <h4> Interests </h4>
                    <p> <?php echo $tutor->userProf->prof_interests; ?></p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 comentslist-cont">
                    <h2> Comments </h2>
                    <div class="comments-cont">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"> 
                                <?php echo CHtml::image($themeUrl . '/images/profile-pic.png', '', array('class' => "img-circle")); ?>
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                                <p> <b> Nigs Oman </b></p>
                                <p> <?php echo CHtml::image($themeUrl . '/images/rating2.jpg', '', array()); ?></p>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur orci sit amet lacinia gravida. Suspendisse sollicitudin porta odio, nec condimentum diam viverra eu. Integer pellentesque.</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-cont">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"> 
                                <?php echo CHtml::image($themeUrl . '/images/profile-pic.png', '', array('class' => "img-circle")); ?>
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                                <p> <b> Nigs Oman </b></p>
                                <p> <?php echo CHtml::image($themeUrl . '/images/rating2.jpg', '', array()); ?></p>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur orci sit amet lacinia gravida. Suspendisse sollicitudin porta odio, nec condimentum diam viverra eu. Integer pellentesque.</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-cont">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"> 
                                <?php echo CHtml::image($themeUrl . '/images/profile-pic.png', '', array('class' => "img-circle")); ?>
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                                <p> <b> Nigs Oman </b></p>
                                <p> <?php echo CHtml::image($themeUrl . '/images/rating2.jpg', '', array()); ?></p>
                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consectetur orci sit amet lacinia gravida. Suspendisse sollicitudin porta odio, nec condimentum diam viverra eu. Integer pellentesque.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comentslist-cont relateditems">  
                    <h2> Related Items</h2>
                    <div class="row"> 
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                $gigs = Gig::topInstructors();
                $this->renderPartial('/gig/_gig_carousal', compact('gigs', 'themeUrl'));
                ?>
            </div>
        </div>
    </div>
</div>