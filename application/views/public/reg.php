<?php   
include 'header.php' 
?>


<div class="container">

<?php echo form_open('register/admin_reg',['class' => 'form-horizontal']); ?>
  <fieldset>
    <legend>ArticleStop Login</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
      	<?php echo form_input(['name'=>'username', 'class'=>'form-control', 'placeholder'=>'Username','value'=> set_value('username')]); ?>
      <div class="col-lg-6">
       <?php echo form_error('username'); ?>
       </div>

      </div>
       
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
         <?php echo form_input(['name' => 'password','class'=>'form-control', 'placeholder'=> 'password','type'=>'password']);?>
     		<div class="col-lg-6">
       <?php echo form_error('password'); ?>
       </div>
       	<br>
         </div>

      </div>

       <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">First name</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'fname', 'class'=>'form-control', 'placeholder'=>'First name','value'=> set_value('fname')]); ?>
      <div class="col-lg-6">
       <?php echo form_error('fname'); ?>
       </div>

      </div>
    </div>

       <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Last name</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'lname', 'class'=>'form-control', 'placeholder'=>'Last name','value'=> set_value('lname')]); ?>
      <div class="col-lg-6">
       <?php echo form_error('lname'); ?>
       </div>

      </div>
       
    </div>
        
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        <?php echo form_submit(['name'=>'submit', 'value'=>'Register','class'=>'btn btn-primary']); ?>
      </div>
    </div>
  </fieldset>
</form>
</div>
