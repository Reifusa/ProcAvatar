<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?
    session_start();
    require "lib/connect.php";

    $id = $_SESSION['user']['id'];
    $avatar = $_SESSION['user']['avatar'];
    ?>

    <img src="<?=$avatar?>" width="300">
    <h2><?=$_SESSION['user']['email']?></h2>
    <a href="lib/exit.php">Выйти</a>

    <form action="lib/addAvatar.php" method="post" enctype="multipart/form-data">
        <input type="file" name="avatar">
        <input type="hidden" name="id" value="<?=$id?>">
        <button type="submit">Добавить аватарку</button>
    </form>   
</body>
</html>