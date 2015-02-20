<?php include('/home/a7658336/public_html/config/setup.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page['title'].' | '.$site_title;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
<?php include('/home/a7658336/public_html/config/css.php'); ?>
<?php include('/home/a7658336/public_html/config/js.php'); ?>

    </head>
    
    <body>
        <div id="wrap">
  <?php include(D_TEMPLATE.'/navigation.php'); // Main navigation?> 
        
        <div class="container">
        <h1><?php echo $page['header'];?></h1>
            <?php echo $page['body_formatted'];?>
            <?php if(isset($_GET['debug'])==1) { ?>
            <?php } ?>
            
        </div>
        </div><!-- END wrap -->
        
      <?php include(D_TEMPLATE.'/footer.php'); // site footer  ?> 
        <?php if($debug == 1){ include('/home/a7658336/public_html/widgets/debug.php'); }?>
     
   
    </body>
</html>