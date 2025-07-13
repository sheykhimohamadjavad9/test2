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
    <h1>ثبت نام</h1>
    <h3>لطفا اطلاعات خواسته شده را با دقت وارد کنید</h3>
    <form method="POST">
        <input type="text" name="reg-name" placeholder="نام کاربری" class="value"><br>
        <input type="text" name="reg-email" placeholder="ایمیل" class="value"><br>
        <input type="password" name="reg-password" placeholder="رمز عبور" class="value"><br>
        <input type="password" name="reg-password-confirm" placeholder="تایید رمز عبور" class="value"><br>
        <input type="submit" name="reg-button" value="ثبت نام" id="button">
    </form>
</div>

<?php 

session_start();

$host = 'localhost';
$db = 'mmd';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
$pdo = new PDO($dsn, $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$username = $_POST['reg-name'];
$email = $_POST['reg-email'];
$password = password_hash($_POST['reg-password'], PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO people (username, email, password) VALUE (?,?,?) ");
$stmt->execute([$usernamr, $email, $password]);

$_SESSION['username'] = $username;

header("location:index.php");

exit;


}catch(PDOException $e){
echo "مشکلی در اتصال به سرور به وجود آمده" . $e->getMessage();
}
?>
