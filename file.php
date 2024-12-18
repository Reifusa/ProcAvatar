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

    ?>

    <form action="lib/addFile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="foto">
        <button type="submit">Загрузить фотографию</button>
    </form>
</body>
</html>