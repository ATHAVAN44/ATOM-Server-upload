<?php
//Setup file:
#Database Connection
include('/home/a7658336/public_html/admin/config/connection.php');

$site_title = 'AtomCMS 2.0';

#Constants:
DEFINE('D_TEMPLATE','template');

#Function
include('/home/a7658336/public_html/admin/functions/data.php');
include('/home/a7658336/public_html/admin/functions/template.php');

#site setup:
$debug =data_settings_value($dbc,'debug-status');

if(isset($_GET['page'])){
    
$pageid=$_GET['page']; // Set $pageid to equal the value given in the URL
    
    
}else {
    
    $pageid =1; //Set $pageid equal to 1 or the Home page
}

#Page Setup

$page = data_page($dbc,$pageid);

#User Setup
$user = data_user($dbc,$_SESSION['username']);


?>