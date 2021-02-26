<?php
try{
$vt = new PDO('mysql:host=localhost; dbname=uyelik_sistemi;' ,  'root','');
}

catch(PDOException $e)
{
   echo $e -> getmessage();
}

?>