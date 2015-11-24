<?php
/* @var $this DefaultController */
/* @var $model User */
/* @var $category GigCategory */

$this->title = 'Koocam - Profile';
$themeUrl = $this->themeUrl;

$user_detail = $model;
$user_profile = $model->userProf;
?>

<div id="inner-banner" class="tt-fullHeight3">
    <div class="container homepage-txt">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1  col-lg-offset-2 page-details ">
                <h2>
                    <?php echo CHtml::link($model->fullname, array('/site/user/profile', 'slug' => $model->slug), array()); ?>
                </h2>
                <?php
                $this->widget('ext.editable.EditableField', array(
                    'type' => 'text',
                    'model' => $user_profile,
                    'attribute' => 'prof_tag',
                    'url' => $this->createUrl('user/update'), //url for submit data
                ));
                echo CHtml::link($user_profile->prof_tag, '#');
                ?>
                <br/>
<?php echo CHtml::image($themeUrl . '/images/ratings.png', ''); ?>
            </div>
        </div>
    </div>
</div>

<div class="innerpage-cont">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="course-img">
                    <div class="online" data-toggle="tooltip" data-placement="bottom" title="online"> </div>
<?php echo CHtml::image($themeUrl . '/images/profile-img.jpg', ''); ?>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                        <a href="#" class="big-btn btn  btn-default "> <i class="fa fa-envelope-o"></i> Message </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 sharethis-share">
                        <span class='st_facebook_large custom-share' displayText='Facebook'></span>
                        <span class='st_twitter_large custom-share' displayText='Tweet'></span>
                        <span class='st_googleplus_large custom-share' displayText='Google +'></span>
                        <span class='st_sharethis_large custom-share' displayText='ShareThis'></span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 course-details">
                <h2> About <?php echo $model->fullname; ?> </h2>
                <p class="date"> Date of Join : <?php echo date(PHP_SHORT_DATE_FORMAT, strtotime($model->created_at)); ?></p>
                <p><?php echo $user_profile->prof_about; ?></p>

                <h4> Country </h4>
                <p> London </p>

                <h4> Languages </h4>
                <p>
