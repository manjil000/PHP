<?php

include 'looging.php';

//create a gadget chain to call a func that doesen't have any magic methods

class pwned
{
    public function pwn()
    {
        system($this -> command);
    }
}


class Readfile
{
    public function __tostring()
    {
        return file_get_contents($this -> filename);
    }

//we're not adding anything actually calling this function. Bcoz we have defined in exploit.sh 
    //we can jump to it and that is the gadget
}



  class User                                                                                                                                                                                                     
    {                                                                                                                                                                                                            
        public $username;                                                                                                                                                                                        
        public $isAdmin;                                                                                                                                                                                         
                                                                                                                                                                                                                 
        public function PrintData()                                                                                                                                                                              
        {                                                                                                                                                                                                        
            if($this->isAdmin){                                                                                                                                                                                  
                echo $this->username . "is an admin \n";                                                                                                                                                         
            }else{                                                                                                                                                                                               
                echo $this->username . "is not an admin\n";                                                                                                                                                      
            }                                                                                                                                                                                                    
        }                                                                                                                                                                                                        
    }                                                                                                                                                                                                            


//Its all saying is this obj is http post and the variable is ippsec and unserialize it.
$obj = unserialize($_POST['ippsec']);
$obj -> PrintData();

//php -S localhost:80
// curl -X POST -d 'ippsec=O:4:"User":2:{s:8:"username";s:6:"ippsec";s:7:"isAdmin";b:0;}' localhost/webdeserialization.php

//when doing curl we can change the value of the boolean 0 to 1 and the output changes(the object changes )
//this object alone is not exploitable, we dont have any other code to jump to,also no dangerous code so we can't call anything and that's call a gadget 

//For php object injection to work we generally chain against magic methods(function)


//logic behind fast destruct method
//when it goes and creates a username say we have an array username[0] , 2 usernames
//the second time it's defining new variables and when it does the second time it's clearing
//out the resuults of the first one which means it destruct(fast destruction method) 


?>
