<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define ("HOST", "localhost");
    define ("DB_USER","root");
    define ("PASSWORD", "");
    define("DB","student_info");

    $connection =mysqli_connect(HOST, DB_USER, PASSWORD, DB);
    
    IF($connection ===false){
        die("ERROR: Could not connect." .mysqli_connect_error());
    }
?>
</body>
</html>