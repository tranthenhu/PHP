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
          <input type="text" name="nhapmang" placeholder="VD:1 2 3 4" />
          <input type="text" name="xoa" placeholder="phan tu can xoa" />
          <input type = "submit" id = "submit" value = "tính"/>
        </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $array = $_POST["nhapmang"];
      $xoa = $_POST['xoa'];
      trim($array);
     
     
       $array1 = explode(" ",$array);
       
        $lenght = count($array1);
        $index = 0;
       
        for ($i = 0 ; $i < $lenght ; $i++){
          if ($array1[$i] === $xoa) {
            echo "phan tu can xoa co trong mang"."<br/>";
            foreach ($array1 as $chiso => $value){
                echo $value." ";
            $index = $i;
          } 
        }
    }
    for ($index; $index < ($lenght) ; $index++){
        $array1[$index] = $array1[$index+1];
     }
     echo "mang sau khi xoa la: "."<br/>";
        foreach ($array1 as $chiso => $value){
        echo $value." ";
        }
    }
?>
</body>
</html>
