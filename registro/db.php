<?php
function conn(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="assipark";
    $con=mysql_connect($server,$user,$pass);
    return $con;
}

?>