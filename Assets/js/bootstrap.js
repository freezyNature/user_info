<div class= "container" style="margin-top:20px;">
<h1>Admin Form</h1>
<!--<form action="<?php //echo site_url(); ?>/admin/verify" method="post">  form helper autoload krva rhe so no need for this  -->
         <!-- yaha form ko open krne ke liye forn open kr kro-->
         <?php echo form_open('admin/index');  ?>
         <div class="row">
         <div class="col-lg-6">
          <div class="form-group has-feedback">
            <lable for="username">Username </lable>
            <?php echo form_input(['class'=> 'form-control', 'placeholder'=>'Enter username','name'=>'uname','id'=>'uname']); ?>

          </div>
          <div  class="col-lg-6">
          <?php echo form_error('uname');  ?>
           </div>
          </div>
          </div>

          <div class="form-group has-feedback">
          <lable for="password">Password </lable>
        <?php echo form_password(['class'=> 'form-control','type'=>'password', 'placeholder'=>'Enter password','name'=>'pass','id'=>'pass']); ?>
            
          </div>

            <div class="col-xs-4">
              <!--<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>-->
              <?php echo form_submit(['type'=>'submit','class'=>'btn btn-primary btn-flat','value'=>'Submit','id'=>'log_id'])   ?>
              <?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary btn-flat','value'=>'reset'])   ?>
           </div>
          
        
</div>


