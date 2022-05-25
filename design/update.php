<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="update.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $userdata['id'] ?>"  >
        <input type="text" name="username"     value="<?= $userdata['name'] ?>" placeholder="username" required>
        <input type="email" name="email"       value="<?= $userdata['email'] ?>" placeholder="email" required>
        <input type="password" name="password" value="" placeholder="password" required>
        <img width="88px" src="design/images/<?= $userdata['image'] ?>">
        <input type="file" name="image" placeholder="image" >


        <input type="submit" name="submit" id="">
    
    
    </form>
    
</body>
</html>