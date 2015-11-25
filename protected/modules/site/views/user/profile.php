<?php
/* @var $this DefaultController */
/* @var $model User */
/* @var $category GigCategory */

$this->title = 'Koocam - Profile';
$themeUrl = $this->themeUrl;
?>

<div id="inner-banner" class="tt-fullHeight3">
    <div class="container homepage-txt">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1  col-lg-offset-2 page-details ">
                <h2> <?php echo CHtml::link($model->fullname, array('/site/user/profile', 'slug' => $model->slug)); ?> </h2>
                <?php echo CHtml::link($user_profile->prof_tag, '#'); ?>
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
                     <?php echo CHtml::image($user_profile->getFilePath(false, '/users/' . $model->user_id), '', array()); ?>
                    <?php // echo CHtml::image($themeUrl . '/images/profile-img.jpg', ''); ?>
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
                <?php if(!Yii::app()->user->isGuest) { ?>
                <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm2" data-dismiss=".bs-example-modal-sm2" class="pull-right"> <b> Edit </b></a>
                <?php } ?>
                <h2> About <?php echo $model->fullname; ?> </h2>

                <p class="date"> Date of Join : <?php echo date(PHP_SHORT_DATE_FORMAT, strtotime($model->created_at)); ?></p>
                <p><?php echo $user_profile->prof_about; ?></p>

                <h4> Country </h4>
                <p> <?php echo $model->country; ?> </p>

                <h4> Languages </h4>
                <p> <?php echo $model->languages ?> </p>
                
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

