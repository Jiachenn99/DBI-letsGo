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

//Checking whether variables are set
if(isset($_POST['countrycode']))
{
    $countrycode = $_POST['countrycode'];
}


if(isset($_POST['cityid']))
{
    $cityid = $_POST['cityid'];
}

//Declaring sql statements to use
$sql =  "SELECT * FROM city WHERE City_ID = '$cityid'";

//Query the database
$result = mysqli_query($conn, $sql); 

/*
//Print result
if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        //Display output in format provided
        echo nl2br($row["City_Name"] ."\t". $row["Country_Code"] ."\t".$row["Province"]."\t". $row["Population"]."\n");
    }
}

else
{
    echo "0 results";
}
*/

/*Print result but in table 
echo "<table border='1'>
<th>City Name</th>
<th>Country Code</th>
<th>Province</th>
<tr>
<th>Population</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['City_Name'] . "</td>";
echo "<td>" . $row['Country_Code'] . "</td>";
echo "<td>" . $row['Province'] . "</td>";
echo "<td>" . $row['Population'] . "</td>";
echo "</tr>";
}
echo "</table>";
*/

//Printin the shit w/o table but new lines
if (mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        //Display output in format provided
        printf("City Name: ");
        echo nl2br($row['City_Name']."\n");
    }
}


$conn->close();
?> 