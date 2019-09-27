<!doctype html>
<html lang="en">
<head>
    <?php include 'function.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head><?php  if(isset($_POST)){
    $color = get_bg($_POST['background']);
}  ?>
<body style="background:<?php echo $color?>">
    <form action="" method="post">
        <input type="radio" name="background" value="red"/><label>RED</label>
        <input type="radio" name="background" value="yellow"/><label>YELLOW</label>
        <input type="radio" name="background" value="blue"/><label>BLUE</label>
        <input type="submit" name="send" />
    </form>

</body>
</html>