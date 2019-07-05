<div class ="container">
     <div class="row">
        <div class="col-md-12">
            <h4>
                Edit your profile
            </h4>
            <?php echo form_open('My_account/validation'); ?>



            <div class="form-group">
                <label for="username"><b>Username</b></label>
                <input type="text" name="username" required class="form_control" value = "<?php echo $username;?>" >
               
                </div>

                <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email" name="email" required class="form_control" disabled  value = "<?php echo $email;?>" >
               
                </div>

                <div class="form-group">
                <label for="password"><b>Password</b></label>
                <input type="password"  name="password" required  class="form_control" value = "<?php echo $password;?>" >
                
                </div>

          

          
                <br>
                <input type="hidden" name="email" value = "<?php echo $email;?>" >
                <button class="btn waves-effect waves-light" type="submit" name="action" class="loginbtn">Update</button>
                
                <br>
                </form>

                <div> If you want to delete your account
                    <a href="<?php echo base_url('My_account/delete')?>">Delete</a>
                     

            </div>
        </div>
</div>
</div>