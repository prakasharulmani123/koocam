<?php
/* @var $this GigController */

$this->title = 'Create GIG';
$this->breadcrumbs=array(
	'Gig'=>array('/site/gig'),
	'Create',
);
?>
<div class="body-cont">
  <div id="inner-banner" class="tt-fullHeight3">
    <div class="container homepage-txt">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1  col-lg-offset-2 page-details">
          <h2> Cerate your gig </h2>
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id 
            ultrices massa. Ut id purus lacinia enim pharetra maximus. </p>
        </div>
      </div>
    </div>
  </div>
  <div class="innerpage-cont">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sub-heading"> ONLY 1 STEP AND YOUR GIG IS UP :) </div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1  col-lg-offset-2 ">
          <div class="forms-cont">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-heading"> gig information </div>
            <div class="form-group">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                <input type="text" placeholder="I Will" class="form-control" name="">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                <select id="first-disabled" class="selectpicker" >
                  <option>Choose category</option>
                  <option>Category 1 </option>
                  <option>Category 2 </option>
                  <option>Category 3 </option>
                </select>
              </div>
            </div>
            
            
            <div class="form-group">
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
               <span class="btn btn-default btn-file">
   <i class="fa fa-upload"></i>  Upload Video (or)  Photo <span> (Recomended Video) </span><input type="file">
</span>
              </div>
              
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                <input type="text" placeholder="Tags" class="form-control" name="">
              </div>
              
            </div>
            
            
            
               <div class="form-group">
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">  
            
            <textarea name="Describe your Gig" cols="" rows="" placeholder="Describe your Gig" class="form-control form-txtarea"></textarea>
            
             </div></div>
             
             
             <div class="form-group"> 
             
              <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ">
                <input type="text" placeholder="Time" class="form-control" name="">
              </div>
              
               <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ">
                <input type="text" placeholder="Price" class="form-control" name="">
              </div>
              
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                <input type="text" placeholder="Extras" class="form-control" name="">
              </div>
             
             
              </div>
              
              
              <div class="form-group">
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
               <input type="text" placeholder="Will be available on visual chat" class="form-control" name="">
              </div>
              
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 age-verify ">
                
                <input name="" type="checkbox" value="">  I am at least 16 years old
                
              </div>
              
            </div>
            
            <div class="form-group">
            
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
              <input type="button" value="  Create Your Gig" class="btn btn-default  btn-lg explorebtn form-btn" name="">
              </div>
              
             
              
            </div>
            
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--Signup -->
  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"> Sign Up</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input name="" type="text" class="form-control"  placeholder="User Name">
          </div>
          <div class="form-group">
            <input name="" type="text" class="form-control"  placeholder="Email Address">
          </div>
          <div class="form-group">
            <input name="" type="text" class="form-control"  placeholder="Password">
          </div>
          <div class="form-group">
            <input name="" type="text" class="form-control"  placeholder="Confirm Password">
          </div>
          <div class="form-group">
            <input name="" type="button" class="btn btn-default  btn-lg explorebtn form-btn" value=" Submit">
          </div>
          <div class="form-group">
            <div class="spe"> <img src="images/or.png" alt=""> </div>
            <div class="line"></div>
          </div>
          <div class="form-group">
            <button class="btn btn-default  btn-lg explorebtn form-btn fb-btn"> <i class="fa fa-facebook"></i> Signup Using Facebook</button>
          </div>
          <div class="form-group">
            <button class="btn btn-default  btn-lg explorebtn form-btn gplus-btn"> <i class="fa fa-google-plus"></i> Signup Using Google</button>
          </div>
          <div class="form-group already-member"> Already have an account? <a href="#"> <b> Login </b> </a> </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--Signup --> 
  
  <!--Login -->
  <div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"> Login</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input name="" type="text" class="form-control"  placeholder="User Name (or) Email Address">
          </div>
          <div class="form-group">
            <input name="" type="text" class="form-control"  placeholder="Password">
          </div>
          <div class="form-group forgot-password"> <a href="#">Forgot Password ?</a></div>
          <div class="form-group">
            <input name="" type="button" class="btn btn-default  btn-lg explorebtn form-btn" value=" Login">
          </div>
          <div class="form-group">
            <div class="spe"> <img src="images/or.png" alt=""> </div>
            <div class="line"></div>
          </div>
          <div class="form-group">
            <button class="btn btn-default  btn-lg explorebtn form-btn fb-btn"> <i class="fa fa-facebook"></i> Login Using Facebook</button>
          </div>
          <div class="form-group">
            <button class="btn btn-default  btn-lg explorebtn form-btn gplus-btn"> <i class="fa fa-google-plus"></i> Login Using Google</button>
          </div>
          <div class="form-group already-member"> Don't have an account? <a href="#"> <b> Sign up </b> </a> </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--Login --> 
  
</div>