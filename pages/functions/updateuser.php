<?php
include "../../config/includes.php";

if (isset($_POST['user_id'])) {

    $name = $_POST['names'];
     $age = $_POST['age'];
    $address = $_POST['address'];
    $username = $_POST['user_name'];
    $password = $_POST['password'];
    $userid = $_POST['user_id'];


    $result = updateUSer($userid, $name, $age, $address, $username, $password);

    if($result){
        echo "<script> window.location.href='retrievePage.php' </script";
    }else{
        echo "<script> window.location.href='../viewPage.php?user_id'".$userid." ' </script";
    }
}else{
    echo "<script> window.location.href='retrievePage.php' </script";

}
?>