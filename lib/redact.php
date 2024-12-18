<?

require "connect.php";

$id = $_POST['id'];
$info = $_POST['info'];
$tooinfo = $_POST['tooinfo'];

$queryUp = "UPDATE `info` SET `info`='$info', `tooinfo`='$tooinfo' where `info`.`id`='$id'";
$Up = mysqli_query($db, $queryUp);

header('Location: /index.php');