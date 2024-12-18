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

    if(isset($_SESSION["user"])){
        if($_SESSION["user"]["role"]=='admin'){

           ?> <table>
            <?print_r($_SESSION)?>;<br>
            <a href="/lib/exit.php">Выйти</a><br>
            <a href="file.php">Добавить фотографию</a><br>
            <a href="profile.php">Профиль</a><br>

            <tr>
                <td>id</td>
                <td>info</td>
                <td>tooinfo</td>
            </tr>
           
           
           <?$queyall = "SELECT * FROM `info`";
           $all = mysqli_query($db,$queyall);
           $all = mysqli_fetch_all($all);

           foreach($all as $val){
            ?>
            <tr>
                <td><?=$val[0]?></td>
                <td><?=$val[1]?></td>
                <td><?=$val[2]?></td>
                <td><a href="about.php?id=<?=$val[0]?>">Открыть</a></td>
                <td><a href="update.php?id=<?=$val[0]?>">Обновить</a></td>
            </tr>

           <?}
            ?>
           </table>

           <form action="/lib/add.php" method="post">
            <input type="text" name="info"><br>
            <input type="text" name="tooinfo"><br>
            <button type="submit">Отправить</button>
            <button type="reset">Clear</button>
           </form>

        <?} else {

                     ?> <table>
            <?print_r($_SESSION)?>;<br>
            <a href="/lib/exit.php">Выйти</a><br>
            <a href="profile.php">Профиль</a>

            <tr>
                <td>id</td>
                <td>info</td>
                <td>tooinfo</td>
            </tr>
           
           
           <?$queyall = "SELECT * FROM `info`";
           $all = mysqli_query($db,$queyall);
           $all = mysqli_fetch_all($all);

           foreach($all as $val){
            ?>
            <tr>
                <td><?=$val[0]?></td>
                <td><?=$val[1]?></td>
                <td><?=$val[2]?></td>
                <td><a href="about.php?id=<?=$val[0]?>">Открыть</a></td>
            </tr>

           <?}
            ?>
           </table>

           <?} 
    } else{

        ?> <table>

            <a href="reg.php">Регистрация/Авторизация</a>
            <tr>
                <td>id</td>
                <td>info</td>
                <td>tooinfo</td>
            </tr>
           
           
           <?$queyall = "SELECT * FROM `info`";
           $all = mysqli_query($db,$queyall);
           $all = mysqli_fetch_all($all);

           foreach($all as $val){
            ?>
            <tr>
                <td><?=$val[0]?></td>
                <td><?=$val[1]?></td>
                <td><?=$val[2]?></td>
            </tr>

           <?}?>
           </table>
           <?}?>
</body>
</html>