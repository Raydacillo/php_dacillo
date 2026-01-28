<?php
include "../../config/includes.php";

if(isset($_POST['prod_name']) && isset($_POST['prod_quantity']) && isset($_POST['prod_type'])&& isset($_POST['prod_price'])&& isset($_POST['prod_date_added'])){
    $prod_name = $_POST['prod_name'];
    $prod_quantity = $_POST['prod_quantity'];
    $prod_type = $_POST['prod_type'];
    $prod_price = $_POST['prod_price'];
    $prod_date_added = $_POST['prod_date_added'];
}
?>