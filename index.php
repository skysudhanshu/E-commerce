
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | The Mobile Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel = "stylesheet" href = "index.css">  
    <body style="padding-top: 50px;background:pink;" >
        <!-- Header -->
        <?php
          require 'include\common.php';
        ?> 
        <?php
          if(isset($_SESSION['id']))
          {
              header('location:product.php');
          }
        ?>
        <?php
        include 'include/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>Get your personal companion now!</h1>
                            <p>Flash Sale! 5% off on Samsung Mobiles</p>
                            <br/>
                            <a  href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="product.php" >
                            <div class="thumbnail">
                                <img src="images/mob7.jpg" alt="">
                                <div class="caption">
                                    <h3>Samsung</h3>
                                    <p>"The Next Big Thing."</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php" >
                            <div class="thumbnail">
                                <img src="images/mob1.jpg" alt="">
                                <div class="caption">
                                    <h3>Apple</h3>
                                    <p>"Think Different."</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php" >
                            <div class="thumbnail">
                                <img src="images/mob6.jpg" alt="">
                                <div class="caption">
                                    <h3>One Plus</h3>
                                    <p>"Never Settle."</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <?php
        include 'include/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>