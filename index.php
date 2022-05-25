<?php 
require"lib.php";






if(empty($_SESSION['user']))
{
    header("LOCATION:login.php");
}

$users=alluser();
$role= userRole();



require'design/index.php';


