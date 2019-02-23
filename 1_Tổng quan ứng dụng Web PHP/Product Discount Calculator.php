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
          <input type="text" name="ProductDescription" />
          <input type="text" name="ListPrice" />
          <input type="text" name="DiscountPercent" />
          <input type = "submit" id = "submit" value = "CalculateDiscount"/>
        </form>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ProductDescription = $_POST["ProductDescription"]; 
    $ListPrice = $_POST["ListPrice"]; 
    $DiscountPercent = $_POST["DiscountPercent"]; 
}
   $DiscountAmount = $ListPrice * $DiscountPercent * 0.1;   
  echo $DiscountAmount;
        
        
        ?>
    </body>
</html>