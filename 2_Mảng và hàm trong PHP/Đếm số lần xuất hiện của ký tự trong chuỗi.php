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
<body>
<br/>
        <form  method="post">
          <input type="text" name="nhapchuoi" placeholder="nhap chuoi ki tu" />
          <input type="text" name="nhapkitu" placeholder="nhap ki tu can tim" />
          <input type = "submit" id = "submit" value = "tính"/>
        </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chuoikitu = $_POST["nhapchuoi"];
        $kitu = $_POST["nhapkitu"];
        $array = str_split($chuoikitu);
        $dem = 0;
        $lenght = count($array);
        for ($i = 0 ; $i < $lenght ; $i++){
          if ($array[$i] === $kitu) {
           $dem++;
          }
        }
        if ($dem > 0){
            echo "ki tu ".$kitu." xuat hien trong chuoi ".$chuoikitu.": ".$dem." lan";
        } else {
            echo "ki tu ".$kitu." khong xuat hien trong chuoi ".$chuoikitu;
        }
    }
        
       
?>

</body>
</html>
