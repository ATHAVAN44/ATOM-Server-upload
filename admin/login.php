<?php 
#Start Session:
session_start();
#Database Connection
include('/home/a7658336/public_html/admin/config/connection.php');
if($_POST){
 $q = "SELECT * FROM users WHERE email ='$_POST[email]' AND password =SHA1('$_POST[password]')";
    $r =mysqli_query($dbc,$q);
    
    if(mysqli_num_rows($r) ==1){
     $_SESSION['username'] = $_POST['email'];
        header('Location:index.php');
          
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
<?php include('/home/a7658336/public_html/admin/config/css.php'); ?>
<?php include('/home/a7658336/public_html/admin/config/js.php'); ?>

    </head>
    
    <body>
        <div id="wrap">
  <?php //include(D_TEMPLATE.'/navigation.php'); // Main navigation?> 
        
        <div class="container"> 
        
             <div class="row">
             <div class="col-md-4"> </div>
             <div class="col-md-4">
                 <div class="panel panel-info">
                     <div class="panel-heading">
                           <strong>Login</strong> 
                         </div><!-- End of panel heading-->
                         <div class="panel-body">
                             <?php
                            if($_POST){
                            echo $_POST['email'];
                                echo '<br>';
                                echo $_POST['password'];
                            }
                             ?>
                             
                               <form action="login.php" method= "post" role="form">
                  <div class="form-group">

                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
              <!--          
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
            -->
              <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                         </div><!--End of body-->
                     </div><!--End of panel -->
                 
                 </div>
             <div class="col-md-4"></div> <!-- end of col--> 
            </div> <!-- End row -->
  
          </div><!-- End of container -->
        </div><!-- END wrap -->
        
      <?php //include(D_TEMPLATE.'template/footer.php'); // site footer  ?> 
        <?php //if($debug == 1){ include('widgets/debug.php'); }?>
     
   
    </body>
</html>