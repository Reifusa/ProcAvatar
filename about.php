<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start();
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

</body>
</html>