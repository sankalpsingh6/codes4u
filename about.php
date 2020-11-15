<?php 
session_start();
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Best Codes For You</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Best Programming Content Website">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<!--<link rel="stylesheet" type="text/css" href="styles/about.css">-->
<style>

.modal-open {
  overflow:hidden;
  overflow-y:scroll;
  padding-right:0 !important;
}

.instructors
{
	width: 100%;
	padding-top: 83px;
	padding-bottom: 30px;
	background: #f1f1f1;
}
.instructors_background
{
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 567px;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
}
.instructors_row
{
	margin-top: 50px;
}
.instructor
{
	padding-top: 40px;
	padding-bottom: 34px;
	padding-left: 30px;
	padding-right: 30px;
}
.instructor_image_container
{
	width: 165px;
	height: 165px;
	margin-left: auto;
	margin-right: auto;
}
.instructor_image
{
	background: #f1f1f1;	
	position: absolute;
	width: 190px;
	height: 190px;
	margin-top:-10px;
	margin-left:-10px;
}
.instructor_image img
{

	max-width: 100%;
}
.instructor_name
{
	margin-top: 18px;
}
.instructor_name a
{
	font-family: 'Montserrat', sans-serif;
	font-size: 20px;
	color: rgba(0,0,0,0.9);
	font-weight: 700;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.instructor_name a:hover
{
	color: #2e21df;
}
.instructor_title
{
	font-size: 14px;
	font-weight: 500;
	color: rgba(0,0,0,0.3);
	margin-top: 5px;
}
.instructor_text
{
	margin-top: 16px;
}

</style>
</head>
<body>

<div class="super_container" style="background: #f1f1f1;">

	<!-- Modal Login Sign Up -->
	<div class="modal fade" id="modalLoginSignUp">
		<div class="modal-dialog">
		  <div class="modal-content">			
			<!-- Modal body -->
			<div class="modal-body">
				<div class="card text-center" style="border:none;">
					<center><img id="form-header-img" src="icons/login.png"></center>
					<div class="card-body">
						<form class="form-horizontal" id="form-login">
							<div class="form-group"><input id="login-email" class="form-control" name="email" type="email" placeholder="Email"></div>
							<div class="form-group"><input id="login-password" class="form-control" name="password"type="password" placeholder="Password"></div>
							<div class="form-group" style="margin-top:124px;"><input id="login-button" name="login" class="form-control btn-outline-primary" type="button" value="LOGIN"></div>
							<p>Don't Have An Account<br></p>
							<button type="button" class="btn btn-link" id="open-signup-form"><p>Sign Up</p></button>
						</form>
						<form class="form-horizontal" id="form-signup" hidden>
							<div class="form-group"><input name="username" class="form-control" type="text" placeholder="Username" id="signup-username"></div>
							<div class="form-group"><input name="email"class="form-control" type="email" placeholder="Email" id="signup-email"></div>
							<div class="form-group"><input name="password" class="form-control" type="password" placeholder="Password" id="signup-password"></div>
							<div class="form-group"><input name="cpassword"class="form-control" type="password" placeholder="Confirm Password" id="signup-cpassword"></div>
							<div class="form-group"><input name="signup" class="form-control btn-outline-primary" type="button" value="SIGN UP" id="signup-button"></div>
							<p>Already Have An Account<br></p>
							<button type="button" class="btn btn-link" id="open-login-form"><p>Login</p></button>
						</form>
					</div>
				</div>
			</div>		
		  </div>
		</div>
	</div>


	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<div class="top_bar_phone"><span class="top_bar_title">Email:</span>support@codes4u.in</div>
								<div class="top_bar_right ml-auto">
								
									<!-- Social -->
									<div class="top_bar_social">
										<span class="top_bar_title social_title">follow us</span>
										<ul>
											<li><a href="https://www.facebook.com/Codes4U-280342672585626/?modal=admin_todo_tour"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="https://www.instagram.com/teamcodes4u/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="https://twitter.com/codes4_u"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container mr-auto">
								<a href="#">
									<div><picture><source media="(min-width: 480px)" srcset="icons/main_icon_full.png"><img src="icons/main_icon.png" alt="no icon"></picture></div>
								</a>
							</div>
							<nav class="main_nav_contaner">
								<ul class="main_nav">
									<li><a href="index.php">Home</a></li>
									<li><a href="program-list.php">Programs</a></li>
									<li class="dropdwon"><a href="#" data-toggle="dropdown">Language</a>
										<div class="dropdown-menu">
											<a class="dropdown-item program-list" href="specific-program-list.php" name="c">C Programs</a>
											<a class="dropdown-item program-list" href="specific-program-list.php" name="cpp">C++ Programs</a>
											<a class="dropdown-item program-list" href="specific-program-list.php" name="java">Java Programs</a>
											<a class="dropdown-item program-list" href="specific-program-list.php" name="py">Python Programs</a>
										</div>
									</li>
									<li><a href="ques-ans.php">Ques/Ans</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li class="active"><a href="about.php">About</a></li>
								</ul>
							</nav>
							<div class="header_content_right ml-auto text-right">
								<div class="header_search">
									<div class="search_form_container">
										<form action="#" id="search_form" class="search_form trans_400">
											<input type="search" class="header_search_input trans_400" placeholder="Type for Search" required="required" onkeydown="search(this)">
											<div class="search_button">
												<i class="fa fa-search" aria-hidden="true"></i>
											</div>
										</form>
									</div>
								</div>
								
								
								<!-- Hamburger -->
								<div class="user"><a href="#"><i class="fa fa-user" aria-hidden="true" data-toggle="modal" data-target="#modalLoginSignUp"></i></a></div><div class="hamburger menu_mm"><i class="fa fa-bars menu_mm" aria-hidden="true"></i></div></div>
								

						</div>
					</div>
				</div>
			</div>
		</div>

	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required" id="mobile-search">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm" onclick="smallsearch()">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Home</a></li>
				<li class="menu_mm"><a href="program-list.php">Programs</a></li>
				<li><a href="specific-program-list.php" class="program-list" name="c">C Programs</a></li>
				<li><a href="specific-program-list.php" class="program-list" name="cpp">C++ Programs</a></li>
				<li><a href="specific-program-list.php" class="program-list" name="java">Java Programs</a></li>
				<li><a href="specific-program-list.php" class="program-list" name="py">Python Programs</a></li>
				<li class="menu_mm"><a href="ques-ans.php">Ques/Ans</a></li>
				<li class="menu_mm"><a href="contact.php">Contact</a></li>
				<li class="menu_mm"><a href="about.php">About</a></li>
			</ul>
		</nav>
		<div class="menu_extra">
			<div class="menu_phone"><span class="menu_title">Email:</span>support@codes4u.in</div>
			<div class="menu_social">
				<span class="menu_title">follow us</span>
				<ul>
					<li><a href="https://www.facebook.com/Codes4U-280342672585626/?modal=admin_todo_tour"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/teamcodes4u/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://twitter.com/codes4_u"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Instructors Heading -->
	<div class="container-fluid" style="margin-top: 150px;height:auto">
		<section  style="max-height: auto; width:100%; background-color:rgb(208, 184, 176)">
				<div class="row" >
					<div class="col col-sm-12">
						<div style="align-content: center; text-align: center; vertical-align: middle ">
							<div style="padding-top: 80px; padding-bottom: 80px;font-size:24px;">	<p style="color:black; font-size:25px;"> Hey there!</p>
								<h1>MEET OUR TEAM</h1>
								<p style="color:black; font-size:25px;"> We have a team which includes professional developers for programming support, reputed faculties who can help you solve your doubts as well as customer care support for any other assistance.</p>
							</div>
						</div>
					</div>
				</div>
		</section>
	</div>
	
	<!-- Instructors -->

	<div class="instructors">
		<div class="container">
			<div class="row instructors_row">

				<!-- Instructor -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="images/developer_rachit.png" alt=""></div>
						</div>
						<div class="instructor_name"><a href="#">Rachit Thakur</a></div>
						<div class="instructor_title">Back End Developer</div>
						<div class="instructor_text">
							<p>Introspection is the virtue that is not often seen, and it dominates me. Situation handling is the gift I'm endowed with.</p>
						</div>
					</div>
				</div>
				
				<!-- Instructor -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="images/developer_sankalp.png" alt=""></div>
						</div>
						<div class="instructor_name"><a href="#">Sankalp Singh Rajput</a></div>
						<div class="instructor_title">Front End Developer</div>
						<div class="instructor_text">
							<p>Being an ambivert characterized person, I manage to cope up with the circumstances presented. Sovereignity manages the bold which I am.</p>
						</div>
					</div>
				</div>

				<!-- Instructor -->
				<div class="col-lg-4 instructor_col">
					<div class="instructor text-center">
						<div class="instructor_image_container">
							<div class="instructor_image"><img src="images/developer_rahul.png" alt=""></div>
						</div>
						<div class="instructor_name"><a href="#">Rahul Jha</a></div>
						<div class="instructor_title">Full Stack Developer</div>
						<div class="instructor_text">
							<p>Mingling with knowledge is the trait that abides me. Gaining brainy qualities with others is yet another virtue.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	
	<!-- Footer -->

	<footer class="footer">
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright_content d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-start">
							<div class="cr">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="#section_per" >Designed by CSE students of OCT Bhopal.</a></div>
							<div class="cr_right ml-md-auto">
								<div class="footer_phone"><span class="cr_title">Email:</span>support@codes4u.in</div>
								<div class="footer_social">
									<span class="cr_social_title">follow us</span>
									<ul>
										<li><a href="https://www.facebook.com/Codes4U-280342672585626/?modal=admin_todo_tour"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="https://www.instagram.com/teamcodes4u/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
										<li><a href="https://twitter.com/codes4_u"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script>

var login = "<?php if(isset($_SESSION['LOGIN'])){
	echo $_SESSION['LOGIN'];
}else{
	echo 'FALSE';
} ?>";

