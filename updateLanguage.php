<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        Look up the Cities You Want!
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>

<?php 

$servername = "localhost";
$username = "mamp";
$password = "";
$databaseName = "world";

// Create connection
$conn = new mysqli($servername, $username, $password, $databaseName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['country_code']) and isset($_GET['language'])){
    $country_code = $_GET['country_code'];
    $language = $_GET['language'];
}

$sql =  "SELECT * FROM language WHERE Country_Code = '$country_code' and Language = '$language'";

//Query the database
$result = mysqli_query($conn, $sql);

//Print result
if (mysqli_num_rows($result) > 0)
{

    while($row = mysqli_fetch_assoc($result))
    {
        echo "<div class='container pt-3'>";
        echo "<form action='language.php' method='POST'>";
        //Display output in format provided
        foreach ($row as $key => $value) {
            if($key != "Country_Code" && $key != "Language"){
                echo '
            <div class="form-group">
                <label for="'. $key .'">'.$key.'</label>
                <input value="'. $value.'"type="text" class="form-control" name="'. $key .'">
            </div>
           ';
            }

            if($key == "Country_Code"){
                echo '<input value="'. $value.'"type="hidden" class="form-control" name="'. $key .'">';
            }

            if($key == "Language"){
                echo '<input value="'. $value.'"type="hidden" class="form-control" name="'. $key .'">';
            }
       }
        echo "<input class='btn btn-primary' type='submit' value='Update this city' name='updateLanguage'/>";
        echo "</form>";
        echo "</div>";
    }
}

?>