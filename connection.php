<?php
try{
    $HOST ="localhost";
    $BANCO="dbnodemcu"; //database name
    $USUARIO="root"; //uid
    $SENHA=""; //pass

    $PDO = new PDO("mysql:host=" . $HOST . ";dbname=" .  $BANCO. ";charset=utf8",$USUARIO,$SENHA);
    echo "working";
}catch(PDOException $error){
    echo "Error";
}
?>