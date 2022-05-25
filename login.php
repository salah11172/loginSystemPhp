
<?php

require"lib.php";

if(!empty($_SESSION['user']))
{ header("LOCATION:index.php");}

if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $hashpass= hashing($password);

    $userdata=login($email,$hashpass,$role,$id);
    
if(!empty($userdata)){
    $_SESSION['user']=$userdata;
    header("LOCATION:index.php");
}
else{
    echo "invalid user";
}
}






require'design/login.html'

?>