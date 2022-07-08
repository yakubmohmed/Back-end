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
	<?php
		
		$link = mysqli_connect("localhost", "root", "", "esa");
		// Check connection
		if ($link === false) {
			die("Connection failed: ");
		}
		?>
	
		<hr>
		
	
		<table>
		
			<tr><th width="250px">mission_id<br><hr></th>
				<th width="250px">name<br><hr></th>
				<th width="250px">destination<br><hr></th>
				<th width="250px">launch_date<br><hr></th>
				<th width="250px">mission_type<br><hr></th>
				<th width="250px">crew_size<br><hr></th>
				<th width="250px">mission_life<br><hr></th>
				<th width="250px">astronaut_id<br><hr></th>
				<th width="250px">target_id<br><hr></th>
				<th width="250px">travel_time<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT mission_id,name,destination,launch_date,mission_type,crew_size,mission_life,astronaut_id,target_id,travel_time FROM missions");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['mission_id']}</th>
				<th>{$row['name']}</th>
				<th>{$row['destination']}</th>
				<th>{$row['launch_date']}</th>
				<th>{$row['mission_type']}</th>
				<th>{$row['crew_size']}</th>
				<th>{$row['mission_life']}</th>
				<th>{$row['astronaut_id']}</th>
				<th>{$row['target_id']}</th>
				<th>{$row['travel_time']}</th>
			</tr>";
			}
			?>
			
		</table>
		
		<?php
		$link->close();
		?>
	
		<hr>
		



	</section>


	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

