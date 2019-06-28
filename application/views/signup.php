
<div class="container" >
    <div class="row">
        <div class="col-md-12">
        
        <?php echo form_open('Sign_up/validation'); ?>
            <div class="container">
                <h4 class=" grey-text text-darken-3">Create new account</h4>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <div class="form-group">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="username"  class="validate" value="<?php echo set_value('username'); ?>" size = "50" >
                <span class = "helper-text red"> <?php echo form_error('username'); ?> </span>
 
                </div>

                <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter your Email" name="email" class="validate"  value="<?php echo set_value('email'); ?>"  >
                <span class = "text-danger red"> <?php echo form_error('email'); ?> </span>

                </div>

                <div class="form-group">
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" class="validate" value="<?php echo set_value('password'); ?>" class="form_control" size = "50" >
                <span class = "text-danger red"> <?php echo form_error('password'); ?> </span>
                </div>

                <hr>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                <button  class="btn waves-effect waves-light" type="submit" class="registerbtn">Sign in</button>
            </div>
            
            <div class="container signin">
                <p>Already have an account? <a href="<?php echo base_url('/index.php/Sign_in')?>">Sign in</a>.</p>
            </div>
        </form>
    




        </div>
    </div>

</div>


<style>
    .red{
        color:red;
    }
</style>