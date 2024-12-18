<?
require "connect.php";

$info = $_POST['info'];
$tooinfo = $_POST['tooinfo'];

$queryadd = "INSERT into `info` (`id`,`info`,`tooinfo`) values (NULL, '$info', '$tooinfo')";
$add = mysqli_query($db, $queryadd);

header('Location: /index.php');