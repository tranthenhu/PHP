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
          <input type="text" name="sodau" />
          <select name="pheptinh">
              <option value="cong">cong</option>
              <option value="tru">tru</option>
              <option value="nhan">nhan</option>
              <option value="chia">chia</option>
          </select>
          <input type="text" name="socuoi" />
          <input type = "submit" id = "submit" value = "tính"/>
        </form>
  <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $sodau = $_POST["sodau"]; 
              $socuoi = $_POST["socuoi"]; 
              $pheptinh = $_POST["pheptinh"];
         }
              $result = 0;
        switch ($pheptinh) {
            case "cong" :
             $result = $sodau + $socuoi;
             break;
             case "tru" :
             $result = $sodau - $socuoi;
             break;
             case "nhan" :
             $result = $sodau * $socuoi;
             break;
             case "chia" :
             $result = $sodau / $socuoi;
             break;

        }
    
      echo $result;

    ?>
    </body>
</html>