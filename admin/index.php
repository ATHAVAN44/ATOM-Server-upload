<?php
#start the session:
session_start();
if(!isset($_SESSION['username'])){
    
    header('Location:login.php');
    
}

?>

<?php include('/home/a7658336/public_html/admin/config/setup.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page['title'].' | '.$site_title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
<?php include('/home/a7658336/public_html/admin/config/css.php'); ?>
<?php include('/home/a7658336/public_html/admin/config/js.php'); ?>

    </head>
    
    <body>
        <div id="wrap">
  <?php include(D_TEMPLATE.'/navigation.php'); // Main navigation?> 
        <h2>Admin Dashboard</h2>
            <div class="row">
                <div class="col-md-3">
                  
                                <?php
                if(isset($_POST['submitted'])==1) {
                     $title=mysqli_real_escape_string($dbc,$_POST['title']);
                     $label =mysqli_real_escape_string($dbc,$_POST['label']);
                     $header =mysqli_real_escape_string($dbc,$_POST['header']);
                     $body =mysqli_real_escape_string($dbc,$_POST['body']);
                    $q = "INSERT INTO pages (user,slug,title,label,header,body) VALUES ('$_POST[user]','$_POST[slug]','$title','$label','$header','$body')";
                    $r =mysqli_query($dbc,$q);
                    if($r){
                 $message = '<p> Page was added!</p>';
                        
                    } else {
                        $message = '<p> Page could not be addedd becasuse:'.mysqli_error($dbc);
                        $message. '<p>'.$q.'</p>';
                    
                    }
                 }
             ?>     
                 <div class="list-group">
     <a class="list-group-item" href="index.php" >
     <h4 class="list-group-item-heading"> <i class="fa fa-plus"></i> Add new page</h4>
             
                    </a>

                                            
                        
            <?php
            $q = "SELECT * FROM pages ORDER BY title ASC";
            $r =mysqli_query($dbc,$q);
        while($page_list = mysqli_fetch_assoc($r)){ 
                        $blurb = substr(strip_tags($page_list['body']),0,160);
                        ?>
    <a class="list-group-item" href="index.php?id=<?php echo $page_list['id'];?>" >
     <h4 class="list-group-item-heading"> <?php echo $page_list['title'];?></h4>
     
        <p class="list-grop-item-text"> <?php echo $blurb; ?> </p>
                    </a>
                        
                    <?php  }   ?>
                        
                    </div>                
                </div>
                <div class="col-md-9">
                    <?php
            if(isset($message)){echo $message; }    ?>
          <?php 
        if(isset($_GET['id'])){
            $q = "SELECT * FROM pages WHERE id= $_GET[id]";
            $r =mysqli_query($dbc,$q);
            
            $opened = mysqli_fetch_assoc($r);
            
            }                
        ?>


                   <form action="index.php" method="post" role="form">
                    <div class="form-group">
                  <label for="title">Title: </label>
                        <input type="text" class="form-control" value="<?php echo $opened['title'];?> " name="title" id="title" placeholder="Page Title">
                       </div>
                       
                           <div class="form-group">
                  <label for="user">User </label>
                        <select class="form-control"  name="user" id="user" >
                            <option value="0">No user </option>
                            
                            <?php
                            $q = "SELECT id FROM users ORDER BY first ASC";
                            $r = mysqli_query($dbc,$q);
                            
                        while($user_list=mysqli_fetch_assoc($r)) { 
                           
                                
                                $user_data = data_user($a7658336_athavan,$user_list['id']);
                            
                            ?>
              <option value="<?php echo $user_data['id'];?>"<?php 
                            
                        if(isset($_GET['id'])){
    if ($user_data['id']==$opened['user'])  { echo "Selected"; }
                        }else{
                                if($user_data['id'] == $user['id']){ echo "selected";}
                            }
                        
                      ?>> <?php echo $user_data['fullname']; ?> </option>
                            
                            <?php } ?>
                               </select>
                            </div>
                                        <div class="form-group">
                  <label for="label">Slug: </label>
                        <input type="text" class="form-control" value="<?php echo $opened['slug'];?> "  name="slug" id="slug" placeholder="Page Slug">
                       </div>
                       
                       
        <div class="form-group">
                  <label for="label">Label: </label>
                        <input type="text" class="form-control" value="<?php echo $opened['label'];?> " name="label" id="label" placeholder="Page Label">
                       </div>
                       
                       <div class="form-group">
        <label for="header"> Header: </label>
                        <input type="text" class="form-control" value="<?php echo $opened['header'];?> " name="header" id="header" placeholder="Page Header">
                       </div>
                       <div>
                            <label for="body"> Body: </label>
<textarea class="form-control" value="<?php echo $opened['body'];?>" name="body" id="body" row="8" placeholder="Page Body"> </textarea>
                       </div>
                    
                    <button type="submit" class="btn btn-default"> Save </button>
                   <input type="hidden"name="submitted" value="1">
                    </form>
                
                </div>
            
            </div>
        </div><!-- END wrap -->
        
      <?php include(D_TEMPLATE.'/footer.php'); // site footer  ?> 
        <?php if($debug == 1){ include('widgets/debug.php'); }?>
     
   
    </body>
</html>