<?php 
$one = 1;
$course1 = "Actuarial Science";

$two = 2;
$course2 = "Biochemistry";

$three = 3;
$course3 = "Chemistry";

$four = 4;
$course4 = "Computer Science";

?>


<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item">
					    <a href="home.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Home</span></a>
					</li>
				

					<li class="nav-item pcoded-menu-caption">
						<label>Courses</label>
					</li>
					
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Actuarial Science</span></a>
					    <ul class="pcoded-submenu">
					        <li><a href="page.php?year=<?php echo $one?>&program=<?php echo $course1?>" >Year 1</a></li>
                            <li><a href="page.php?year=<?php echo $two?>&program=<?php echo $course1?>" >Year 2</a></li>
                            <li><a href="page.php?year=<?php echo $three?>&program=<?php echo $course1?>" >Year 3</a></li>
                            <li><a href="page.php?year=<?php echo $four?>&program=<?php echo $course1?>" >Year 4</a></li>

                            
					    </ul>
					</li>
					
					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Biochemistry</span></a>
					    <ul class="pcoded-submenu">
                        <li><a href="page.php?year=<?php echo $one?>&program=<?php echo $course2?>" >Year 1</a></li>
                        <li><a href="page.php?year=<?php echo $two?>&program=<?php echo $course2?>" >Year 2</a></li>
                        <li><a href="page.php?year=<?php echo $three?>&program=<?php echo $course2?>" >Year 3</a></li>
                        <li><a href="page.php?year=<?php echo $four?>&program=<?php echo $course2?>" >Year 4</a></li>                        

					    </ul>
					</li>

					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Chemistry</span></a>
					    <ul class="pcoded-submenu">
                        <li><a href="page.php?year=<?php echo $one?>&program=<?php echo $course3?>" >Year 1</a></li>
                        <li><a href="page.php?year=<?php echo $two?>&program=<?php echo $course3?>" >Year 2</a></li>
                        <li><a href="page.php?year=<?php echo $three?>&program=<?php echo $course3?>" >Year 3</a></li>
                        <li><a href="page.php?year=<?php echo $four?>&program=<?php echo $course3?>" >Year 4</a></li>
					    </ul>
					</li>

					<li class="nav-item pcoded-hasmenu">
					    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Computer Science</span></a>
					    <ul class="pcoded-submenu">
                        <li><a href="page.php?year=<?php echo $one?>&program=<?php echo $course4?>" >Year 1</a></li>
                        <li><a href="page.php?year=<?php echo $two?>&program=<?php echo $course4?>" >Year 2</a></li>
                        <li><a href="page.php?year=<?php echo $three?>&program=<?php echo $course4?>" >Year 3</a></li>
                        <li><a href="page.php?year=<?php echo $four?>&program=<?php echo $course4?>" >Year 4</a></li>
					    </ul>
					</li>
					
					
					
					
					<li class="nav-item pcoded-menu-caption">
					    <label> Forms </label>
					</li>
					<li class="nav-item">
					    <a href="form.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Register</span></a>
					</li>
					
				

				</ul>
				
			
				
			</div>
		</div>
	</nav>