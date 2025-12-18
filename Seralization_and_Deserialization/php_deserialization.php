<?php

/*php desearialization using tools like whysoserial and php gadget chain,phpggc tool(does gadget find for u with known frameworks)
KNow the diff between php variables and object
Understand why giving user control over an object can lead into bad things

say u concatinate two vars a and b, and later u set a new var c which is equal to b. Now again u set 
$a='ippsec'
$b='is not an admin'
echo $a . $b; ---> we get ippsec is not an admin
$c=$b
echo $a .$c ------> we get ippsec is not an admin
$b='is totally an admin'
echo $a . $c ----> we get ippsec is not an admin  

//THis is showing that even though C is equal to B it's only at that point of the time
//IF B updates then, c is not going to update.

$d=shell_exec('date');
echo $d;
echo $d; // d always same it doesn't updates.

If this was an object it was possible to make this variable go and perform a function and get us a date. THis is how object relationship mappers word
THat's the php framework such as code igniter,larval. It's taking the whole dbs and converting the dbs into object so now the php devs don't have to type like:

select username from users where users = ippsec;
All they have to do is: username['ippsec'] <-----------and the framework would do all that magic to convert this into sequal statement
                        username['ippsec']['email']<-------------- do this and they could pull ippsec emails . That's what's object relationship mappers do, and php has moved to such technology

 */
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
//creating an object
$obj = new User();
$obj -> username='ippsec';
$obj -> isAdmin=False;//changing it to True makes ippsec an admin

//calling an object
$obj -> PrintData();

//we can package this whole class up with serialize calls
echo serialize($obj);
/* Output 
    O:4:"User":2:{s:8:"username";s:6:"ippsec";s:7:"isAdmin";b:0;}
    
O---->objects, s----> String , b----------> Boolean
    4----->Length of User
    After this it's going to be how many items are in this objects.:2 (username and isAdmin item)
    Again the Var name is a String inside the item (s)
    8 chars long
    It's content is also a string(s)
    which is 6 chars long which is ippsec
    0--->False , 1-----> true 



 * */

?>
