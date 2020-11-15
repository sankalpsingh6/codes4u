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
<style>

.modal-open {
  overflow:hidden;
  overflow-y:scroll;
  padding-right:0 !important;
}

</style>
</head>
<body>

<div class="super_container">

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
									<li class="active"><a href="contact.php">Contact</a></li>
									<li><a href="about.php">About</a></li>
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
	
	<!-- Contact Us -->
	<div class="container" style="z-index:1;;color: grey; text-align: center; width:100%; background-color:#7a5252; opacity:0.9;color:white;margin-top:150px;">
		<div class="row" style="height:50%">
			<div class="col col-md-12 col-xs-12"> 
				<div  style="padding-top: 20px">
					<h1 class="h1" style="font-size:66px">Contact Us</h1><h6 style="font-size:22px; color:white">We'd <img src="icons/heart-icon.png"> to help!</h6>
				</div>
			</div>
		</div>
	</div>
	

	<section class="" style="position:relative; margin-top: 50px;  ">
		<div class="container">
			<div class="row">
				<section class="col col-md-8 col-sm-12 ">
					<div class="jumbotron" style="height:500px ">
						<form>
							<div class="container" style="background-color: white padding-top:15px">
								<h3 class="form-header-text">Your feedback is important to us.</h3>
								<div style="margin-top:13px "> 
									<div class="form-group">
  										<label for="email">Your Email:</label>
  										<input type="text" class="form-control" placeholder="xyz@youremail.com" id="review-email" required>
  									</div>

									<div class="form-group" style="padding-bottom:25px">
										<label for="comment">Your Review.</label>
										<textarea style="resize: none" class="form-control" rows="5" id="review"></textarea>
									</div>

									<div class="form-group" style="padding-bottom:13px">
										<button class="btn btn-success" id="submit-review">Submit Review</button>
									</div>

								</div>
							</div>
						</form>
					</div>
				</section>	
							
						
					
				<section class="col col-md-4 col-sm-12" style="padding-top:50px" >
					<div class="jumbotron" style="height:400px">
						<div class="container" style=";">
							<h3><u>Feel free to reach us.</u></h3>

							<p style="padding-top:25px"><img src="icons/email-icon.png"> <a style="text-decoration:none" href="#" ><span style="font-size:15px; margin-left:10px; color:blue;">support@codes4u.in</span></a></p>

							<p style="padding-top:25px"><img src="icons/phone-icon.png"> <a href="#"><span style="font-size:15px; margin-left:10px;color:blue">+91-8828295413</span></a></p>

							<p style="padding-top:25px"><img src="icons/twitter-icon.png"> <a href="https://twitter.com/codes4_u"><span style="font-size:15px; margin-left:10px;color:blue">twitter page</span></a></p>

						</div>
					</div>
				</section>
			</div>
		</div>
	</section>
	
	
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
var email;
if(login == 'TRUE'){
	email = "<?php if(isset($_SESSION['EMAIL'])){
	echo $_SESSION['EMAIL'];
	}else{
		echo 'xyz@youremail.com';
	} ?>";
	$(".fa-user").attr("data-toggle","");
	$(".fa-user").attr("onclick","logout()");
	$("#review-email").val(email);
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
				window.location = "contact.php";
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
					window.location = "contact.php";
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
					window.location = "contact.php";
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

$("#submit-review").click(function(e){
	e.preventDefault();
	if(login != 'TRUE'){
		alert("Login First!")
	}else{
		if($("#review").val().length > 3){
			$.ajax({
				url:'feedback-mail.php',
				method:'post',
				data:'REVIEW='+$("#review").val()+'&EMAIL='+email,
				datatype:'text',
				success:function(r){
					if(r == 1){
						alert("Feedback Sent Successfully");
						window.location = 'contact.php';
					}else{
						alert("Feedback Not Sent");
					}
				}
			});
		}else{
			alert("Too Short! Please Enter Again");
		}
	}
});

</script>

</body>
</html>