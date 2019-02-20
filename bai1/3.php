<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <head>
        <style>
        input[type=text] {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
        </style>
    </head>
    <body>
        <br/>
        <form  method="post">
          <input type="text" name="tienbandau" />
          <input type="text" name="lai" />
          <input type="text" name="nam" />
          <input type = "submit" id = "submit" value = "đọc"/>
        </form>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tienbandau = $_POST["tienbandau"]; 
    $lai = $_POST["lai"]; 
    $nam = $_POST["nam"]; 
}
$giatrituonglai = $tienbandau + ($tienbandau * $lai * 0.1);   
  echo $giatrituonglai;
        
        
        ?>
    </body>
</html>