<?php
$hostname='localhost';
$username='root';
$password='';
$database='captain_college';

$database_con= new mysqli($hostname,$username,$password,$database);
if($database_con->error){
echo 'not connected'.$database_con->error;
}else{
    echo 'connected to MySQL';
}
?>