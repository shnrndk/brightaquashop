<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
    </script>

    <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">

    <title>BrightAqua</title>
    
    <script>
        $(document).ready(function(e){
            $(".dropdown-trigger").dropdown();

            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
                indicators: true
            });

            $(document).ready(function(){
                $('.parallax').parallax()
            });

            $(document).ready(function(){
                 $('.carousel').carousel();
                 indicators:true;
                 fullWidth:true;
            });

            $(document).ready(function(){
                $('.materialboxed').materialbox();
            });

        
        });

        
    </script>

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content ">    
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>
    
    <div class="navbar-fixed">
    <nav class="grey darken-4 z-depth-3">
        
        <div class="nav-wrapper container grey darken-4 ">
        <a href="#!" class="brand-logo grey-text text-lighten-2">BrightAqua</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo site_url('/') ?>" class="grey-text text-lighten-2">Home<i class="material-icons right">home</i></a></li>
            <li><a href="<?php echo site_url('/contact') ?>" class="grey-text text-lighten-2">Contact Us<i class="material-icons right">call</i></a></li>
            <!-- Dropdown Trigger -->
            <li><a href="<?php echo base_url('/products') ?>" class="grey-text text-lighten-2">Products<i class="material-icons right">explore</i></a></li>
            <li><a 
            <?php if(!isset($_SESSION['customer_id'])) {
                        echo "hidden"; 
                    }else{
                        if($_SESSION['customer_id']==1){
                            echo "hidden";
                        }
                    }
                
             ?> href="<?php echo site_url('/cart') ?>" class="grey-text text-lighten-2">Cart <?php echo count($this->cart->contents())?><i class="material-icons right">shopping_cart</i></a></li>
            
            <li><a 
            <?php if(!isset($_SESSION['customer_id'])) {
                        echo "hidden"; 
                    }else{
                        if($_SESSION['customer_id']!=1){
                            echo "hidden";
                        }
                    }
                
             ?> 
            
            href="<?php echo site_url('/dashboard') ?>" class="grey-text text-lighten-2">Admin<i class="material-icons right">perm_identity</i></a></li>
            
            
        
            
                        <li 
                        <?php if(isset($_SESSION['customer_id'])) { 
                            echo "hidden";
                            }?>>
                            <a  class="dropdown-trigger btn pink " data-target='dropdown2'><i
                                    class="material-icons right">account_circle</i>

                            </a>   
                             <ul id='dropdown2' class='dropdown-content '>
                                <li><a href="<?php echo base_url('/index.php/Sign_up'); ?>">Sign up</a></li>
                                <li><a href="<?php echo base_url('/index.php/Sign_in'); ?>" >Log in</a></li>
                                
                            </ul>
        
                        </li>


                    

                    <?php if(isset($_SESSION['customer_id'])) { ?>

                        <li>
                            <a href="<?php echo base_url('/index.php/logout'); ?>" class="waves-effect waves-light btn pink" >Log out
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('/index.php/My_account'); ?>" class="waves-effect waves-light btn pink"><i
                                    class="material-icons right">account_box</i>
                            </a>
                        </li>
                        
                    <?php }?> 
        </ul>
        </div>
    
    </nav>
</div>    
</head>




    <div class="parallax-container" style="height: 300px">
        <div class="parallax"><img src="http://cdn.shopify.com/s/files/1/0015/7374/8802/collections/stock-photo-home-aquarium-cleaning-using-magnetic-fish-tank-cleaner-man-scrubbing-glass-of-home-decorative-740603290_1200x1200.jpg?v=1539353014.png"></div>
    </div>   

    
    <!--https://www.fishkeepingworld.com/wp-content/uploads/2017/08/Start-Here-Fishkeeping-World.png-->

 

</html>