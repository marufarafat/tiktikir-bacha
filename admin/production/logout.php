<?php 
//Logout Script
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['user_role']);
session_destroy();
header('location:../../index.php'); 