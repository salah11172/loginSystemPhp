<?php

require"lib.php";

session_start();


if(empty($_SESSION['user']))
{
    header("LOCATION:login.php");
}

// // if(($_SESSION['user']['id'])==$_GET['id'])
// $userid=$_SESSION['user']['id'];
// print_r($_SESSION['user']);
// echo $userid,
// $_GET['id'];
$res=delete($_GET['id']);
echo $res;
if($res==true)
{
    header("LOCATION:index.php");
}