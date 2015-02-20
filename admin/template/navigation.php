
<nav class="navbar navbar-default" role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    
        
      <ul class="nav navbar-nav">
            <li ><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
          <li ><a href="#">Pages <span class="sr-only">(current)</span></a></li>
          <li ><a href="#">Users <span class="sr-only">(current)</span></a></li>
          <li ><a href="#">settings <span class="sr-only">(current)</span></a></li>
              </ul>
        <div class="pull-right">
<ul class="nav navbar-nav navbar-right">
   <li>
       <?php if($debug==1){ ?>
    
    <button id="btn-debug" class="btn btn-default" ><i class="fa fa-bug"></i></button>
    <?php } ?> </li>
      
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['fullname_reverse'];?><b class="caret"></b> </a>
          <ul class="dropdown-menu"> 
              <li ><a href="logout.php">Logout </a> </li>
          </ul>
    </li>  
    
    </ul>
    </div>     
</nav> <!-- End of Nav -->
      