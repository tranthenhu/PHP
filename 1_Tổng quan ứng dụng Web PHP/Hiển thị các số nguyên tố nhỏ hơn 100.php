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
    <?php
    function isPrimeNumber($n)
    {
        
        if ($n < 2) {
            return false;
        }
      
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
    echo("Các số nguyên tố nhỏ hơn 100 là: <br>");
    for ($i = 0; $i < 100; $i++) {
        if (isPrimeNumber($i)) {
            echo($i . " ");
        }
    }
    ?>
    
</body>
</html>