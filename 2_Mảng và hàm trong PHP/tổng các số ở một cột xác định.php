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
          <input type="text" name="cot" placeholder="cot muon tinh" />
          <input type = "submit" id = "submit" value = "tính"/>
        </form>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $chuoi = $_POST["nhapmang"];
        $cot = $_POST["cot"];
        trim($chuoi);
        $arr1 = array();
        $arrtam = explode(",",$chuoi);
        $lenght = count($arrtam);
    for ($i = 0 ; $i < $lenght ; $i++)     {
            $arrtam2 = explode(" ",$arrtam[$i]);
            array_push($arr1,$arrtam2);
    }  
    
     $sum = 0;
    foreach ($arr1 as $row => $arrtam2){
        foreach($arrtam2 as $col => $value){
            echo $value." ";
          if ($col == $cot ){
              $sum += $value;
          }
        }
        echo "<br/>";
    }
    echo "tong cua cot ".$cot." la: ".$sum;
}
?>

</body>
</html>
