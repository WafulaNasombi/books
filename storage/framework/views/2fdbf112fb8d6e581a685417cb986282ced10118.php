<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="add2" method="post">
        <?php echo csrf_field(); ?>
        <input type="text" name="author_name"><br>
        <button name="submit">Submit</button>
    </form>
</body>
</html><?php /**PATH D:\xampp2\htdocs\books\resources\views/author.blade.php ENDPATH**/ ?>