<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<h1>danh sách học viên</h1>
<table width="50%">
    <tr>
        <th>ma hoc vien</th>
        <th>ten hoc vien</th>
        <th>dia chi</th>
        <th>email</th>
        <th>quan ly</th>
    </tr>

    <?php
    $conn = new mysqli('localhost','root','','quanlythuvien') or die('ket noi that bai');
    $query = "SELECT * FROM `danhsachhocvien`";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0){
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $i++;
            $maHV = $row['mahocvien'];
            $maHV1 = $row['mahocvien']."1";
            echo "<tr>".
                     "<td>".$row['mahocvien']."</td>".
                     "<td>".$row['tenhocvien']."</td>".
                     "<td>".$row['diachi']."</td>".
                     "<td>".$row['email']."</td>".
                     "<td><a href='update.php?ID=$maHV'>sửa</a>"." | "."<a href='delete.php?ID=$maHV1' >xóa</a></td>".
                 "</tr>";
             
        }
    } else {
        echo "k co ban ghi";
    }

    ?>
   <a href="insert.php" > them </a>

<body>
</body>
</html>