<?php 
	$student_id = $_GET['id'];
	require_once 'classes.php';
	$student_update = new StudentInfo();
	$query_result = $student_update->select_student_by_id($student_id);
	$query_info = mysqli_fetch_assoc($query_result);

		if(isset($_POST['btn'])){
			$student_update->update_student_information($_POST);
			// echo "<pre>";
			// print_r($_POST);
			// exit();
		}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD | Data insert</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- header section start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="headerSection">
					<h2>PHP MySQL CRUD Application</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- header section end -->
	<!-- menu section start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="nav justify-content-center nav_background navText">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="create.php">Create</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="read.php">Read</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="update.php">Update</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="delete.php">Delete</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- menu section end -->
	<!--body section start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="myBody">
					<h4 class="bodyTitle">Student Info Update</h4>
					<div class="regform">
						<form action="" method="post">
							<input class="myinput" type="text" name="stuName" value="<?php echo $query_info['stuName']?>" placeholder="Enter Your Name">
							<input class="myinput" type="hidden" name="stuId" value="<?php echo $query_info['stuId']?>">
							<input class="myinput" type="email" name="stuEmail" value="<?php echo $query_info['stuEmail']?>" placeholder="Enter Your Email">
							<input class="myinput" type="phone" name="stuPhone" value="<?php echo $query_info['stuPhone']?>" placeholder="Enter Your phone">
							<input class="myinput" type="text" name="stuDept" value="<?php echo $query_info['stuDept']?>" placeholder="Enter Your Depertment"> 
							<!-- <select class="myinput selectbBorder" name="stuDept" >
								<option>Select Your Depertment</option>
								<option>CSE</option>
								<option>EEE</option>
								<option>CIVIL</option>
							</select> -->
							<br> <br>
							<input type="submit" name="btn" value="Update Info">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- body section end -->
	<!-- footer section start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<footer class="footer">
					<div class="footerText">
						<p>Powered By <a href="https://github.com/siamshaeed">siamshaeed</a></p>
					</div>
				</footer>
			</div>
		</div>
	</div>
	<!-- footer section end -->
	<script src="js/bootstrap.js"></script>
</body>
</html>