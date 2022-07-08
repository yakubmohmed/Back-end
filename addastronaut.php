<!doctype html>
<html lang="en">
  <head>
  	<title>Euro space agency</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	
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
	<!------------- This is the php  code to connect the website with the database--------->
	<?php
		
		$link = mysqli_connect("localhost", "root", "", "esa");
		// Check connection
		if ($link === false) {
			die("Connection failed: ");
		}
		?>
	
		<hr>
		<!-------------- The code for adding the data of the astronuat in which there is a form, where the user can add data and submit them ----------->
		<h3>Add a new Astronaut</h3>
		
		<form method="post" action="addastronaut.php">
		
			<label>astronaut name:</label>
			<input type="text" name="astronaut_name">
			
			<br>

			<label>No mission:</label>
			<input type="text" name="no_mission">
			
			<br>
			
			<input type="submit" name="submit">
			
			<br>

			
			
		
		</form>
		
		<?php

		if (isset($_POST['submit'])) {

			$astronaut_name = $_POST['astronaut_name'];
			$bad_code = $_POST['no_mission'];
			
			$sql = "INSERT INTO astronaut (name, no_missions) VALUES ('$astronaut_name','$bad_code')";
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

