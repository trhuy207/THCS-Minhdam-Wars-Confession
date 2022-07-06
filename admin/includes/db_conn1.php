<?php 

$server = "localhost";
$user = "cafejips_root";
$pass = "Matkhau123!";
$database = "cafejips_warscfsdata";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Không thể kết nối tới Database.')</script>");
}

?>