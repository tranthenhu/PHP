

<?php
$conn = new mysqli('localhost','root','','quanlythuvien') or die('ket noi that bai');
    $query = "DELETE FROM `danhsachhocvien` WHERE `mahocvien`='$maHV'";
    mysqli_query($conn,$query) or die ("xoa that bai");

?>