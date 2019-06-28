
     <div class="row">
        <div class="col-md-12">
            <h3>
                Edit your profile
            </h3>
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
                <input type="hidden" name="Email" value = "<?php echo $Email;?>" >
                <button class="btn waves-effect waves-light" type="submit" name="action" class="loginbtn">Update</button>
                <button type="submit" class="btn btn-primary">Update</button>
                <br>
                <div> If you want to delete your account
                     <button type="button" href="<?php echo base_url('/')?>" class="waves-effect waves-darken-4 red btn" >Delete Account</button> </div>
                </form>
            </div>
        </div>
</div>