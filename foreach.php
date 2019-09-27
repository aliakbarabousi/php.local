<!doctype html>
<html lang="en">
<head>
    <?php include 'function.php';
    $users = get_users()
    ?>
    <style>
        table, tr, td, th {
            border: 1px solid #ccc;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>

    <?php
    if (!(is_null($users)) && count($users) > 0):
    foreach ($users as $user):
        ?>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td>
                <a href="#">delete</a>
                <a href="#">aprove</a>
                <a href="#">edit</a></td>
        </tr>
    <?php endforeach;?>
    <?php else:?>
        <tr>
            <td colspan="4"><span>no data!</span></td>
        </tr>
    <?php endif ?>

    </table>

</body>
</html>