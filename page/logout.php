<?php 
    session_start();
    if (isset($_SESSION['user_id'])){
        unset($_SESSION['user_id']);
        header("Location: /LT-Web/login/");
    }
    else{
        
        header("Location: /LT-Web/login/");
    }

?>