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
    <form action="register.php" method="POST">
        <input type="text" name="reg-name" placeholder="نام کاربری" class="value"><br>
        <input type="text" name="reg-email" placeholder="ایمیل" class="value"><br>
        <input type="password" name="reg-password" placeholder="رمز عبور" class="value"><br>
        <input type="password" name="reg-password-confirm" placeholder="تایید رمز عبور" class="value"><br>
        <input type="submit" name="reg-button" value="ثبت نام" id="button">
        <h5>حساب دارید؟</h5>
        <a href="login.php">وارد شوید</a>
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


$reg_username = $_POST['reg-name'];
$reg_email = $_POST['reg-email'];
$reg_password_raw = $_POST['reg-password'];

if (empty($_POST["reg_name"]) or
    empty($_POST["reg_email"]) or
    empty($_POST["reg_password"])

    ){
die("لطفا تمام فیلد ها را پر کنید");

}

if(!preg_match('/^[a-zA-Z0-9_]{3-20}$/', $reg_username)){
    die("نام کاربری معتبر نیست");
}

if(!filter_var($reg_email, FILTER_VALIDATE_EMAIL)){
    die("ایمیل معتبر نیست");
}

if(strlen($reg_password_raw) < 6){
    die("رمز عبور باید حداقل 6 کاراکتر باشد");
}

$reg_password = password_hash($reg_password_raw, PASSWORD_DEFAULT);

$validation = $pdo->prepare("SELECT * FROM people WHERE email = ?");
$validation->execute([$reg_email]);
if($validation->rowCount() > 0){
    die("این ایمیل قبلا استفاده شده");
}

$stmt = $pdo->prepare("INSERT INTO people (username, email, password) VALUE (?,?,?) ");
$stmt->execute([$reg_username, $reg_email, $reg_password]);

$_SESSION['username'] = $reg_username;

header("location:index.php");

exit;


}catch(PDOException $e){
echo "مشکلی در اتصال به سرور به وجود آمده" . $e->getMessage();
}
?>
