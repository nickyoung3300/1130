<?php

$product_Id=$_GET['productId'];
$product_Name=$_GET['productName'];
$product_Price=$_GET['productPrice'];
$product_quantity=$_POST['quantity'];
if(empty($product_quantity))
    $product_quantity=1;
if(empty($_COOKIE["product_Id_list"])){

    setcookie("product_Id_list",$product_Id);
    setcookie("product_Name_list",$product_Name);
    setcookie("product_Price_list",$product_Price);
    setcookie("product_quantity_list",$product_quantity);
    
}else{
    $product_Id_list_array=explode(",",$_COOKIE['product_Id_list']);
    $product_Name_list_array=explode(",",$_COOKIE['product_Name_list']);
    $product_Price_list_array=explode(",",$_COOKIE['product_Price_list']);
    $product_quantity_list_array=explode(",",$_COOKIE['product_quantity_list']);
    
    if(in_array($product_Id,$product_Id_list_array) ){
        $key=array_search($product_Id,$product_Id_list_array);
        $product_quantity_list_array[$key]+=$product_quantity;
    }else{
        $product_Id_list_array[]=$product_Id;
        $product_Name_list_array[]=$product_Name;
        $product_Price_list_array[]=$product_Price;
        $product_quantity_list_array[]=$product_quantity;
        
    }
    
    
    setcookie("product_Id_list",implode( ",",$product_Id_list_array));
    setcookie("product_Name_list",implode( ",",$product_Name_list_array));
    setcookie("product_Price_list",implode( ",",$product_Price_list_array));
    setcookie("product_quantity_list",implode( ",",$product_quantity_list_array));
   
    

    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    body {
        margin-bottom: 0px;
    }

    .header1 {
        font-size: 50px;
    }

    .dropbtn {
        background-color: #3498DB;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover,
    .dropbtn:focus {
        background-color: #2980B9;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 150px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="pr-2.php">??????</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pr-3Show.php" style="font-size:large;    color:deeppink">????????????</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ShoppingCart_main.php" style="font-size:1.2rem;    color:deeppink">??????</a>

                    </li>


                </ul>
                <form class="d-flex" action="./pr-3search.php" method="post">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>&nbsp; &nbsp;
                <li class="nav-item dropdown">

                    <?php


                    if (isset($_COOKIE['passed'])) {

                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" 
                                       role="button" data-bs-toggle="dropdown" aria-expanded="false">'
                            . $_COOKIE['name'] . '</a>';
                        echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                        echo '<li><a class="dropdown-item" href="./pr-2login.php  ">????????????</a></li>';
                        echo '<li><a class="dropdown-item" href="./pr-2login.php  ">????????????</a></li>';

                        echo '<li>
                        <hr class="dropdown-divider">
                        </li>';
                        echo '<li><a class="dropdown-item" href="logout.php">??????</a></li>';
                        echo '</ul>';
                    } else {

                        echo '<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ?????? / ??????
                    </a>';
                        echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                        echo '<li><a class="dropdown-item" href="./pr-2login.php  ">??????</a></li>';
                        echo '<li><a class="dropdown-item" href="./pr-2signUp.php">??????</a></li>';
                        echo '<li>
                        <hr class="dropdown-divider">
                    </li>';
                        echo '<li><a class="dropdown-item" href="searchPwd.php">????????????</a></li>';
                        echo '</ul>';
                    }




                    ?>



                </li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>

        </div>
    </nav>


    <div class="container">
        <nav class="nav nav-pills nav-fill">
            <a class="nav-link " style=" color:darkgreen;" href="./ShoppingCart_main.php">????????????</a>
            <a class="nav-link" style="background-color:cornsilk; color:darkgreen " href="./ShoppingCart_check.php">???????????????</a>
            <a class="nav-link" style="color:darkgreen;" href="./ShoppingOrderDetail.php">??????</a>

        </nav>
    </div>

                    <p align="center">??????????????????????????????????????????</p>
                    <p align="center"><a href="./ShoppingCart_main.php">????????????</a></p>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
