    

<nav class="navbar navbar-default" role="navigation">
   <?php if($debug==1){ ?>
    
    <button id="btn-debug" class="btn btn-default"><i class="fa fa-bug"></i>
</button>
    <?php } ?>
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
         <div class="container">  
      <ul class="nav navbar-nav">
            <?php nav_main($dbc,$pageid);?>
                 

<!-- echo '<li><a href="?pages='.$nav['id'].'">'.$nav['title'].'</a></li>'; -->


          <li ><a href="#">FAQ <span class="sr-only">(current)</span></a></li>
          <li ><a href="#">Contact Us <span class="sr-only">(current)</span></a></li>

      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
              </div>
</nav> <!-- End of Nav -->
      