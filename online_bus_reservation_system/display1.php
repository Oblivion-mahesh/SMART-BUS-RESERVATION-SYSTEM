<?php

// Create connection
$conn = new mysqli("localhost","root","","mahesh");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id(1), name  FROM patient";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id(1)"]. " - Name: ". $row["id"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 