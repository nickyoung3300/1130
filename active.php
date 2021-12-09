<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";   


$conn = mysqli_connect($servername, $username, $password, $dbname);

$verify = stripslashes(trim($_GET['verify']));
$nowtime = time();

$sql = "SELECT id,token_exptime FROM t_user WHERE `status`='0' and
`token`='$verify'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);

if($row){
    if($nowtime>$row['token_exptime']){ //24hour
    $msg = '您的啟用有效期已過，請登入您的帳號重新傳送啟用郵件.';
    }else{
            mysqli_query($conn,"UPDATE t_user SET `status`=1 WHERE id=$row[id]");
            if(mysqli_affected_rows($conn)!=1){ 
            die(0);
            }
        $msg = '啟用成功！';
        echo"<div style='text-align:center'>";
        echo "<h1>".$msg."</h1>";
        echo"<h1>將自動導向登入頁...</h1>";
        echo"</div>";
        echo"<script>";
        // echo"function  (){location.href = 'http://127.0.0.1/dashboard/1130/pr-2login.php'};";
        echo"setTimeout(function  (){location.href ='http://127.0.0.1/dashboard/1130/pr-2login.php'},3000);";
        
        echo "</script>";   
    }
}else{
    $msg = 'error.';    
    echo $msg;
}



?>