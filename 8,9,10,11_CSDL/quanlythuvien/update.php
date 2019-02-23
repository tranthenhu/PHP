<?php
include "danhsach.php";
?>
<form method="post">
<table>
    <tr>
        <td>ten hoc vien:</td>
        <td><input type="text" name="tenhocvien" /></td>
    </tr>
    <tr>
        <td>dia chi:</td>
        <td><input type="text" name="diachi" /></td>
    </tr>
    <tr>
        <td>email:</td>
        <td><input type="text" name="email" /></td>
    </tr>
    <tr>
        <td><input type="submit" value="sua lai" name="sua" /></td>
    </tr>
</table>
</form>
<?php
$conn = new mysqli('localhost','root','','quanlythuvien') or die('ket noi that bai');
if(isset($_POST["sua"])&&isset($_REQUEST["ID"])){
 
    $tenhocvien = $_POST["tenhocvien"];
    $diachi = $_POST["diachi"];
    $email = $_POST["email"];
    $query = "UPDATE `danhsachhocvien` SET `tenhocvien`='$tenhocvien',`diachi`='$diachi',`email`='$email'WHERE `mahocvien`='$_REQUEST["ID"]'";
    mysqli_query($conn,$query) or die ("sua that bai");
}
?>