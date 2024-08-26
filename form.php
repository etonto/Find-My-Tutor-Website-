<?php

include "config.php";


if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {


	// Get form data
	$name = mysqli_real_escape_string($conn, ucfirst($_POST['name']));
	$location = mysqli_real_escape_string($conn, $_POST['location']);
	$program = mysqli_real_escape_string($conn, $_POST['program']);
	$course = mysqli_real_escape_string($conn, $_POST['course']);
	$year = mysqli_real_escape_string($conn, $_POST['year']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	$number = mysqli_real_escape_string($conn, $_POST['number']);

	$errors = array();

	  if (!is_numeric($number)) {
        $errors[] = "Enter valid mobile number!";  
    }

	if (!is_numeric($price)) {
        $errors[] = "Enter valid price!";  
    }

	if (empty($errors)) {

        $sql = "INSERT INTO tutors (name, location, program, course, year, price, number)
          VALUES ('$name', '$location', '$program', '$course', '$year' , '$price' , '$number')";

        if (mysqli_query($conn, $sql)) {

			header("Location: home.php");
	}


}



}




?>






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
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Registration</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form</a></li>
                            <li class="breadcrumb-item"><a href="#!">Post course</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-sm-12">

			<?php if(!empty($errors)) {
   
   foreach($errors as $error) {
	   echo "<div class='alert alert-danger'> " . $error . "</div>";
   }
  
}
?>

                <div class="card">
                    <div class="card-header">
                        <h5>Fill form</h5>

                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">

							
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label">Full name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="Text">Location</label>
                                        <input name="location" type="text" class="form-control" required>
                                    </div>
                                </div>

								<div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="Text">Mobile number</label>
                                        <input name="number" type="text" class="form-control" id="Text">
                                    </div>
                                </div>
 
								<div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label">Program</label>
                                        <select name="program" class="form-control" id="exampleFormControlSelect1" required>
                                            <option value="">Select</option>
                                            <option value="Computer Science">Computer Science</option>
                                            <option value="Biochemistry">Biochemistry</option>
                                            <option value="Actuarial Science">Actuarial Science</option>
                                            <option value="Chemistry">Chemistry</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label">Course</label>
										<input name="course" type="text" class="form-control" required>

                                    </div>
                                </div>

                                

								<div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label">Year</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="year" required>
                                            <option value="">Select</option>
                                            <option value="1">1</option>
											<option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="floating-label" for="Text">Price  <span style="color:red;">NB:If it's free please type in 0</span></label>
                                        <input name="price" type="text" class="form-control" id="Text">
                                    </div>
                                </div>

								<div class="col-sm-4">
                                    
                                </div>

								<div class="col-sm-4">
                                    
                                </div>

								<div class="col-sm-4">
								<button name="submit" type="submit" class="btn  btn-primary">Submit</button>
								</div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
          
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>


    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>




</body>

</html>
