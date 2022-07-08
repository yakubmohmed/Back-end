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
		
		<h3>See all astronaut>
	
		<table>
		
			<tr><th width="250px">astronaut_id<br><hr></th>
				<th width="250px">name<br><hr></th>
				<th width="250px">no_mission<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT astronaut_id,name,no_missions FROM astronaut");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['astronaut_id']}</th>
				<th>{$row['name']}</th>
				<th>{$row['no_missions']}</th>
			</tr>";
			}
			?>
			
		</table>
		
		<?php
		$link->close();
		?>
	
		<hr>
		


	</section>

	ript>

	</body>
</html>

