<?php session_start(); ?>
<html>
<head>
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/index.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
	<link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<?php
	include("header.php");
?>
</head>

<body class="homee" >

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 text-center">
			<h3 class="text-center p-2 text-light mt-3 rounded-3 text-bg-success">WEB Application for Niwahana</h3>  
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div style="background: #5050ff;
						background-size: cover;
    					background-position: center center;
    					box-shadow: 0 4px 30px rgb(0, 0, 0);
						backdrop-filter: blur(5.1px);
						-webkit-backdrop-filter: blur(5.1px);
						height: 500px;" class="card rounded-0">
				<div class="card-body lgbg text-center">
					<div class="card-title ">
					</div>
					<?php
					
					// echo $role;
							if(isset($_SESSION['valid'])) {			
								include("connection.php");					
								$result = mysqli_query($mysqli, "SELECT * FROM login");
								header('Location: view.php');
								
							?>
								<div class="row ">
									<div class="col-md-2"></div>
									<div style='background-color:#010439; color:#ff6162;' class="col-md-8 border border-primary-subtle rounded-4 p-4">
										<h3 style='color:#ff6162;'>Welcome <?php echo $_SESSION['name'] ?></h3>
										<?php 
											if ($role == 'super_admin'){
												echo"<a class='btn btnc' href='admin/includes/home.php'>Admin Dashboard</a>";
											}
										?>
									</div>
									<div class="col-md-2"></div>
								</div>		
								<br/><br/><br/><br/>
								<a class="btn btnviewapp" href='view.php'><i class="bi bi-collection"></i> View App</a>
								<br/><br/><br/><br/><br/>
								<a class="btn btn-danger" href='logout.php'><i class="bi bi-box-arrow-left"></i> Logout</a>
							<?php	
							} else {
								header('Location: login.php');
							}
							?>
				</div>
			  </div>
		</div>
		<div class="col-md-2"></div>
	</div>

	

	<div class="row">
    <div class="col-md-12">
      <!-- <marquee behavior="" direction=""><h3>BSC/WD/22/35/3</h3></marquee> -->
    </div>
  </div>
	</div>

	<?php
	include("footer.php");
?>	
</body>
</html>
