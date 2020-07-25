<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "mahesh", "", "mahesh");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$patientname=$_POST['id'];
 
// Attempt select query execution
$sql = "SELECT * FROM patient where id='{$patientname}'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table align=\"center\" border=\"3\" cellspacing=\"5\">";
            echo "<tr>";
                echo "<th>BUS NUMBER</th>";
                echo "<th>NAME</th>";
                echo "<th>failed cases</th>";
                echo "<th>journey date </th>";
	        echo "<th>mobno</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['dept'] . "</td>";
				echo "<td>" . $row['appdate'] . "</td>";
				echo "<td>" . $row['mobno'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>