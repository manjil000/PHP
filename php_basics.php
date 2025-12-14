<?php

//------------------------Concatinations and basics------------------------------

$love="Hacking";

echo "I love $love \n";

echo "Another way that I love" . $love ."\n";
echo "Another way that I love" . $love ." HEHE!";

echo "\n Var dumping output:";
var_dump($love); //function returns the data type and value:

echo "\n";

print 'Hey'. $love . " U seeeing THis? ";

//----------------------taking user input -_-------------------------------------------------

echo "\n -----------WHo is thi (taking user input?)";
$name=readline();

echo "Hello" . $name;


print "\n-----------------------Trying Array Functions------------------\n";

$hackers = array("hacker1","hacker2","John_Hammong");
var_dump($hackers);
echo "\nTHere are" . count($hackers). "items in the hackers array";

echo "\n";
print_r($hackers);


echo "PHP is an object-oriented programming.\n";

print "\n ---------------------------Playing with classes and objects---------------------\n";
print  "\n If you create a __construct() function, PHP will automatically call this function when you create an object from a class. \n";

class laptops {

    public $brand;
    public $cpu;

    public function __construct($brand,$cpu){
        $this -> brand=$brand;
        $this -> cpu=$cpu;
    }
    public function message()
    {
        return "My Laptop is DELL". $this->brand . " " . $this->cpu . "\n";
    }
}
$my_jan=new laptops("DELL" , "i5");
var_dump($my_jan);

print "\n ---------------------------Playing with classes and objects Part 2---------------------\n";
    print "\n NOte Note: In a class, variables are called properties and functions are called methods!\n";

class fruit{


    //properties
    public $name;
    public $color;

    //MEthods
    //$this keyword refers to the current object, and is only available inside methods.(functions)
    // -> is how you access an instance’s properties and methods.
    //Object / instance = the actual thing made from the class ($grapes = new fruit();).
    function set_name($name)
    {
        $this -> name =$name;
    }
    function get_name()
    {
        return $this -> name;
    }
}

    $grapes=new fruit();
    $cherry=new fruit();
    $grapes-> set_name('Grapes');
    $cherry -> set_name('Bannana');

    echo "Name: " . $grapes->get_name();
    echo "<br>";
    echo "\nName: " . $cherry -> get_name();

    echo "\n";
    print '\n Objects of a class are created using the new keyword.';


?>
