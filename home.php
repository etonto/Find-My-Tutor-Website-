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
							<h5 class="m-b-10">All Courses</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
							<li class="breadcrumb-item"><a href="#!">College</a></li>
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
		
			
			<div class="col-xl-12">
				<h5 class="mt-4">Recently updated</h5>
				<hr>

				<div class="row">
			
						<?php 
			
               include "config.php";

			   $sql = "select * from tutors";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
		$name =$row['name'];
		$program =$row['program'];
		$course = $row['course'];
		$price = $row['course'];
  
			?>
					<div class="col-sm-4"><a href="view.php?id=<?php echo $id; ?>">
						<div class="card bg-light">
							<div class="card-header"><?php echo $program; ?></div>
							<div class="card-body">
								<h5 class="card-title"><?php echo $course; ?></h5>
								<p class="card-text"><?php echo $name; ?> <br/> <?php echo $price; ?> </p>
							</div>
						</div></a>
					</div>

					<?php 
			  }
    

			}
			else {
				echo "<div class='alert alert-danger'>NO RESULTS</div>";
			}
			
			
			?>
					
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
