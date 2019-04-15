<?php 

//Connection
    include 'db_connection.php';
    $conn = OpenCon();

    if (isset($_GET['country_code']) && isset($_GET['language']))
    {
        $country_code = $_GET['country_code'];
        $language = $_GET['language'];
        
    }

    //Deleting where the id is located
    $querydelete = "DELETE FROM language WHERE Country_Code = '$country_code' AND Language = '$language'";

    //Query the database
    $result = mysqli_query($conn, $querydelete);

    //Redirect to main Language page
    header("Location: language.php");






?>