<?php
    session_start();

    if (isset($_SESSION['username'])) 
    {
        session_destroy();
        header("location: ../admin_view/adminlogin.php");
        
    }
    else
    {
        header("location: ../admin_view/adminlogin.php");
    }
    
?>