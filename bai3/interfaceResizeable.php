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
    class Shape
    {
        public $name;
       
        public function __construct($name)
        {
            $this->name = $name;
          
        }
        public function show(){
            return "I am a shape. My name is $this->name";
        }
    }
    interface resizeable
     {
        public function resize();
    }
    class Circle extends Shape implements resizeable
    {
        public $radius;
        public $percent;
        public function __construct($name, $radius,$percent)
        {
            parent::__construct($name);
            $this->radius = $radius;
            $this->percent = $percent;
        }
        public function calculateArea(){
            return pi() * pow($this->radius, 2);
        }
        public function resize(){
            return ($this->calculateArea()/100) * $this->percent;
        }
    }
    class Rectangle extends Shape implements resizeable
{
    public $width;
    public $height;
    public $percent;
    public function __construct($name, $width, $height,$percent)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
        $this->percent = $percent;
        
    }
    public function calculateArea(){
        return $this->height * $this->width;
    }
    public function resize(){
        return ($this->calculateArea()/100) * $this->percent;
    }
}


$circles = new Circle('circle', 8, rand(1,100));
$rectangle = new Rectangle('rectangle',10,8,rand(1,100));

$SCircle = $circles->calculateArea();
$resizeCircle = $circles->resize();
echo "dien tich hinh tron: ".$SCircle."   --- after resize: ".$resizeCircle."<br>";

$Srectangle = $rectangle->calculateArea();
$resizerectangle = $rectangle->resize();
echo "dien tich chu nhat: ".$Srectangle."  --- after resize: ".$resizerectangle;



    ?>
</body>
</html>