if(login == 'TRUE'){
	$(".fa-user").attr("data-toggle","");
	$(".fa-user").attr("onclick","logout()");
}else{
	$(".fa-user").attr("data-toggle","modal");
	$(".fa-user").attr("onclick","");	
}

function logout(){
	var confirmlogout = confirm("Are you sure you want to Logout.");
	if (confirmlogout == true){
		$.ajax({
			url:"logout.php",
			method:"post",
			data:'logout=LOGOUT',
			datatype:'text',
			success:function(){
				window.location = "about.php";
			}
		});
	}
	
}

$("#open-signup-form").click(function(){
	$("#form-header-img").attr("src","icons/signup.png");
	$("#form-signup").prop('hidden','');
	$("#form-login").prop('hidden',true);
});

$("#open-login-form").click(function(){
	$("#form-header-img").attr("src","icons/login.png");
	$("#form-signup").prop('hidden',true);
	$("#form-login").prop('hidden','');
});

$("#signup-button").click(function(){
	var username = $("#signup-username").val();
	var email = $("#signup-email").val();
	var password = $("#signup-password").val();
	var cpassword = $("#signup-cpassword").val();
	
	if(password == cpassword && password.length > 5 && username.length > 2){
		$.ajax({
			url:'signup.php',
			method:'post',
			data:'USERNAME='+username+'&EMAIL='+email+'&PASSWORD='+password,
			datatype:'text',
			success:function(r){
				if(r == 0){
					alert("Failed To Register");
				}else{
					alert("Successfully Registered!");
					$("#modalLoginSignUp").modal('hide');
					window.location = "about.php";
				}
			}
		});
	}
		
});

