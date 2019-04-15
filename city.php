<?php
	//Update Country code

	include 'db_connection.php';
	$conn = OpenCon();

	if(isset($_POST['updateCity'])){
		$City_ID = $_POST['City_ID'];
		$City_Name = $_POST['City_Name'];
		$Country_Code = $_POST['Country_Code'];
		$Province = $_POST['Province'];
		$Population = $_POST['Population'];
		
		$sql = "UPDATE city
			SET City_Name = '$City_Name', Country_Code = '$Country_Code', Province = '$Province', Population = '$Population'
			WHERE City_ID = '$City_ID'";

		if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}
		
	}

?>

<!DOCTYPE html>
<html>
    <head>
		<div class="topnav" id="myTopnav">
		<a href="world.php" >Home</a>
		<a href="country.php">Country</a>
		<a href="city.php" class = "active">City</a>
		<a href="language.php">Language</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
		</div>
    <style>
			h1{
				text-align: center;
				background-color: green;
			}
		  table {
		   border-collapse: collapse;
		   width: 100%;
		   color: #588c7e;
		   font-family: monospace;
		   font-size: 12px;
		   text-align: left;
			 } 
		  th {
		   background-color: #588c7e;
		   color: white;
			}
		  tr:nth-child(even) {background-color: #f2f2f2}
		  
		  body {
			  background-color: beige;
		  }

			.topnav {
			overflow: hidden;
			background-color: #333;
			}

			.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
			}

			.topnav a:hover {
			background-color: #ddd;
			color: black;
			}

			.active {
			background-color: #0000ff;
			color: white;
			}

			.topnav .icon {
			display: none;
			}

			@media screen and (max-width: 600px) {
			.topnav a:not(:first-child) {display: none;}
			.topnav a.icon {
				float: right;
				display: block;
			}
			}

			@media screen and (max-width: 600px) {
			.topnav.responsive {position: relative;}
			.topnav.responsive .icon {
				position: absolute;
				right: 0;
				top: 0;
			}
			.topnav.responsive a {
				float: none;
				display: block;
				text-align: left;
			}
			}
	</style>

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
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"></script>
			<script>
			function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
			}
			</script>

	</head>
	<body>
	<div id="form">
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-6 offset-3">
                    <div class="pb-3">
                        <h2> Search cities you dumbfucks </h2>
                    </div>
                    <form action = "city.php" method ="post" >
                        <div class="form-group">
                            <input type="text" name = "selection" class="form-control"
                                placeholder="Search for cities"/>
                            </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
		</div>
		<p></p>
		<p></p>				 
	</body>
</html>

			<?php				  						
					//Table headers
					echo "<table border='1'>
                    <th>City Name</th >
                    <th>Country Code</th>
                    <th>Province</th>
					<th>Population</th>
					<th>Update</th>
					<th>Delete</th>";

					//Display a table to user first
					$dispall = "SELECT * FROM city";
					$querycity = mysqli_query($conn, $dispall);

					if(isset($_POST['selection']))
					{
						$keyword = $_POST['selection'];
						//Query based off keywords
						$sqlsecond =  "SELECT * FROM city WHERE City_Name = '$keyword' OR Province = '$keyword' OR City_ID = '$keyword' OR Country_Code = '$keyword'";
						//Query the database
						$querycity = mysqli_query($conn, $sqlsecond); 

					}
					
					//Table for Country					
					if(mysqli_num_rows($querycity) > 0)
					{
						while($row = mysqli_fetch_assoc($querycity))
						{						
							echo "<tr>";
                            echo "<td>" . utf8_encode($row['City_Name']) . "</td>";
                            echo "<td>" . utf8_encode($row['Country_Code']) . "</td>";
                            echo "<td>" . utf8_encode($row['Province']) . "</td>";
							echo "<td>" . utf8_encode($row['Population']) . "</td>";
							echo "<td><a href='updateCity.php?id=".$row['City_ID']."'>Update</a></td>";
							echo "<td><a href='deleteCity.php?id=".$row['City_ID']."'>Delete</a></td>";
                            echo "</tr>";
                        }
                    echo "</table>";
					}					
					$conn-> close();
			?>