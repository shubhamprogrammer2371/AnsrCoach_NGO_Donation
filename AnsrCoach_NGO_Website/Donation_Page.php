<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!-- Custom Css -->
		<link rel="stylesheet" type="text/css" href="css/Donation_Page.css">

		<!-- font awesome cdn link  -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

		<!-- image on title bar -->
		<link rel = "icon" href = "images/logo/icon_image.jpeg" type = "image/x-icon">

		<!-- CSS CDN for Animation On Scroll -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

		<title>AnsrCoach Donation</title>
	</head>

	<body>

		<!-- ************************************************** Navbar Section Starts ******************************************************** -->

		<nav class="navbar navbar-expand-lg fixed-top d-flex justify-content-around align-items-center" data-aos="fade-up">
			<a class="navbar-brand" href="index.html" target="_blank"><img src="images/logo/logo.png" class="img-responsive" alt="Company's Logo"></a>
			<h1>AnsrCoach NGO</h1>
		</nav>

		<!-- ************************************************** Navbar Section Ends ******************************************************** -->


		<!-- ************************************************** Donation Section Starts ******************************************************** -->

		<section class="d-flex justify-content-center donate">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-10 col-10 offset-lg-2 offset-md-1 offset-1">
						<div class="donation">
							<div class="headings container text-center py-2">
								<h1 class="text-uppercase" data-aos="fade-up">donate us</h1>
								<p class="text-capitalize lead" data-aos="fade-up">together we can save lives :)</p>
							</div>
							<div class="d-flex justify-content-center align-items-center">
								<form class="text-center" method="POST">
									<h1 class="d-flex justify-content-start pb-1 text-capitalize" data-aos="fade-up">personal details</h1>
									<div class="form-group mb-3">
										<input type="text" class="form-control" placeholder="Enter Your Full Name" name="uname" id="username" autocomplete="off" required data-aos="fade-up">
									</div>
									<div class="form-group mb-3">
										<input type="email" class="form-control" placeholder="Enter Email ( eg : abc123@gmail.com)" name="email" id="email" autocomplete="off" required data-aos="fade-up">
									</div>
									<div class="form-group mb-3">
										<input type="text" class="form-control" placeholder="Enter Mobile Number ( eg : +91 4444 8888 22)" name="mobile" id="mobile" autocomplete="off" required data-aos="fade-up">
									</div>
									<h1 class="d-flex justify-content-start pb-1 text-capitalize" data-aos="fade-up">account details</h1>
									<div class="form-group mb-3">
										<input type="text" class="form-control" placeholder="Enter Bank Name ( eg : HDFC Bank)" name="bankname" id="bankname" autocomplete="off" required data-aos="fade-up">
									</div>
									<div class="form-group mb-3">
										<input type="text" class="form-control" placeholder="Enter Branch Code ( eg : ABCD)" name="bcode" id="bcode" autocomplete="off" required data-aos="fade-up">
									</div>
									<div class="form-group mb-3">
										<input type="password" class="form-control" placeholder="Enter Account Number ( eg : 1234XXXXXXXXX321)" name="accnum" id="accnum" autocomplete="off" required data-aos="fade-up">
									</div>
									<h1 class="d-flex justify-content-start pb-1 text-capitalize" data-aos="fade-up">card details</h1>
									<div class="form-group mb-3">
										<input type="password" class="form-control" placeholder="Enter Card Number ( eg : 111)" name="cardnum" id="cardnum" autocomplete="off" required data-aos="fade-up">
									</div>
									<div class="form-group mb-3">
										<input type="password" class="form-control" placeholder="Enter CVV ( eg : 111)" name="cardcvv" id="cardcvv" autocomplete="off" required data-aos="fade-up">
									</div>

									<div class="d-flex justify-content-center form-button">
										<button type="submit" name="submit" class="btn text-capitalize text-center"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-aos="fade-up">donate</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- **************************************** Modal for Confirmation Code Starts *********************************************** -->

		<div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content text-capitalize">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">payment</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body"> thanks for filling the donation form by AnsrCoach Foundation :) your data has been saved in dataBase in confidential manner.<br> <br>
						press <span>proceed to pay</span> buton for completing the payment process and before clicking the button we hope you have read our terms and condition/ our privacy policy.<br><br>
						have a nice day :)
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary text-capitalize" data-bs-dismiss="modal">cancel</button>
						<a type="button" class="btn btn-primary" href="https://rzp.io/l/vzb43Ap" target="_blank">proceed to pay</a>
					</div>
				</div>
			</div>
		</div>

		<!-- **************************************** Modal for Confirmation Code Ends *********************************************** -->

		<!-- ************************************************ PHP Code for Storing Values In DB Code Starts ******************************************* -->
		
		<?php

		if (isset($_POST['submit'])) {

			// making connection

			$server="localhost";
			$username="root";
			$password="";
			$db="ansrcoach";
			$con=mysqli_connect($server,$username,$password,$db);

			// actual values 

			$uname=$_POST['uname'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$bankname=$_POST['bankname'];
			$bcode=$_POST['bcode'];
			$accnum=$_POST['accnum'];
			$cardnum=$_POST['cardnum'];
			$cardcvv=$_POST['cardcvv'];

			// encrypted values

			$encrypt_accnum=password_hash($accnum, PASSWORD_BCRYPT);
			$encrypt_cardnum=password_hash($cardnum, PASSWORD_BCRYPT);
			$encrypt_cardcvv=password_hash($cardcvv, PASSWORD_BCRYPT);		

			// firing query	

			$query="INSERT INTO `ansrcoach_donation`(`name`, `email`, `number`, `bname`, `bcode`, `accnum`, `cardnum`, `cardcvv`) VALUES ('$uname','$email','$mobile','$bankname','$bcode','$encrypt_accnum','$encrypt_cardnum','$encrypt_cardcvv')";

			// inserting in database

			if(mysqli_query($con,$query)){
				$_SESSION['done'] = "Donation Form Filled Successfully :) Press Donate Button to Continue";
				$_SESSION['done_status'] = "success";
			}	
			else{
				$_SESSION['done'] = "There Was Some Problem in Filling :( Form Please Fill the Form Again";
				$_SESSION['done_status'] = "error";
				die("Connection to this DataBase Failed due to ".mysqli_connect_error());
			}
		}

		?>

		<!-- ************************************************ PHP Code for Storing Values In DB Code Ends ******************************************* -->


		<!-- ************************************************** Donation Section Ends ******************************************************** -->

		<hr>

		<!-- ************************************************** Footer Section Starts ******************************************************** -->

		<footer class="text-capitalize">
			<div class="container">
				<div class="row">
					<div class=" col-lg-3 col-md-6 col-6 footer_navigation">
						<h3 data-aos="fade-up">our locations</h3>
						<a href="#" data-aos="fade-up"> <i class="fas fa-map-marker-alt"></i> india </a>
						<a href="#" data-aos="fade-up"> <i class="fas fa-map-marker-alt"></i> USA </a>
						<a href="#" data-aos="fade-up"> <i class="fas fa-map-marker-alt"></i> russia </a>
						<a href="#" data-aos="fade-up"> <i class="fas fa-map-marker-alt"></i> france </a>
						<a href="#" data-aos="fade-up"> <i class="fas fa-map-marker-alt"></i> japan </a>
						<a href="#" data-aos="fade-up"> <i class="fas fa-map-marker-alt"></i> africa </a>
					</div>
					<div class=" col-lg-3 col-md-6 col-6 footer_navigation">
						<h3 data-aos="fade-up">quick links</h3>
						<a href="index.html" target="_blank" data-aos="fade-up"> <i class="fas fa-arrow-right"></i> home </a>
						<a href="index.html" target="_blank" data-aos="fade-up"> <i class="fas fa-arrow-right"></i> about us </a>
						<a href="index.html" target="_blank" data-aos="fade-up"> <i class="fas fa-arrow-right"></i> gallery </a>
						<a href="index.html" target="_blank" data-aos="fade-up"> <i class="fas fa-arrow-right"></i> team </a>
						<a href="index.html" target="_blank" data-aos="fade-up"> <i class="fas fa-arrow-right"></i> donate </a>
						<a href="index.html" target="_blank" data-aos="fade-up"> <i class="fas fa-arrow-right"></i> contact us </a>
					</div>
					<div class=" col-lg-3 col-md-6 col-6 footer_navigation">
						<h3 data-aos="fade-up">extra links</h3>
						<a href="#" data-aos="fade-up"> <i class="fas fa-arrow-right"></i> account info </a>
						<a href="#" data-aos="fade-up"> <i class="fas fa-arrow-right"></i> ordered items </a>
						<a href="#" data-aos="fade-up"> <i class="fas fa-arrow-right"></i> privacy policy </a>
						<a href="#" data-aos="fade-up"> <i class="fas fa-arrow-right"></i> payment method </a>
					</div>
					<div class=" col-lg-3 col-md-6 col-6 footer_navigation">
						<h3 data-aos="fade-up">contact info</h3>
						<a href="#" data-aos="fade-up"> <i class="fas fa-phone"></i> +123-456-7890 </a>
						<a href="#" data-aos="fade-up"> <i class="fas fa-phone"></i> +111-222-3333 </a>
						<a href="#" class="footer_email" data-aos="fade-up"> <i class="fas fa-envelope"></i> ansrcoach@gmail.com </a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 col-md-10 col-8 offset-lg-1 offset-md-1 offset-2" data-aos="fade-up">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.11609859!2d72.74109963251523!3d19.08219783933704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1642265913309!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 col-md-8 col-8 offset-lg-1 offset-md-2 offset-2">
						<div class="social_links d-flex justify-content-center align-items-center">
							<a href="#" data-aos="fade-up"><i class="fab fa-instagram"></i></a>
							<a href="#" data-aos="fade-up"><i class="fab fa-facebook"></i></a>
							<a href="#" data-aos="fade-up"><i class="fab fa-whatsapp"></i></a>
							<a href="#" data-aos="fade-up"><i class="fab fa-twitter"></i></a>
							<a href="#" data-aos="fade-up"><i class="fab fa-linkedin"></i></a>
							<a href="#" data-aos="fade-up"><i class="fab fa-pinterest"></i></a>
							<a href="#" data-aos="fade-up"><i class="fab fa-quora"></i></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 col-md-10 col-8 offset-lg-1 offset-md-1 offset-2">
						<div class="author text-center"> created by <span>mr. shubham bhalerao</span> for ansrcoach project | all rights reserved! © 2022 </div>
					</div>
				</div>
			</div>
		</footer>

		<!-- ************************************************** Footer Section Ends ******************************************************** -->

		<!-- Separate Popper and Bootstrap JS -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

		<!-- Script Code for Animation On Scroll and JavaScript CDN -->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>

		<!-- Script Code for Sweet Alert and JavaScript CDN -->
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script>
			swal({
				title: "STATUS",
				text: "<?php echo $_SESSION['done'] ?>",
				icon: "<?php echo $_SESSION['done_status'] ?>",
				button: "OK",
			});
		</script>
	</body>
	</html>