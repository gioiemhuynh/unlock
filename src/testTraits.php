<?php

/*
 * trait Hello has a public function sayHello and return "Hello"
 */

trait Hello
{
    public function sayHello()
    {
        echo "Hello";
    }
}

/*
 * Trait Cat has a public function catSay return cat's language => "Meo Meo"
 */

trait Cat
{
    public function catSay()
    {
        echo "Meo Meo";
    }
}
/*
 * Trait Dog has a public function dogSay return dog's language => "Gâu Gâu"
 */
trait Dog
{
    public function dogSay()
    {
        echo "Gâu Gâu";
    }
}

/*
 * class AnimalSay reuse traits and has a function to introduce about a animal
 */
class AnimalSay
{
    use Hello, Cat, Dog;

    public function sayIntroduce($animalName)
    {
        echo "Mình là " . $animalName . " xinh đẹp...!";
    }
}
/*
 * Cat say and introduce
 */
$catSay = new AnimalSay();
$catSay->sayHello();
echo " - ";
$catSay->catSay();
echo " - ";
$catSay->sayIntroduce("\nMèo con");
echo "\n";

/*
 * Dog say and introduce
 */
$dogSay = new AnimalSay();
$dogSay->sayHello();
echo " - ";
$dogSay->dogSay();
echo " - ";
$dogSay->sayIntroduce("Cún con");
