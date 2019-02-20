<?php
include "danhsach.php";
?>
<form method="post">
<table>
    <tr>
        <td>ma hoc vien:</td>
        <td><input type="text" name="mahocvien" /></td>
    </tr>
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
        <td><input type="submit" value="themmoi" name="them" /></td>
    </tr>
</table>
</form>
<?php
$conn = new mysqli('localhost','root','','quanlythuvien') or die('ket noi that bai');
if(isset($_POST["them"])){
    $mahocvien = $_POST["mahocvien"];
    $tenhocvien = $_POST["tenhocvien"];
    $diachi = $_POST["diachi"];
    $email = $_POST["email"];
    $query = "INSERT INTO `danhsachhocvien`(`mahocvien`,`tenhocvien`,`diachi`,`email`) VALUES 
    ('$mahocvien','$tenhocvien','$diachi','$email')";
    mysqli_query($conn,$query) ;
   
}

?>