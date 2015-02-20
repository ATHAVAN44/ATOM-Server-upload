<?php
//Setup file:
error_reporting(0);
#Database connection here
$dbc=mysqli_connect('mysql9.000webhost.com', 'a7658336_athavan', 'abcd1234', 'a7658336_athavan') OR die('Could not connect Database Coz:'.mysqli_connect_error());

$site_title = 'AtomCMS 2.0';

#Constants:
DEFINE('D_TEMPLATE','template');

#Function
include('/home/a7658336/public_html/functions/data.php');
include('/home/a7658336/public_html/functions/template.php');

#site setup:
$debug =data_settings_value($dbc,'debug-status');

if(isset($_GET['page'])){
    
$pageid=$_GET['page']; // Set $pageid to equal the value given in the URL
    
    
}else {
    
    $pageid ='home'; //Set $pageid equal to 1 or the Home page
}

#Page Setup

$page = data_page($dbc,$pageid);



            

?>