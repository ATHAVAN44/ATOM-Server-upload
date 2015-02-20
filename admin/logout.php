<?php

#Start Session
session_start();

unset($_SESSION['username']); //delete the username key
//session_destroy(); //this would delete all of the session key
header('Location: login.php');




?>