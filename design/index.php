<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Email</th>
            <?php if ($role == 1) { ?>
                <th>Update</th>
                <th>Delete</th>
            <?php  } ?>


        </tr>
        <tr>
            <?php foreach ($users as $user) { ?>
                <td><?php echo $user['id'] ?></td>
                <td><img width="80px" height="50px" src="design/images/<?= $user['image'] ;?> "alt=""> </td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <?php if ($role == 1) { ?>

                    <td><a href="update.php?id=<?= $user['id'] ?>">Update</a></td>
                    <td><a href="delete.php?id=<?= $user['id'] ?>">Delete</a></td>
                <?php  } ?>
        </tr>
    <?php } ?>




    </table>

</body>

</html>