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
          <input type="text" name="nhapmang1" placeholder="mảng 1 VD:1 2 3 4" />
          <input type="text" name="nhapmang2" placeholder="mảng 2 VD:1 2 3 4" />
          <input type = "submit" id = "submit" value = "gộp"/>
        </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $array1 = $_POST["nhapmang1"];
      $array2 = $_POST["nhapmang2"];
    $array3 = $array1." ".$array2;
    trim($array3);
    $array33 = explode(" ",$array3);
    foreach ($array33 as $index => $value){
        echo $value." " ;
    }
}
?>
</body>
</html>
