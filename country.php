
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
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
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
		   font-size: 15px;
		   text-align: left;
		   overflow-x : auto;
			 } 
			 
		  th {
		   background-color: #588c7e;
		   color: white;
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

			table{
			width:100%;
			table-layout: fixed;
			}
			
			.tbl-header{
			background-color: rgba(255,255,255,0.3);
			}
			.tbl-content{
			height:300px;
			overflow-x:auto;
			margin-top: 0px;
			border: 1px solid rgba(255,255,255,0.3);
			}
			th{
			padding: 20px 15px;
			text-align: left;
			font-weight: 500;
			font-size: 12px;
			color: #fff;
			text-transform: uppercase;
			word-wrap:break-word;
			}
			td{
			word-wrap: break-word;
			padding: 5px;
			text-align: left;
			vertical-align:middle;
			font-weight: 300;
			font-size: 12px;
			color: #fff;
			border-bottom: solid 1px rgba(255,255,255,0.1);
			}


			/* demo styles */

			@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
			body{
			background: -webkit-linear-gradient(left, #25c481, #25b7c4);
			background: linear-gradient(to right, #25c481, #25b7c4);
			font-family: 'Roboto', sans-serif;
			}
			section{
			margin: 50px;
			}


			/* follow me template */
			.made-with-love {
			margin-top: 40px;
			padding: 10px;
			clear: left;
			text-align: center;
			font-size: 10px;
			font-family: arial;
			color: #fff;
			}
			.made-with-love i {
			font-style: normal;
			color: #F50057;
			font-size: 14px;
			position: relative;
			top: 2px;
			}
			.made-with-love a {
			color: #fff;
			text-decoration: none;

			}
			.made-with-love a:hover {
			text-decoration: underline;
			}


			/* for custom scrollbar for webkit browser*/
			::-webkit-scrollbar {
				width: 6px;
			} 
			::-webkit-scrollbar-track {
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
			} 
			::-webkit-scrollbar-thumb {
				-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
			}
			.wrapper {
				text-align: right;
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
			
			<script>
			$(window).on("load resize ", function() {
			var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
				$('.tbl-header').css({'padding-right':scrollWidth});
			}).resize();
			</script>

	</head>
	<body>
	<div id="form">
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-6 offset-3">
                    <div class="pb-3">
                        <h2> Search Countries here! </h2>
                    </div>
                    <form action = "country.php" method ="post" >
                        <div class="form-group">
                            <input type="text" name = "selection" class="form-control"
                                placeholder="Search for countries/ country code etc"/>
                            </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
					<form action = "insertCountry.php" method ="post">
					<br>
					<button type="submit" name =addbutton class="btn btn-primary">Add Country fields</button>
				</form>	
                </div>
				
            </div>
		</div>
		<p></p>
		<p></p>	
		<div style="overflow-x:auto;">
			<div class="tbl-content">
			<table cellpadding="3" cellspacing="3" border="1">
			<?php
				//SELECT
						

					//Display a table to user first
					$dispall = "SELECT * FROM country";
					$querycountry = mysqli_query($conn, $dispall);

					if(isset($_POST['selection']))
					{
						//Query based off keywords
						$keyword = $_POST['selection'];
						//SELECT statement
						$sqlsecond = "SELECT * FROM country WHERE Country_Code LIKE '$keyword%' OR Country_Name LIKE '%$keyword%' OR Continent LIKE '$keyword%' OR  Region LIKE '$keyword%'
						OR Alternative_Names LIKE '%$keyword%' OR Founder LIKE '%$keyword%' OR City_ID LIKE '$keyword' OR ISO_Code LIKE '$keyword%'";	
						//$sqlsecond = "SELECT * FROM  country WHERE Country_Name = '$keyword' OR Country_Code = '$keyword'";
						//Query the database
						$querycountry = mysqli_query($conn, $sqlsecond); 

					}
					
					//Table for Country					
					if(mysqli_num_rows($querycountry) > 0)
					{
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
					<th>Edit</th>
"
					;
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
							echo "<td><a href='updateCountry.php?id=".$row['Country_Code']."'>Update</a><br><a href='deleteCountry.php?id=".$row['Country_Code']."'>Delete</a></td>";
							
							echo "</tr>";
						}
					}
					else{
						printf("No such country found"); 
						}
						echo "</table>";
										
					$conn-> close();
			?>
			</div>
	</table>
	</div>			 
	</body>
	<div class="made-with-love">
	<i>World Datasets 2019</i>
	</div>
</html>
			