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
        $name =mysqli_real_escape_string($connection, $_REQUEST['name']); 
    }

    $name = mysqli_real_escape_string($connection, $_REQUEST['name']);
    $program = mysqli_real_escape_string($connection, $_REQUEST['program']);
    $year = mysqli_real_escape_string($connection, $_REQUEST['year']);
    $email = mysqli_real_escape_string($connection, $_REQUEST['email']);

    $sql = "INSERT INTO student (name, program, year_of_study, email) VALUES ('$name','$program','$year','$email')";



try
{
    if(mysqli_query($connection, $sql)){
        echo "Records added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
    }
}
catch(Exception $e)
{
    echo "<p style='color:red;'>Slight error, Please check your values " . mysqli_error($connection)."</p> ";
}

mysqli_close($connection);
?>
</body>
</html>