<?php echo $model->languages ?>
                </p>
                <h4> Interests </h4>
                <p> <?php echo $user_profile->prof_interests; ?></p>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 comentslist-cont relateditems">

                <h2> Reflection  Peter Parker Sells</h2>


                <div class="row">

                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> </div>

                </div>


            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="scroll-cont">
                <div class="container">
                    <div class="owl-carousel">
                        <div class="courses-thumb-cont">
                            <div class="course-thumbimg">
                                <div class="online" data-toggle="tooltip" data-placement="bottom" title="online"> </div>
                                <a href="#"> <img src="images/course1.jpg"  alt=""> </a></div>
                            <div class="course-thumbdetails">
                                <h2> <a href="#"> let's cam - together i'll teach u hebrew </a> </h2>
                                <p> <span> <a href="#"> Michael Windzor </a> </span> </p>
                                <p> <img src="images/rating.jpg"  alt=""></p>
                            </div>
                            <div class="coures-pricedetails">
                                <div class="course-price"> <i class="fa fa-clock-o"></i> <b>20</b> <span> min </span> </div>
                                <div class="course-price course-hour"> <i class="fa fa-dollar"></i> <b>75</b> </div>
                                <div class="course-price letcame"> <a href="#"> Let's Cam <i class="fa fa-video-camera"></i></a> </div>
                            </div>
                        </div>
                        <div class="courses-thumb-cont">
                            <div class="course-thumbimg">
                                <div class="online" data-toggle="tooltip" data-placement="bottom" title="online"> </div>
                                <a href="#"> <img src="images/course1.jpg"  alt=""> </a></div>
                            <div class="course-thumbdetails">
                                <h2> <a href="#"> let's cam - together i'll teach u hebrew </a> </h2>
                                <p> <span> <a href="#"> Michael Windzor </a> </span> </p>
                                <p> <img src="images/rating.jpg"  alt=""></p>
                            </div>
                            <div class="coures-pricedetails">
                                <div class="course-price"> <i class="fa fa-clock-o"></i> <b>20</b> <span> min </span> </div>
                                <div class="course-price course-hour"> <i class="fa fa-dollar"></i> <b>75</b> </div>
                                <div class="course-price letcame"> <a href="#"> Let's Cam <i class="fa fa-video-camera"></i></a> </div>
                            </div>
                        </div>
                        <div class="courses-thumb-cont">
                            <div class="course-thumbimg">
                                <div class="online" data-toggle="tooltip" data-placement="bottom" title="online"> </div>
                                <a href="#"> <img src="images/course1.jpg"  alt=""> </a></div>
                            <div class="course-thumbdetails">
                                <h2> <a href="#"> let's cam - together i'll teach u hebrew </a> </h2>
                                <p> <span> <a href="#"> Michael Windzor </a> </span> </p>
                                <p> <img src="images/rating.jpg"  alt=""></p>
                            </div>
                            <div class="coures-pricedetails">
                                <div class="course-price"> <i class="fa fa-clock-o"></i> <b>20</b> <span> min </span> </div>
                                <div class="course-price course-hour"> <i class="fa fa-dollar"></i> <b>75</b> </div>
                                <div class="course-price letcame"> <a href="#"> Let's Cam <i class="fa fa-video-camera"></i></a> </div>
                            </div>
                        </div>
                        <div class="courses-thumb-cont">
                            <div class="course-thumbimg">
                                <div class="online" data-toggle="tooltip" data-placement="bottom" title="online"> </div>
                                <a href="#"> <img src="images/course1.jpg"  alt=""> </a></div>
                            <div class="course-thumbdetails">
                                <h2> <a href="#"> let's cam - together i'll teach u hebrew </a> </h2>
                                <p> <span> <a href="#"> Michael Windzor </a> </span> </p>
                                <p> <img src="images/rating.jpg"  alt=""></p>
                            </div>
                            <div class="coures-pricedetails">
                                <div class="course-price"> <i class="fa fa-clock-o"></i> <b>20</b> <span> min </span> </div>
                                <div class="course-price course-hour"> <i class="fa fa-dollar"></i> <b>75</b> </div>
                                <div class="course-price letcame"> <a href="#"> Let's Cam <i class="fa fa-video-camera"></i></a> </div>
                            </div>
                        </div>
                        <div class="courses-thumb-cont">
                            <div class="course-thumbimg">
                                <div class="online" data-toggle="tooltip" data-placement="bottom" title="online"> </div>
                                <a href="#"> <img src="images/course1.jpg"  alt=""> </a></div>
                            <div class="course-thumbdetails">
                                <h2> <a href="#"> let's cam - together i'll teach u hebrew </a> </h2>
                                <p> <span> <a href="#"> Michael Windzor </a> </span> </p>
                                <p> <img src="images/rating.jpg"  alt=""></p>
                            </div>
                            <div class="coures-pricedetails">
                                <div class="course-price"> <i class="fa fa-clock-o"></i> <b>20</b> <span> min </span> </div>
                                <div class="course-price course-hour"> <i class="fa fa-dollar"></i> <b>75</b> </div>
                                <div class="course-price letcame"> <a href="#"> Let's Cam <i class="fa fa-video-camera"></i></a> </div>
                            </div>
                        </div>
                        <div class="courses-thumb-cont">
                            <div class="course-thumbimg">
                                <div class="online" data-toggle="tooltip" data-placement="bottom" title="online"> </div>
                                <a href="#"> <img src="images/course1.jpg"  alt=""> </a></div>
                            <div class="course-thumbdetails">
                                <h2> <a href="#"> let's cam - together i'll teach u hebrew </a> </h2>
                                <p> <span> <a href="#"> Michael Windzor </a> </span> </p>
                                <p> <img src="images/rating.jpg"  alt=""></p>
                            </div>
                            <div class="coures-pricedetails">
                                <div class="course-price"> <i class="fa fa-clock-o"></i> <b>20</b> <span> min </span> </div>
                                <div class="course-price course-hour"> <i class="fa fa-dollar"></i> <b>75</b> </div>
                                <div class="course-price letcame"> <a href="#"> Let's Cam <i class="fa fa-video-camera"></i></a> </div>
                            </div>
                        </div>
                        <div class="courses-thumb-cont">
                            <div class="course-thumbimg">
                                <div class="online" data-toggle="tooltip" data-placement="bottom" title="online"> </div>
                                <a href="#"> <img src="images/course1.jpg"  alt=""> </a></div>
                            <div class="course-thumbdetails">
                                <h2> <a href="#"> let's cam - together i'll teach u hebrew </a> </h2>
                                <p> <span> <a href="#"> Michael Windzor </a> </span> </p>
                                <p> <img src="images/rating.jpg"  alt=""></p>
                            </div>
                            <div class="coures-pricedetails">
                                <div class="course-price"> <i class="fa fa-clock-o"></i> <b>20</b> <span> min </span> </div>
                                <div class="course-price course-hour"> <i class="fa fa-dollar"></i> <b>75</b> </div>
                                <div class="course-price letcame"> <a href="#"> Let's Cam <i class="fa fa-video-camera"></i></a> </div>
                            </div>
                        </div>
                        <div class="courses-thumb-cont">
                            <div class="course-thumbimg">
                                <div class="online" data-toggle="tooltip" data-placement="bottom" title="online"> </div>
                                <a href="#"> <img src="images/course1.jpg"  alt=""> </a></div>
                            <div class="course-thumbdetails">
                                <h2> <a href="#"> let's cam - together i'll teach u hebrew </a> </h2>
                                <p> <span> <a href="#"> Michael Windzor </a> </span> </p>
                                <p> <img src="images/rating.jpg"  alt=""></p>
                            </div>
                            <div class="coures-pricedetails">
                                <div class="course-price"> <i class="fa fa-clock-o"></i> <b>20</b> <span> min </span> </div>
                                <div class="course-price course-hour"> <i class="fa fa-dollar"></i> <b>75</b> </div>
                                <div class="course-price letcame"> <a href="#"> Let's Cam <i class="fa fa-video-camera"></i></a> </div>
                            </div>
                        </div>
                        <div class="courses-thumb-cont">
                            <div class="course-thumbimg">
                                <div class="online" data-toggle="tooltip" data-placement="bottom" title="online"> </div>
                                <a href="#"> <img src="images/course1.jpg"  alt=""> </a></div>
                            <div class="course-thumbdetails">
                                <h2> <a href="#"> let's cam - together i'll teach u hebrew </a> </h2>
                                <p> <span> <a href="#"> Michael Windzor </a> </span> </p>
                                <p> <img src="images/rating.jpg"  alt=""></p>
                            </div>
                            <div class="coures-pricedetails">
                                <div class="course-price"> <i class="fa fa-clock-o"></i> <b>20</b> <span> min </span> </div>
                                <div class="course-price course-hour"> <i class="fa fa-dollar"></i> <b>75</b> </div>
                                <div class="course-price letcame"> <a href="#"> Let's Cam <i class="fa fa-video-camera"></i></a> </div>
                            </div>
                        </div>
                        <div class="courses-thumb-cont">
                            <div class="course-thumbimg">
                                <div class="online" data-toggle="tooltip" data-placement="bottom" title="online"> </div>
                                <a href="#"> <img src="images/course1.jpg"  alt=""> </a></div>
                            <div class="course-thumbdetails">
                                <h2> <a href="#"> let's cam - together i'll teach u hebrew </a> </h2>
                                <p> <span> <a href="#"> Michael Windzor </a> </span> </p>
                                <p> <img src="images/rating.jpg"  alt=""></p>
                            </div>
                            <div class="coures-pricedetails">
                                <div class="course-price"> <i class="fa fa-clock-o"></i> <b>20</b> <span> min </span> </div>
                                <div class="course-price course-hour"> <i class="fa fa-dollar"></i> <b>75</b> </div>
                                <div class="course-price letcame"> <a href="#"> Let's Cam <i class="fa fa-video-camera"></i></a> </div>
                            </div>
                        </div>
                        <div class="courses-thumb-cont">
                            <div class="course-thumbimg">
                                <div class="online" data-toggle="tooltip" data-placement="bottom" title="online"> </div>
                                <a href="#"> <img src="images/course1.jpg"  alt=""> </a></div>
                            <div class="course-thumbdetails">
                                <h2> <a href="#"> let's cam - together i'll teach u hebrew </a> </h2>
                                <p> <span> <a href="#"> Michael Windzor </a> </span> </p>
                                <p> <img src="images/rating.jpg"  alt=""></p>
                            </div>
                            <div class="coures-pricedetails">
                                <div class="course-price"> <i class="fa fa-clock-o"></i> <b>20</b> <span> min </span> </div>
                                <div class="course-price course-hour"> <i class="fa fa-dollar"></i> <b>75</b> </div>
                                <div class="course-price letcame"> <a href="#"> Let's Cam <i class="fa fa-video-camera"></i></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">var switchTo5x = true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "b111ba58-0a07-447e-92ed-da6eda1af9b3", doNotHash: false, doNotCopy: false, hashAddressBar: false, servicePopup: true});</script>