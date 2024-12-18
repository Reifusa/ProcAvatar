<?

require "connect.php";

$email = $_POST['email'];
$pass = $_POST['pass'];
$confirm = $_POST['confirm'];

if($pass !== $confirm){
    die('Пароли не совпали');
} elseif ($pass == null){
    die('Не был введён пароль');
} elseif($email == null){
    die('Не была введена почта');
} elseif($email == null && $path == null){
    die('Не была введена почта и пароль');
}

$queyUser = "SELECT * FROM `users` where `users`.`email`='$email'";
$user = mysqli_query($db, $queyUser);
$user = mysqli_fetch_assoc($user);

if($user){
    die('Такой пользователь уже есть');
}else{
    $queyREG = "INSERT INTO `users` (`email`, `pass`) values ('$email', '$pass')";
    $REG = mysqli_query($db, $queyREG);
    header('Location: /index.php');
}