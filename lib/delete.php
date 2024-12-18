<?

require "connect.php";

$id = $_POST['id'];
$info = $_POST['info'];
$tooinfo = $_POST['tooinfo'];

$queryUp = "DELETE from `info` where `info`.`id`='$id'";
$Up = mysqli_query($db, $queryUp);

header('Location: /index.php');