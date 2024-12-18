<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?session_start();?>

    <form action="lib/registr.php" method="post">
        <input type="text" name="email"><br>
        <input type="password" name="pass"><br>
        <input type="password" name="confirm"><br>
        <button type="submit">Зарегистрироваться</button>
    </form>
<br>

    <form action="lib/auth.php" method="post">
        <input type="text" name="email"><br>
        <input type="password" name="pass"><br>
        <button type="submit">Войти в аккаунт</button>
    </form>

</body>
</html>