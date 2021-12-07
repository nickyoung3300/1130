<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";   

$username1 = stripslashes(trim($_POST['username']));

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  exit("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM t_user WHERE username='$_POST[username]'";
$result = mysqli_query($conn, $sql);

// $row =mysqli_num_rows($result);
if (mysqli_num_rows($result)==true) {
   
echo '使用者名稱已存在，請換個其他的使用者名稱';
exit;}




$password1 = md5(trim($_POST['password'])); //加密密碼
$email = trim($_POST['email']); //郵箱
$regtime = time();
$token = md5($username1.$password1.$regtime); //建立用於啟用識別碼
$token_exptime = time()+60*60*24;//過期時間為24小時後
$sql = "insert into `t_user` (`username`,`password`,`email`,`token`,`token_exptime`,`regtime`)
values ('$username1','$password1','$email','$token','$token_exptime','$regtime')";
mysqli_query($conn,$sql);



if (mysqli_insert_id($conn)) {//寫入成功，發郵件

    try {

    require 'includes/Exception.php';
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'nickyoung3300@gmail.com';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('nickyoung3300@gmail.com');
    $mail->addAddress('nickyoung3300@gmail.com');     //Add a recipient
   

  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "=?UTF-8?B?".base64_encode('⭐      Go 生態   帳號開通  ')."?=";
    $mail->Body    = "<h3>親愛的" . $username1 ."：</h3>". "<h3>感謝您在 [ Go 生態平台 ] 註冊了新帳號。</h3><h3>請點選連結啟用您的帳號。</h3><a href='http://127.0.0.1/dashboard/1130/active.php?verify=" . $token . "' target='_blank'>http://127.0.0.1/dashboard/1130/active.php?verify=" . $token ."</a><br/>該連結24小時內有效。<br/>如果此次啟用請求非你本人所發，請忽略本郵件。<br/><h3 style='text-align:right'>-------- Go生態平台 上</h3>";
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    }
 header("location:notice.php");

?>