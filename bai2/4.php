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
          <input type="text" name="nhapmang" placeholder="VD:1,2,3,4" />
          
          <input type = "submit" id = "submit" value = "tính"/>
        </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $array = $_POST["nhapmang"];
      trim($array);
        }
       
        $array1 = explode(" ",$array);
        $min = $array1[0];
        $index = 0;
        $lenght = count($array1);
        for ($i = 0 ; $i < $lenght ; $i++){
          if ($array1[$i] < $min) {
            $min = $array1[$i];
            $index = $i;
          }
        }
        
        echo "mảng có min là: ".$min." --index: ".$index;
?>

</body>
</html>
