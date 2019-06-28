
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class = "alart">
        <?php 
            if($this->session->flashdata('error')){
                echo  $this->session->flashdata('error');
            }
        ?>
        </div>
        <?php echo form_open('Sign_in/validation'); ?>
        
            <div class="container">
                <h4>Log in</h4>
                <p>If you have an account with us please log in.</p>
                
                <p>If you do not have an account <a href="<?php echo base_url('/index.php/Sign_up')?>">Sign up</a>.</p>
               
                <div class="form-group">
                <label for="username"><b>Enter your username or email</b></label>
                <input type="text" placeholder="Enter username or email" name="username" class="form_control" value = "<?php echo set_value('username');?>" >
                <span class = "text-danger red"> <?php echo form_error('username'); ?> </span>
                </div>

              

                <div class="form-group">
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password"  class="form_control" value = "<?php echo set_value('password');?>" >
                <span class = "text-danger red"> <?php echo form_error('password'); ?> </span>
                </div>

                <br>
                <button class="btn waves-effect waves-light" type="submit" name="action" class="loginbtn">Login</button>
                <br>
                <br>    
                
               
            </div>
            
            
        </form>

        </div>
    </div>

</div>

<style>
    .red{
        color:red;

    }

    .alart{
        text-align:center;
        padding: 20px;
        background-color: white;
        color:  #f44336;
        font-weight: bold;
        font-size: 22px;
        line-height: 20px
}

    }
</style>