<?php 
if(!Yii::app()->user->isGuest){ ?>
<div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"> Edit Profile </h4>
            </div>
            <div class="modal-body">
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'user-profile-form',
                    'action' => $this->createUrl('/site/user/profileupdate'),
                    'htmlOptions' => array('role' => 'form', 'class' => '', 'enctype' => 'multipart/form-data'),
                    'clientOptions' => array(
                        'validateOnSubmit' => true,
                    ),
                    'enableAjaxValidation' => true,
                ));
                ?>

                <div class = "form-group form-control-material static">
                    <?php echo $form->labelEx($user_profile, 'prof_firstname'); ?>
                    <?php echo $form->textField($user_profile, 'prof_firstname', array('class' => 'form-control', 'size' => 50, 'maxlength' => 50)); ?>

                    <?php echo $form->error($user_profile, 'prof_firstname'); ?>
                </div>
                
                <div class = "form-group form-control-material static">
                    <?php echo $form->labelEx($user_profile, 'prof_lastname'); ?>
                    <?php echo $form->textField($user_profile, 'prof_lastname', array('class' => 'form-control', 'size' => 50, 'maxlength' => 50)); ?>

                    <?php echo $form->error($user_profile, 'prof_lastname'); ?>
                </div>
                <div class = "form-group form-control-material static">
                    <?php echo $form->labelEx($user_profile, 'prof_tag'); ?>
                    <?php echo $form->textField($user_profile, 'prof_tag', array('class' => 'form-control', 'size' => 60, 'maxlength' => 100)); ?>
                    <?php echo $form->error($user_profile, 'prof_tag'); ?>
                </div>
                <div class = "form-group form-control-material static hide">
                    <?php echo $form->labelEx($user_profile, 'prof_address'); ?>
                    <?php echo $form->textArea($user_profile, 'prof_address', array('class' => 'form-control', 'rows' => 6, 'cols' => 50)); ?>
                    <?php echo $form->error($user_profile, 'prof_address'); ?>
                </div>
                <div class = "form-group form-control-material static hide">
                    <?php echo $form->labelEx($user_profile, 'prof_phone'); ?>
                    <?php echo $form->textField($user_profile, 'prof_phone', array('class' => 'form-control', 'size' => 30, 'maxlength' => 30)); ?>
                    <?php echo $form->error($user_profile, 'prof_phone'); ?>
                </div>
                <div class = "form-group form-control-material static hide">
                    <?php echo $form->labelEx($user_profile, 'prof_skype'); ?>
                    <?php echo $form->textField($user_profile, 'prof_skype', array('class' => 'form-control', 'size' => 60, 'maxlength' => 100)); ?>
                    <?php echo $form->error($user_profile, 'prof_skype'); ?>
                </div>
                <div class = "form-group form-control-material static hide">
                    <?php echo $form->labelEx($user_profile, 'prof_website'); ?>
                    <?php echo $form->textField($user_profile, 'prof_website', array('class' => 'form-control', 'size' => 60, 'maxlength' => 100)); ?>
                    <?php echo $form->error($user_profile, 'prof_website'); ?>
                </div>
                <div class = "form-group form-control-material static">
                    <?php echo $form->labelEx($user_profile, 'prof_about'); ?>
                    <?php echo $form->textArea($user_profile, 'prof_about', array('class' => 'form-control', 'rows' => 6, 'cols' => 50)); ?>
                    <?php echo $form->error($user_profile, 'prof_about'); ?>
                </div>
                <div class = "form-group form-control-material static">
                    <?php
                    $lang_array = $model->getLanguages('array');

                    $selected = array();
                    foreach ($lang_array as $value) {
                        $selected[$value] = array('selected' => 'selected');
                    }
                    ?>
                    <?php echo $form->labelEx($user_profile, 'prof_languages'); ?>
                    <?php echo $form->dropDownList($user_profile, 'prof_languages', Language::getLanguagesList(), array('class' => 'selectpicker', 'prompt' => '', 'multiple' => true, 'options' => $selected)); ?> 
                    <?php echo $form->error($user_profile, 'prof_languages'); ?>
                </div>

                <div class = "form-group form-control-material static">
                    <?php echo $form->labelEx($user_profile, 'prof_interests'); ?>
                    <?php echo $form->textArea($user_profile, 'prof_interests', array('class' => 'form-control', 'rows' => 6, 'cols' => 50)); ?>
                    <?php echo $form->error($user_profile, 'prof_interests'); ?>
                </div>

                <div class = "form-group form-control-material static">
                    <?php echo $form->labelEx($user_profile, 'prof_picture'); ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                        <span class="btn btn-default btn-file">
                            <i class="fa fa-upload"></i>  Profile Picture 
                            <?php echo $form->fileField($user_profile, 'prof_picture'); ?>
                        </span>
                        <?php echo $form->error($user_profile, 'prof_picture'); ?> 
                    </div>

                </div>

                <div class = "form-group form-control-material static hide">
                    <?php echo $form->textField($user_profile, 'prof_cover_photo', array('class' => 'form-control', 'size' => 60, 'maxlength' => 500)); ?>
                    <?php echo $form->labelEx($user_profile, 'prof_cover_photo'); ?>
                    <?php echo $form->error($user_profile, 'prof_cover_photo'); ?>
                </div>

                <div class = "form-group form-control-material static">
                    <?php echo $form->labelEx($user_profile, 'country_id'); ?>
                    <?php echo $form->dropDownList($user_profile, 'country_id', Country::getCountryList(), array('class' => 'selectpicker', 'prompt' => '')); ?> 
                    <?php echo $form->error($user_profile, 'country_id'); ?>
                </div>


                <div class="form-group">
                    <?php echo CHtml::submitButton($user_profile->isNewRecord ? 'Create' : 'Save', array('class' => $user_profile->isNewRecord ? 'btn btn-success' : 'btn btn-primary')); ?>
                </div>

                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>
<?php
}
//    $this->renderPartial('_profile_edit', compact('model', 'user_profile'), false, true); 
?>

<script type="text/javascript">var switchTo5x = true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "b111ba58-0a07-447e-92ed-da6eda1af9b3", doNotHash: false, doNotCopy: false, hashAddressBar: false, servicePopup: true});</script>