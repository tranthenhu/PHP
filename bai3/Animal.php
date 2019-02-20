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
abstract class Animal
{
    abstract public function makeSound();
}
class Tiger extends Animal
{
    public function makeSound()
    {
        return "Tiger: roarrrrr!";
    }
}
class Chicken extends Animal
{
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";
    }
}
echo ('---- Animals<br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
     echo $animal->makeSound(). '<br>';
}
?>
</body>
</html>