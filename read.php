<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD | Data Read</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php
	require_once 'classes.php';
	$objSelect = new StudentInfo; //object create
	$query_result = $objSelect->studentSelect(); //function for data read
	//This code for show message by using session
	$message = '';
	session_start();
	if (isset($_SESSION['message'])) {
		$message = $_SESSION['message'];
		unset($_SESSION['message']);
	}
	?>
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
					<div class="readTable">
						<h2 class="readTitle">Student List</h2>
						<h2 class="readTitle" style="color: green;"><?php echo $message; ?></h2>
						<table class="table table-hover table-striped text-center">
							<thead>
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Depertment</th>
									<!-- <th>Action</th> -->
								</tr>
							</thead>
							<tbody>
								<?php while ($stu_info = mysqli_fetch_assoc($query_result)) { ?>
									<tr>
										<td><?php echo $stu_info['stuId']; ?></td>
										<td><?php echo $stu_info['stuName']; ?></td>
										<td><?php echo $stu_info['stuEmail']; ?></td>
										<td><?php echo $stu_info['stuPhone']; ?></td>
										<td><?php echo $stu_info['stuDept']; ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- menu section end -->
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
	<script src="js/jquery.js"></script>
</body>
</html>