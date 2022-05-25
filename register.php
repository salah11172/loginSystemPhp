













<?php
session_start();
if(!empty($_SESSION['user']))
{ header("LOCATION:index.php");}
require"lib.php";

if(isset($_POST['email'])){
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $hashpass= hashing($password);
    
    $allowed = array('gif', 'png', 'jpg','jpeg');
    $temp=$_FILES['image']['tmp_name'];
    $name=$_FILES['image']['name'];
    $type=$_FILES['image']['type'];
    $get_type=explode('/',$type);
    $ext=$get_type[1];
    $new_name=$username.'.'.$ext;
  
   



    $re=register($username,$email,$hashpass,$new_name);
if($re==true){
    
   
    move_uploaded_file($temp,'design/images/'.$new_name);
    
    
}




}else{
    echo"user not added";
}


if(!empty($userdata)){
    $_SESSION['user']=$userdata;
    header("LOCATION:index.php");
}





require'design/register.html';

?>