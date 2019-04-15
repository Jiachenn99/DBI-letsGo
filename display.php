<?php

$servername = "localhost";
$username = "root";
$password = "";
$databaseName = "mydb";
$keyword;

// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Keywords for user input 
$keyword = $_POST['selection'];
if(isset($_POST['selection']))
{
    $keyword = $_POST['selection'];
}

//SELECT statements
$sqlfirst =  "SELECT * FROM city WHERE City_Name = '$keyword'  OR Country_Code = '$keyword' OR Province = '$keyword' OR Population = '$keyword'";
$sqlsecond = "SELECT * FROM country WHERE ";
$sqlthird =  "SELECT * FROM language WHERE 1";

//Query the database
$querycity = mysqli_query($conn, $sqlfirst); 
$querycountry = mysqli_query($conn, $sqlsecond); 
$querylanguage = mysqli_query($conn, $sqlthird); 

/*
//Table for City
echo "<table border='1'>
<th>City Name</th >
<th>Country Code</th>
<th>Province</th>
<th>Population</th>";

while($row = mysqli_fetch_array($querycity))
{
    echo "<tr>";
    echo "<td>" . utf8_encode($row['City_Name']) . "</td>";
    echo "<td>" . utf8_encode($row['Country_Code']) . "</td>";
    echo "<td>" . utf8_encode($row['Province']) . "</td>";
    echo "<td>" . utf8_encode($row['Population']) . "</td>";
    echo "</tr>";
}
echo "</table>";
else
{
    echo "0 results";
}
*/

/*
//Table for Country
echo "<table border='1'>
<th>Country Code</th>
<th>Country Name</th>
<th>Continent</th>
<th>Region</th>
<th>Area(km2)</th>
<th>Year of Independence</th>
<th>Population</th>
<th>Life Expectancy</th>
<th>GNP</th>
<th>Old GNP</th>
<th>Alternative Names</th>
<th>Ruling System</th>
<th>Founder</th>
<th>City_ID</th>
<th>ISO_Code</th>";

while($row = mysqli_fetch_array($querycountry))
{

echo "<tr>";
echo "<td>" . utf8_encode($row['Country_Code']) . "</td>";
echo "<td>" . utf8_encode($row['Country_Name']) . "</td>";
echo "<td>" . utf8_encode($row['Continent']) . "</td>";
echo "<td>" . utf8_encode($row['Region']) . "</td>";
echo "<td>" . utf8_encode($row['Area_km2']) . "</td>";
echo "<td>" . utf8_encode($row['Year_of_Independence']) . "</td>";
echo "<td>" . utf8_encode($row['Population']) . "</td>";
echo "<td>" . utf8_encode($row['Life_Expectancy']) . "</td>";
echo "<td>" . utf8_encode($row['GNP']) . "</td>";
echo "<td>" . utf8_encode($row['GNP_Old']) . "</td>";
echo "<td>" . utf8_encode($row['Alternative_Names']) . "</td>";
echo "<td>" . utf8_encode($row['Ruling_System']) . "</td>";
echo "<td>" . utf8_encode($row['Founder']) . "</td>";
echo "<td>" . utf8_encode($row['City_ID']) . "</td>";
echo "<td>" . utf8_encode($row['ISO_Code']) . "</td>";
echo "</tr>";
}
echo "</table>";
*/



//Table for Language
/*
echo "<table border='1'>
<th>Country Code</th>
<th>Language</th>
<th>Official_Language</th>
<th>Percentage_of_Use</th>";

while($row = mysqli_fetch_array($querylanguage))
{

echo "<tr>";
echo "<td>" . utf8_encode($row['Country_Code']) . "</td>";
echo "<td>" . utf8_encode($row['Language']) . "</td>";
echo "<td>" . utf8_encode($row['Official_Language']) . "</td>";
echo "<td>" . utf8_encode($row['Percentage_of_Use']) . "</td>";
echo "</tr>";
}
echo "</table>";
*/

/*
//Print result
if (mysqli_num_rows($querycity) > 0)
{
    while($row = mysqli_fetch_assoc($querycity))
    {
        //Display output in format provided
        echo nl2br(utf8_encode($row["City_Name"]) ."\n". utf8_encode($row["Country_Code"]) ."\t".utf8_encode($row["Province"])."\t". utf8_encode($row["Population"])."\n");
    }
}

else
{
    echo "0 results";
}
*/

/*
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
*/

$conn->close();
?> 