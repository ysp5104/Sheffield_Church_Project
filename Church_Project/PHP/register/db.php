<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Connect</title>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: yang
 * Date: 2018/3/21
 * Time: 上午11:14
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo 'Connect Server Successful'.'<br>';

    $result = mysqli_query($conn,"SELECT * FROM users");


    $row= mysqli_fetch_assoc($result);

    if ($row["name"]==$_GET['name']){
        echo 'Login Successful'.'<br>';
        echo '<br>'.'Welcome, '.$_GET['name'].'<br>';
    }else{
        echo 'The information is wrong，Please Login again'.'<br>';
    }
//    printf($row["name"]);
    mysqli_close($conn);
}
?>
</body>

</html>