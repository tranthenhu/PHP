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
     class Shape implements Colorable
     {
         public $dai;
         public $rong;
         public function __construct($dai,$rong)
         {
            
             $this->dai = $dai;
             $this->rong = $rong;
           
         }
         public function getdai(){
             return $this->dai;
         }
         public function getrong(){
            return $this->rong;
        }
         public function dientich(){
             return $this->dai * $this->rong;
         }
         public function howToColor(){
             echo "Color all four sides.";
         }
     }
     interface Colorable
      {
         public function howToColor();
     }

     $shape[0] = new Shape(2,4);
     $shape[1] = new Shape(4,4);
     $shape[2] = new Shape(8,9);

    foreach($shape as $value){
        $dientichhinh = $value->dientich();
        if ($value->getdai() === $value->getrong()){
          echo "dien tich hinh: ".$dientichhinh."  ".$value->howToColor()."<br>";
        } else{
            echo  "dien tich hinh: ".$dientichhinh."<br>";
        }
    }

    ?>
</body>
</html>