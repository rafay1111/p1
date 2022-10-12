<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "pr";

    $conn = new mysqli($server,$user,$pass,$db);

    if ($conn->connect_error)
    {
        die("Connection_failed: ".$conn->connect_error);
    }
    echo "Connection Successfully";
    
    ?>
</body>
</html>