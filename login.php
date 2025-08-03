<?php  require_once 'db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>
    <link href="style/reg-style.css" rel="stylesheet">
</head>
<body>
    
<div id="reg">
    <h1>ورود</h1>
    <h3>لطفا اطلاعات خواسته شده را با دقت وارد کنید</h3>
    <form method="POST">
        <input type="text" name="log-name" placeholder="نام کاربری یا ایمیل" class="value"><br>
        <input type="password" name="log-password" placeholder="رمز عبور" class="value"><br>
        <input type="submit" name="log-button" value="ورود" id="button">
        <h5>حساب ندارید؟</h5>
        <a href="register.php">ثبت نام کنید</a>
    </form>
</div>
<?php 
$host = 'localhost';
$db = 'mmd';   
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try{
$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$log_username = $_POST['log-name'];
$log_pass = $_POST['log-password'];

$stmt_log = $pdo->prepare("SELECT * FROM people WHERE username OR email = ? AND password = ?");
$stmt_log->execute([$log_username, $log_pass]);


if($stmt_log->rowCount() > 0){
   $username = $_SESSION['$log_username'];

    header('index.php');




}else{

    echo 'نام کاربری یا رمز عبور اشتباه است';
}


}catch(PDOException $e){


}




?>