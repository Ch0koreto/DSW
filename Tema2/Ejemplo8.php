<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>PHP_SELF: <?php echo $_SERVER['PHP_SELF']; ?></li>
        <li>SERVER_ADDR: <?php echo $_SERVER['SERVER_ADDR']; ?></li>
        <li>SERVER_NAME: <?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li>DOCUMENT_ROOT: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
        <li>REMOTE_ADDR: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        <li>REQUEST_METHOD: <?php echo $_SERVER['REQUEST_METHOD']; ?></li>
    </ul>
    <h1>Contenido variable ENV</h1>
    <p><?php var_dump($_ENV); ?></p>
</body>

</html>