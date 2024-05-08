<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "myinventory";

// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}


$sql = "SELECT loginID, userID, username, password FROM userlogin";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // Output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<br>". "loginID: " . $row["loginID"]. " userID: " . $row["userID"]. " username: " . $row["username"]. " password: " . $row["password"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }


?>
