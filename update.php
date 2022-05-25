<?php

require"lib.php";


if(empty($_SESSION['user']))
{
    header("LOCATION:login.php");
}

if(isset($_POST['username']))
{
    $email=$_POST['email'];
    $username=$_POST['username'];
    $id=$_POST['id'];
    $password=$_POST['password'];
    $hashpass= hashing($password);
    if(isset($_FILES['image']['error']) !=4){
    $allowed = array('gif', 'png', 'jpg','jpeg');
    $temp=$_FILES['image']['tmp_name'];
    $name=$_FILES['image']['name'];
    $type=$_FILES['image']['type'];
    $get_type=explode('/',$type);
    $ext=$get_type[1];
    $new_name=$username.'.'.$ext;

    
    move_uploaded_file($temp,'design/images/'.$new_name);
    }
    else{
        $new_name='';
    }

   $res= update($id,$username,$email,$password,$new_name);
   if($res==true){
    header("LOCATION:index.php");

   }
}
else{
    $userid=$_GET['id'];
$userdata=getuser($userid);

}



require'design/update.php';
