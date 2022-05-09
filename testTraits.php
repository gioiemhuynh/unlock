<?php

/*
 *
 */
trait Hello
{
    public function sayHello()
    {
        echo "Hello";
    }
}

trait Cat
{
    public function catSay()
    {
        echo "Meo Meo";
    }
}
trait Dog
{
    public function dogSay()
    {
        echo "Gâu Gâu";
    }
}

class AnimalSay
{
    use Hello, Cat, Dog;

    public function sayIntroduce($animalName)
    {
        echo "Mình là ".$animalName." xinh đẹp...!";
    }
}

$catSay = new AnimalSay();
$catSay->sayHello();
echo " - ";
$catSay->catSay();
echo " - ";
$catSay->sayIntroduce("Mèo con");
echo "\n";

$dogSay = new AnimalSay();
$dogSay->sayHello();
echo " - ";
$dogSay->dogSay();
echo " - ";
$dogSay->sayIntroduce("Cún con");