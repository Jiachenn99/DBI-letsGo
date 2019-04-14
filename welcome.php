<?php
$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "test2";

// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql =  "SELECT Province, City_ID, City_Name FROM city WHERE 1";
$result =mysqli_query($conn, $sql); 

if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["City_ID"]."</td><td>".$row["Province"]." ".$row["City_Name"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

if(mysqli_num_rows($result)>0 )
{
    while($row =mysqli_fetch_assoc($result))
    {
        echo nl2br("City Name: " . $row["Province"] );
    }
}

else
{
    echo "0 results";
}

$conn->close();
?> 