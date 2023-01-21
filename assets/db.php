<?php 
    $con = new mysqli('localhost','root','','aku_pharm');
//for user informationa making available for all pages

    $array = $con->query("select * from users where id ='$_SESSION[userId]'");
    $user = $array->fetch_assoc();
?>