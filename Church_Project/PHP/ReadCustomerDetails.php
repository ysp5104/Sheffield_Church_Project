<?php
// make connection
$connection = mysqli_connect('localhost', 'root', '', 'test1');
// select db
if (!$connection) {
    die("Database connection failed: " . mysqli_error());
}

$db_select = mysqli_select_db($connection, 'test1');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}

$sql = "SELECT * FROM `customer details`";

$record = mysqli_query($connection, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Details</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<div id="header">
    <h1>St.Andrew's Church</h1>
    <h1>Room Booking</h1>
</div>
<br>
<div id="subTitle">
    <h1>Customer Details</h1>
    <table id="stats" align="center" cellspacing="5" cellpadding="5">
        <tr>
            <th>Group Name</th>
            <th>Religion</th>
            <th>Title</th>
            <th>Forename</th>
            <th>Surname</th>
            <th>Phone Number</th>
            <th>email</th>
            <th>Title</th>
            <th>Forename</th>
            <th>Surname</th>
            <th>Phone Number</th>
            <th>email</th>
        </tr>

        <?php
        while($customer = mysqli_fetch_assoc($record)){
            echo "<tr>";
            echo "<td>".$customer['GroupName']."</td>";
            echo "<td>".$customer['Religion']."</td>";
            echo "<td>".$customer['Title1']."</td>";
            echo "<td>".$customer['Forename1']."</td>";
            echo "<td>".$customer['Surname1']."</td>";
            echo "<td>".$customer['PhoneNumber1']."</td>";
            echo "<td>".$customer['email1']."</td>";
            echo "<td>".$customer['Title2']."</td>";
            echo "<td>".$customer['Forename2']."</td>";
            echo "<td>".$customer['Surname2']."</td>";
            echo "<td>".$customer['PhoneNumber2']."</td>";
            echo "<td>".$customer['email2']."</td>";
            echo "</tr>";
        }
        ?>

    </table>
</div>

</body>
</html>