$("#login-button").click(function(){
	 
	var email = $("#login-email").val();
	var password = $("#login-password").val();
	if(password.length > 5){
		$.ajax({
			url:'login.php',
			method:'post',
			data:'EMAIL='+email+'&PASSWORD='+password,
			datatype:'text',
			success:function(r){
				if(r == 0){
					alert("Login Failed!");
				}else{
					alert("Successfully Logged In!");
					$("#modalLoginSignUp").modal('hide');
					window.location = "about.php";
				}
			}
		});
	}
});

function search(search) {
    if(event.key === 'Enter') {
		$.ajax({
		url:"set-session.php",
		method:"post",
		data:"varname=SEARCHKEY&vardata="+search.value,
		datatype:"text",
		success:function(){
			window.location = "search-result.php"; 
		}
	});
    }
}

function smallsearch(){
	$.ajax({
		url:"set-session.php",
		method:"post",
		data:"varname=SEARCHKEY&vardata="+$("#mobile-search").val(),
		datatype:"text",
		success:function(){
			window.location = "search-result.php"; 
		}
	});
}

$("a.program-list").click(function(){
	$.ajax({
		url:"set-session.php",
		method:"post",
		data:"varname=FROM&vardata="+$(this).attr('name'),
		datatype:"text",
		success:function(){
		}
	});
});
</script>

</body>
</html>