<?php
    session_start();
if(isset($_SESSION['UsernameExistsError'])){
 unset($_SESSION['UsernameExistsError']);   
 unset($_SESSION['UsernameYouEntered']);   
}
if(isset($_SESSION['EmailExistsError'])){
 unset($_SESSION['EmailExistsError']);   
 unset($_SESSION['EmailYouEntered']);   
}
if(isset($_SESSION['phoneError'])){
 unset($_SESSION['phoneError']);   
 unset($_SESSION['PhoneYouEntered']);   
}
if(isset($_SESSION['lineError'])){
 unset($_SESSION['lineError']);   
 unset($_SESSION['LineYouEntered']);   
}
if(isset($_SESSION['branchError'])){
 unset($_SESSION['branchError']);   
 unset($_SESSION['BranchYouEntered']);   
}

header("location: adminprofile.php"); exit();
?>