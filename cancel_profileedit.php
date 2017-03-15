<?php
    session_start();
if(isset($_SESSION['UsernameExistsError'])){
 unset($_SESSION['UsernameExistsError']);   
}
if(isset($_SESSION['UsernameYouEntered'])){
 unset($_SESSION['UsernameYouEntered']);   
}
if(isset($_SESSION['EmailExistsError'])){
 unset($_SESSION['EmailExistsError']);   
}
if(isset($_SESSION['EmailYouEntered'])){
 unset($_SESSION['EmailYouEntered']);   
}

    header("location: adminprofile.php"); exit();
?>