<?php
 session_start();
 if(!isset($_SESSION['us1'])) // If session is not set then redirect to Login Page
 {
     header("Location:index.php");
 }
 else {
     session_unset();
     session_destroy();
     header("Location:index.php");
 }
?>