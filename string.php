<!doctype html>
<html lang="en">
<head>
    <?php include 'function.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $users = get_users();
        foreach($users as $user):
        $str = 'hello #name# {email}';
        $str = str_replace(array('#name#','{email}'),array($user['name'],$user['email']),$str);?>
        <p> <?php echo($str) ?> </p>
       <?php endforeach; ?>

</body>
</html>