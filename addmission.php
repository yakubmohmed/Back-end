<!doctype html>
<html lang="en">
  <head>
  	<title>Website menu 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>
		</div>
		
		<div class="container-fluid px-md-5">
			<div class="row justify-content-between">
				<div class="col-md-8 order-md-last">
					<div class="row">
						<div class="col-md-6 text-center">
							<a class="navbar-brand" href="index.html">Euro <span>space agency</span></a>
						</div>
						
					</div>
				</div>
				<div class="col-md-4 d-flex">
				
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
			<li class="nav-item active"><a href="index.php" class="nav-link">Home page</a></li>
	        	<li class="nav-item active"><a href="addastronut.php" class="nav-link">Add astronaut</a></li>
	        	<li class="nav-item active"><a href="addtarget.php" class="nav-link">Add target</a></li>
	        	<li class="nav-item"><a href="addmission.php" class="nav-link">Add mission</a></li>
	        	<li class="nav-item"><a href="seemission.php" class="nav-link">See mission</a></li>
	            <li class="nav-item"><a href="seetarget.php" class="nav-link">see target</a></li>
			  	<li class="nav-item active"><a href="seeastronaut.php" class="nav-link">See astronaut</a></li>
				
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	<!--------------------- code for linking SQL----------------> 
	<?php
		
		$link = mysqli_connect("localhost", "root", "", "esa");
		// Check connection
		if ($link === false) {
			die("Connection failed: ");
		}
		?>
	
		<hr>
		
		<h3>Add a new missions</h3>
	
		<form method="post" action="addmission.php">
		
			<label>mission name:</label>
			<input type="text" name="name">
			
			<br>

			<label>destination:</label>
			<input type="text" name="destination">
			
			<br>
			
			<label>launch_date:</label>
			<input type="date" name="launch_date">
			
			<br>
			
			
		<label>mission type:</label>
			<input type="text" name="mission_type">
			
			<br>
			
			<label>crew size :</label>
			<input type="number" name="crew_size">
			
			<br>
			
			<label>travel time :</label>
			<input type="text" name="travel_time">
			
			<br>
			
			<label>mission life :</label>
			<input type="text" name="mission_life">
			
			<br>
			
			<label>Select astronaut:</label>
			<select name="astronaut_id">
				<!------------------------ code for drop down menu----------------->
				<?php
				$sql = mysqli_query($link, "SELECT astronaut_id, name FROM astronaut");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['astronaut_id']}'>{$row['name']}</option>";
				}
				?>
			</select>
			

			<br>
			<label> select target</label>
			
		<select name="target_id">
		<br>
				<?php
				$sql = mysqli_query($link, "SELECT target_id, name FROM target");
				while ($row = $sql->fetch_assoc()){
				echo "<option value='{$row['target_id']}'>{$row['name']}</option>";
				}
				?>
			</select>
			<br>
			
			<input type="submit" name="submit">
			
			<br>

			
			
		
		</form>
		<!-------------------------------- this code used for database entry where all the records are added------------>
		
		<?php

		if (isset($_POST['submit'])) {

			$name = $_POST['name'];
			$destination = $_POST['destination'];
			$launch_date = $_POST['launch_date'];
			$mission_type= $_POST['mission_type'];
			$crew_size= $_POST['crew_size'];
			$mission_life = $_POST['mission_life'];
			$travel_time = $_POST['travel_time'];
			$astronaut_id = $_POST['astronaut_id'];
			$target_id = $_POST['target_id'];
			$sql = "INSERT INTO missions  ( name, destination, launch_date, mission_type, crew_size, mission_life, travel_time, astronaut_id, target_id) VALUES ( '$name','$destination','$launch_date','$mission_type','$crew_size','$mission_life','$travel_time','$astronaut_id', '$target_id' )";
			if (mysqli_query($link, $sql)) {
			  echo "New record created successfully";
			} else {
			  echo "Error adding record ";
			}
		
		}
		
		$link->close();
		?>
	
		<hr>
		

	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

