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
    <div class="delete">
       <form method="post">
            <table>
               <td>ma hoc vien</td>
               <td><input type="text" name="mahocvien"></td>
               <input type="submit" name="xoa">
            </table>
       </form>
    </div>
    <?php
    if(isset($_POST["xoa"])){
    $mahocvien = $_POST["mahocvien"];
   
    }
    ?>
</body>
</html>