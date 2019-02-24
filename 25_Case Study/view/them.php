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

    <div class="them">
       <form method="post">
            <table>
               <td>ma hoc vien</td>
               <td><input type="text" name="mahocvien"></td>
               <td>ten hoc vien</td>
               <td><input type="text" name="tenhocvien"></td>
               <td>dia chi</td>
               <td><input type="text" name="diachi"></td>
               <td>email</td>
               <td><input type="text" name="email"></td>
               <input type="submit" name="them">
            </table>
       </form>
    </div>
    <?php
 
    if(isset($_POST["them"])){
    $mahocvien = $_POST["mahocvien"];
    $tenhocvien = $_POST["tenhocvien"];
    $diachi = $_POST["diachi"];
    $email = $_POST["email"];
    $xuly = new xuly();
    
    $xuly->add();
    }
    ?>
</body>
</html>