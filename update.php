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

    $id = $_GET['id'];
    $queyOne = "SELECT * from `info` where `info`.`id`='$id'";
    $one = mysqli_query($db, $queyOne);
    $one = mysqli_fetch_assoc($one);
    ?>

    <div>
        <h2><?=$one['info']?></h2>
        <h2><?=$one['tooinfo']?></h2>
    </div>

        <form action="/lib/redact.php" method="post">
            <input type="hidden" name="id" value="<?=$one['id']?>" ><br>
            <input type="text" name="info" value="<?=$one['info']?>" ><br>
            <input type="text" name="tooinfo" value="<?=$one['tooinfo']?>" ><br>
            <button type="submit">Редактировать</button>
        </form>

        <form action="/lib/delete.php" method="post">
        <button type="submit">Удалить</button>
            <input type="hidden" name="id" value="<?=$one['id']?>" >
            <input type="hidden" name="info" value="<?=$one['info']?>" >
            <input type="hidden" name="tooinfo" value="<?=$one['tooinfo']?>" >
        </form>

</body>
</html>