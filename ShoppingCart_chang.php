<?php

$product_Id=$_GET["product_Id"];
$product_quantity=$_POST["quantity"];


$product_Id_list_array = explode(",", $_COOKIE['product_Id_list']);
$product_Name_list_array = explode(",", $_COOKIE['product_Name_list']);
$product_Price_list_array = explode(",", $_COOKIE['product_Price_list']);
$product_quantity_list_array = explode(",", $_COOKIE['product_quantity_list']);

$key=array_search($product_Id,$product_Id_list_array);

//array_search 取得值的key值

if(empty($product_quantity) || $product_quantity==0){
    unset($product_Id_list_array[$key]);
    unset($product_Name_list_array[$key]);
    unset($product_Price_list_array[$key]);
    unset($product_quantity_list_array[$key]);
}else{
    $product_quantity_list_array[$key]=$product_quantity;
}

setcookie('product_Id_list',implode(",",$product_Id_list_array ));
setcookie('product_Name_list',implode(",",  $product_Name_list_array));
setcookie('product_Price_list',implode(",", $product_Price_list_array));
setcookie('product_quantity_list',implode(",",$product_quantity_list_array ));

header("location:ShoppingCart_check.php");

?>
