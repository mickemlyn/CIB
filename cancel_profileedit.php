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
if(isset($_SESSION['phoneError'])){
 unset($_SESSION['phoneError']);   
}if(isset($_SESSION['PhoneYouEntered'])){
 unset($_SESSION['PhoneYouEntered']);   
}

    header("location: adminprofile.php"); exit();
?>