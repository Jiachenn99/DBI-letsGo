
<?php
	//Update Country code

	include 'db_connection.php';
	$conn = OpenCon();

	if(isset($_POST['updateCountry'])){
		$Country_Code = $_POST['Country_Code'];
		$Country_Name = $_POST['Country_Name'];
		$Continent = $_POST['Continent'];;
		$Region	= $_POST['Region']; 
		$Area_km2 = $_POST['Area_km2']; 
		$Year_of_Independence =	$_POST['Year_of_Independence'];
		$Population = $_POST['Population']; 
		$Life_Expectancy = $_POST['Life_Expectancy']; 
		$GNP = $_POST['GNP']; 
		$GNP_Old = $_POST['GNP_Old']; 
		$Alternative_Names = $_POST['Alternative_Names']; 
		$Ruling_System = $_POST['Ruling_System']; 
		$Founder = $_POST['Founder']; 
		$ISO_Code = $_POST['ISO_Code'];
		
		$sql = "UPDATE country
			SET Country_Name = '$Country_Name', Continent = '$Continent', Region = '$Region', Area_km2 = '$Area_km2', 
			Year_of_Independence = '$Year_of_Independence', Population = '$Population', Life_Expectancy = '$Life_Expectancy',
			GNP = '$GNP',GNP_Old = '$GNP_Old', Alternative_Names = '$Alternative_Names',Ruling_System = '$Ruling_System',Founder = '$Founder',
			ISO_Code = '$ISO_Code'
			WHERE Country_Code = '$Country_Code'";

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
		<a href="country.php" class="active">Country</a>
		<a href="city.php">City</a>
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
                        <h2> Search Countries </h2>
                    </div>
                    <form action = "country.php" method ="post" >
                        <div class="form-group">
                            <input type="text" name = "selection" class="form-control"
                                placeholder="Search for countries"/>
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
							<th>ISO_Code</th>
							<th>Update</th>
							<th>Delete</th>"
							;

					//Display a table to user first
					$dispall = "SELECT * FROM country";
					$querycountry = mysqli_query($conn, $dispall);

					if(isset($_POST['selection']))
					{
						//Query based off keywords
						$keyword = $_POST['selection'];
						//SELECT statement
						$sqlsecond = "SELECT * FROM country WHERE Country_Code = '$keyword' OR Country_Name = '$keyword' OR Continent = '$keyword' OR  Region = '$keyword'
						OR Year_of_Independence = '$keyword' OR Life_Expectancy = '$keyword' OR GNP = '$keyword' OR GNP_Old = '$keyword' OR Alternative_Names = '$keyword'
						OR Ruling_System = '$keyword' OR Founder = '$keyword' OR City_ID = '$keyword' OR ISO_Code = '$keyword'";	
						//$sqlsecond = "SELECT * FROM  country WHERE Country_Name = '$keyword' OR Country_Code = '$keyword'";
						//Query the database
						$querycountry = mysqli_query($conn, $sqlsecond); 

					}
					
					//Table for Country
					
					if(mysqli_num_rows($querycountry) > 0)
					{
						while($row = mysqli_fetch_assoc($querycountry))
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
							echo "<td><a href='updateCountry.php?id=".$row['Country_Code']."'>Update</a></td>";
							echo "<td><a href='deleteCountry.php?id=".$row['Country_Code']."'>Delete</a></td>";
							echo "</tr>";
						}
						echo "</table>";
					}					
					$conn-> close();
			?>