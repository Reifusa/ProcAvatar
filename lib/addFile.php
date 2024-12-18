<?
require "connect.php";
print_r($_FILES);
$foto = $_FILES['foto'];
$path = '../uploads/' . $foto['name'];
$types = ['image/png', 'image/jpeg', 'image/jpg'];
?>
<br>

<?
if(in_array($_FILES['foto']['type'], $types)){
    move_uploaded_file($foto['tmp_name'], $path);
        ?> <img src="<?=$path?>"><?
        
} else {
    die('Неверный формат фотографии');
}
