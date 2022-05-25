
<?php
session_start();
function register($username,$email,$password,$image)
{
    $con = mysqli_connect('localhost', 'root', '', 'login');
    mysqli_query($con, "INSERT INTO `users`( `name`, `email`, `password`,`image`) VALUES ('$username','$email','$password','$image')");
    $res = mysqli_affected_rows($con);
    if ($res == 1) {
        return true;
    } else {
        return false;
    }
}


function login($email,$password,$role,$id)
{
    $con = mysqli_connect('localhost', 'root', '', 'login');
    $query=mysqli_query($con, "SELECT `id`,`email`, `password` `image`, `role`FROM `users` WHERE `email`='$email' AND `password`='$password' ");
    $res = mysqli_fetch_assoc($query);
   print_r($res);
        return $res;
    
}
function alluser()
{
    $con = mysqli_connect('localhost', 'root', '', 'login');
    $query=mysqli_query($con, "SELECT `id`,`name`, `email`,`image` FROM `users` ");
   
    $data=[];
    while( $res = mysqli_fetch_assoc($query)){
        $data[]=$res;
    }
   
       return $data ;
    
}

function hashing($password){
    return sha1($password);

}
function userRole(){
   return $_SESSION['user']['role'];

}

function delete($id)
{
    $con = mysqli_connect('localhost', 'root', '', 'login');
    
    $query=mysqli_query($con, "DELETE FROM `users` WHERE  `id`='$id' ");
    
    $res = mysqli_affected_rows($con);
 
        return $res;
    
}

function getuser($id)
{
    $con = mysqli_connect('localhost', 'root', '', 'login');
    $query=mysqli_query($con, "SELECT `id`,`name`, `email`,`image` FROM `users` WHERE `id`='$id' ");
   
    $data = mysqli_fetch_assoc($query);
    
   
       return $data ;
    
}function update($id,$name,$email,$password,$image)
{
    $con = mysqli_connect('localhost', 'root', '', 'login');
    $sql="UPDATE `users` SET " ;
   if(!empty($name)){
       $sql .= " name ='$name' ";
   }
   if(!empty($email)){
    $sql .= " , email ='$email' ";
}
if(!empty($password)){
   $hashpass= hashing($password);
    $sql .= " , password ='$hashpass' ";
}
if(!empty($image)){
    $sql .= " ,image ='$image' ";
}
     $sql.="WHERE id='$id'";
     echo $sql;
	
    $query=mysqli_query($con, $sql  );
    
    $res = mysqli_affected_rows($con);
 
        return $res;
    
}







?>








