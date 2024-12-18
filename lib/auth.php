<?
session_start();
require "connect.php";

$email = $_POST['email'];
$pass = $_POST['pass'];

if($email == null && $pass == null){
    die('Поля пустые');
} elseif($email == null){
    die('Почта не была введена');
} elseif($pass == null){
    die('ПОЧЕМУ Я ЧЁРНЫЙ?');
}

$queryUser = "SELECT * from `users` where `users`.`email`='$email'";
$mbUser = mysqli_query($db, $queryUser);
$mbUser = mysqli_fetch_assoc($mbUser);

if($mbUser){
    if($mbUser['email'] == $email && $mbUser['pass'] == $pass){

        $_SESSION['user'] = [
            'email' => $mbUser['email'],
            'pass' => $mbUser['pass'],
            'role' => $mbUser['role'],
            'id' =>$mbUser['id'],
            'avatar'=>$mbUser['avatar'],

        ];}else{
            die('Неверный логин или пароль');
        }}else{
            die('Такого пользователя не существует');
        }

header('Location: /index.php');