<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table td {
            width: 15px;
            height: 15px;
        }
    </style>
</head>

<body>
    <form method='post'>
        <input type='text' name='sotien' placeholder='so tien can chuyen'/><br/>
        <select name='mode'>
            <option value='USD'>VND to USD</option>
            <option value='VND'>USD to VND</option>
        </select>
        <input type='submit' value='tinh'/>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $sotien = $_POST['sotien'];
            $mode = $_POST['mode'];
            switch ($mode) {
                case 'USD':
                    $output = $sotien / 23000;
                    break;
                case 'VND':
                    $output = $sotien * 23000;
                    break;
            }
           
             
                echo $output; 
            } 
            
        
    ?>
</body>
</html>