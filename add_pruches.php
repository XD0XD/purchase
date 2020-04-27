<?php

include('connect.php');

//add data 
if (isset($_POST['cl_1'])) {
    $n_supplier = $_POST['n_supplier'];
    $product =  $_POST['product'];
    $price =  $_POST['price'];
    $qount = $_POST['qount'];

    $date =  date('y-m-d h:m:s');

    $q = $conn->query("INSERT INTO purchases VALUE(null,'$n_supplier','$product','$price','$qount' , '$date' , 1)");
}

//delete data 

if (isset($_POST['del_d'])) {

    $date_select = $_POST['del'];

    $q = $conn->query("UPDATE purchases SET cod = 0 WHERE date_time = '$date_select';
");
}



//update data
if (isset($_POST['cheack_updat_post'])) {

    $supplier_name = $_POST['supplier_name'];
    $product_name = $_POST['product_name'];
    $price_product = $_POST['price_product'];
    $quantity = $_POST['quantity'];
    $dat_time = $_POST['dat_time'];
    $q = $conn->query("UPDATE purchases SET supplier_name = '$supplier_name' , product_name = '$product_name' , price_product = $price_product ,quantity  =  $quantity WHERE date_time = '$dat_time';");
}

//header("Location: http://localhost/project/index.php");
