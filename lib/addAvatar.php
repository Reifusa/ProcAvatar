<?
require "connect.php";
session_start();
$id = $_POST['id'];
$foto = $_FILES['avatar'];
$types = ['image/png', 'image/jpeg', 'image/jpg'];
$maxsize = 5 * 1024 * 1024;
$maxUrl = 255;

if(isset($_FILES['avatar'])){
    $path = '../uploads/' . $foto['name'];

if($foto['error'] === UPLOAD_ERR_OK){

    if(!empty($foto['name'])){

        if(in_array($_FILES['avatar']['type'], $types)){

            if($foto['size'] <= $maxsize){

                if(strlen($path)<= $maxUrl){

                    move_uploaded_file($foto['tmp_name'], $path);
                    $queryavatar = "UPDATE `users` SET `avatar`='$path' where `users`.`id`='$id'";
                    $avatar = mysqli_query($db, $queryavatar);
                    $_SESSION['user']['avatar'] = $path;
                    header("Location: /profile.php");

                } else {
                    die('Превышена ширина ссылки');
                }} else {
                    die('Превышен размер фотографии');
                }} else{
                    die('Неверный формат изображения');
                }} else{
                    die('Имя файла пустое');
                }} else{
                    die('Ошибка');
                }} else {
                    die('не было выбрано фото');
                }
?>