<!DOCTYPE html>
<html lang="en">

<?php require_once "head.php"; ?>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->


	<!-- [ navigation menu ] start -->
	<?php require_once "navbar.php"; ?>
	<!-- [ navigation menu ] end -->



	<!-- [ Header ] start -->
	<?php require_once "header.php"; ?>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
	<div class="pcoded-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Course description</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">Data</a></li>
							<li class="breadcrumb-item"><a href="#!">Courses</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ card ] start -->
			
			
			<div style="margin:auto;" class="col-md-6 col-xl-4">
				<h5 class="mt-4" style="text-align: center;">Details</h5>
				<hr>
				<div class="row">

                <?php 
				
				if (isset($_GET['id'])) { 
					
					$id = $_GET['id'];
				}


				include "config.php";

				$sql = "SELECT * FROM tutors WHERE id = '$id'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);

				   $name = $row['name'];
				   $program = $row['program'];
				   $course = $row['course'];
				   $price = $row['price'];
				   $year = $row['year'];
				   $location = $row['location'];
                   $number = $row['number'];

					?>

			
					
					<div class="card mb-3">
                        <img class="img-fluid card-img-top" src="Img/pexels-perfecto-capucine-1329571.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $program; ?> </h5>
                            <h5 class="card-title"><?php echo $course; ?> </h5>
                            <hr/>
                            <p class="card-text"><?php echo "Name: " .$name; ?> <br/> <?php echo "Price: " .$price ." Ghana cedis per hour"; ?> <br/> <?php echo "Year: " .$year; ?> <br/> <?php echo "Location: " .$location; ?> <br/> <?php echo "Mobile number: 0".$number; ?> </p>

                        </div>
                    </div>
					
				</div>
			</div>
			
		
			<!-- [ card ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>


    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>



</body>
</html>
