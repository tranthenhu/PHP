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
<form method='post'>
        <input type='text' name='songuyento' placeholder='so nguyen to can in ra'/><br/>
        <input type='submit' value='tinh'/>
    </form>
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

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $songuyento = $_POST['songuyento'];
    $dem = 0;
    for ($i = 0; $dem < $songuyento; $i++) {
        if (isPrimeNumber($i)) {
            $dem++;
            echo($i . " ");
        }
    }
}
    ?>
    
</body>
</html>