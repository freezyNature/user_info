<?php include('header.php');  ?>


<div class= "container" style="margin-top:20px;">
<h1>User Form</h1>
<!--<form action="<?php //echo site_url(); ?>/admin/verify" method="post">  form helper autoload krva rhe so no need for this  -->
         <!-- yaha form ko open krne ke liye forn open kr kro-->
         <?php echo form_open('admin/login');  ?>
         <div class="row">
         <div class="col-lg-6">
          <div class="form-group has-feedback">
            <lable for="username">Username </lable>
     <?= form_input(['class'=> 'form-control', 'placeholder'=>'Enter username','name'=>'uname','id'=>'uname','value'=>set_value('uname')]); ?>

          </div>
          </div>
          <div  class="col-lg-6" style="margin-top:35px;">
          <?= form_error('uname');  ?>
           </div>
          </div>
          <div class="row">
         <div class="col-lg-6">
          <div class="form-group has-feedback">
          <lable for="password">Password </lable>
     <?= form_password(['class'=> 'form-control','type'=>'password', 'placeholder'=>'Enter password','name'=>'pass','id'=>'pass','value'=>set_value('pass')]); ?>
            
          </div>
          </div>
          <div  class="col-lg-6" style="margin-top:35px;">
          <?= form_error('pass');  ?>
          <!-- for a perticular field ko red krne ke liye <"div class='text-danger'>","</div>" -->

           </div>
           </div>
            <div class="col-xs-4">
              <!--<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>-->
              <?= form_submit(['type'=>'submit','class'=>'btn btn-primary btn-flat','value'=>'Submit','id'=>'log_id'])   ?>
              <?= form_reset(['type'=>'reset','class'=>'btn btn-primary btn-flat','value'=>'reset'])   ?>
              <?= anchor('admin/register/','sign up?','class="link-class"') ?>
           </div>
          
        
</div>


<?php include('footer.php');  ?>