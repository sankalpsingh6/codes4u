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

	<div class="dropdown" style="position:fixed;bottom:28px;right:0px;z-index:99999;">
		<img class="btn dropdown-toggle" src="icons/fixed-botton.png" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

	    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
			<a class="dropdown-item" href="#"><input type="checkbox" id="check-c" onclick="checkC()" checked>C-Window</a>
			<a class="dropdown-item" href="#"><input type="checkbox" id="check-cpp" onclick="checkCpp()" checked>C++-Window</a>
			<a class="dropdown-item" href="#"><input type="checkbox" id="check-java" onclick="checkJava()" checked>Java-Window</a>
			<a class="dropdown-item" href="#"><input type="checkbox" id="check-py" onclick="checkPy()" checked>Python-Window</a>
	    </div>
		
	</div>

	<!-- Modal FullScreen -->
	
	<div class="modal fade" id="program-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
							<h4 class="modal-title" id="fullscreen-title">Program</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body" style="height:460px;"><textarea id="fullscreen-text" style="resize:none;width:100%;height:100%;" disabled></textarea></div>
			</div>
		</div>
	</div>

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
									<li class="active"><a href="program-list.php">Programs</a></li>
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
	
	<!-- Question -->
	
	<div class="container-fluid" style="margin-top:135px">
		<div class="row text-center" style="background-color:#ebebe0;">
			<span style="height:auto;margin-left:25px;margin-right:25px;">
				<p style="font-size:18px; color:black;"><strong><?php $query = "SELECT title FROM programs WHERE file='".$_SESSION['FILENAME']."'"; $result = mysqli_query($cid,$query); $row = mysqli_fetch_array($result); echo str_replace('*','',$row['title']);?><br></strong></p>
			</span>
		</div>
	</div>
	
	<!--Programs-->
	<center><div class="container-fluid" style="margin-top:5px;height:auto;">			
			<div class="row" style="height:auto">
				<div class="col-sm-3" id="c-code-div">
					<div class="card cards">
						<div class="card-header">
							<h4 class="float-left">.c</h4>
							<button id="close-c" style="background-color:#ffffff00;border-color:#ffffff00;" type="button" class="float-right"><img src="icons/close.png"></img></button>
							<button id="fullscreen-c" style="background-color:#ffffff00;border-color:#ffffff00;" class="float-right" data-toggle="modal" data-target="#program-modal"><img src="icons/fullscreen.png"></img></button>
							<button onclick="downloadC()" style="background-color:#ffffff00;border-color:#ffffff00;" type="button" class="float-right"><img src="icons/download.png"></img></button>
						</div>
						<div class="card-body"><textarea id="c-code" class="panel" disabled></textarea></div>
					</div>
				</div>
				<div class="col-sm-3" id="cpp-code-div">
					<div class="card cards">
						<div class="card-header">
							<h4 class="float-left">.cpp</h4>
							<button id="close-cpp" style="background-color:#ffffff00;border-color:#ffffff00;" type="button" class="float-right"><img src="icons/close.png"></img></button>
							<button id="fullscreen-cpp" style="background-color:#ffffff00;border-color:#ffffff00;" class="float-right" data-toggle="modal" data-target="#program-modal"><img src="icons/fullscreen.png"></img></button>
							<button onclick="downloadCpp()" style="background-color:#ffffff00;border-color:#ffffff00;" type="button" class="float-right"><img src="icons/download.png"></img></button>
						</div>
						<div class="card-body"><textarea id="cpp-code" class="panel" disabled></textarea></div>
					</div>
				</div>
				<div class="col-sm-3" id="java-code-div">
					<div class="card cards">
						<div class="card-header">
							<h4 class="float-left">.java</h4>
							<button id="close-java" style="background-color:#ffffff00;border-color:#ffffff00;" type="button" class="float-right"><img src="icons/close.png"></img></button>
							<button id="fullscreen-java" style="background-color:#ffffff00;border-color:#ffffff00;" class="float-right" data-toggle="modal" data-target="#program-modal"><img src="icons/fullscreen.png"></img></button>
							<button onclick="downloadJava()" style="background-color:#ffffff00;border-color:#ffffff00;" type="button" class="float-right"><img src="icons/download.png"></img></button>
						</div>
						<div class="card-body"><textarea id="java-code" class="panel" disabled></textarea></div>
					</div>
				</div>
				<div class="col-sm-3" id="py-code-div">
					<div class="card cards">
						<div class="card-header">
							<h4 class="float-left">.py</h4>
							<button id="close-py" style="background-color:#ffffff00;border-color:#ffffff00;" type="button" class="float-right"><img src="icons/close.png"></img></button>
							<button id="fullscreen-py" style="background-color:#ffffff00;border-color:#ffffff00;" class="float-right" data-toggle="modal" data-target="#program-modal"><img src="icons/fullscreen.png"></img></button>
							<button onclick="downloadPy()" style="background-color:#ffffff00;border-color:#ffffff00;" type="button" class="float-right"><img src="icons/download.png"></img></button>
						</div>
						<div class="card-body"><textarea id="py-code" class="panel" disabled></textarea></div>
					</div>
				</div>
			</div>
		</div></center>
		
	<!-- Output -->
		
	<center><h4 style="margin-top:25px;">Output</h4><center>
	<div class="container-fluid">
		<textarea id="output-area" style="min-height:150px;height:auto;width:100%;resize:none;padding:10px;" disabled></textarea>
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

var cbox = [1,1,1,1];
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
				window.location = "all-language-window.php";
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
					window.location = "all-language-window.php";
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
					window.location = "all-language-window.php";
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

var filename = '<?php $name = $_SESSION['FILENAME']; echo $name; ?>';

if($(window).width() > 590)
setCodeAreaSizef();
else
setCodeAreaSizes();

setCode(filename+'.c','c-code');
setCode(filename+'.cpp','cpp-code');
setCode(filename+'.java','java-code');
setCode(filename+'.py','py-code');
setCode(filename+'.opt','output-area');

function setCodeAreaSizef(){
	var t = [4.460143,3.251765,2.108943,1.026589];
	var w = $(window).width();
	w = w / t[4 - checkOne()];
	$('.cards').css('height','400px');
	$('.cards').css('margin-left','-13px');
	$('.cards').css('width',w+25);

	$('.panel').css('width',w+24);
	$('.panel').css('resize','none');
	$('.panel').css('height','344px');
	$('.panel').css('padding','10px');
	$('.panel').css('margin-left','-20px');
	$('.panel').css('margin-top','-20px');			
}

function setCodeAreaSizes(){
	var w = $(window).width();
	$('.cards').css('height','400px');
	$('.cards').css('margin-left','-13px');
	$('.cards').css('width',w-23);

	$('.panel').css('width',w-24);
	$('.panel').css('resize','none');
	$('.panel').css('height','344px');
	$('.panel').css('padding','10px');
	$('.panel').css('margin-left','-20px');
	$('.panel').css('margin-top','-20px');			
}

function setCode(file,tid){
	$.ajax({
		url:'get-code.php',
		method:'post',
		data:'data='+file,
		datatype:'text',
		success:function(r){
		$("#"+tid).val(r);
		}
	});
}

$("#close-c").click(function(){
	$("#check-c").prop('checked','');
	checkC();
});
	
$("#close-cpp").click(function(){
	$("#check-cpp").prop('checked','');
	checkCpp();
});
	
$("#close-java").click(function(){
	$("#check-java").prop('checked','');
	checkJava();
});
	
$("#close-py").click(function(){
	$("#check-py").prop('checked','');
	checkPy();
});




function checkC(){
	if($("#check-c").prop('checked')){
		cbox[0] = 1;
	}else{
		if(checkOne() != 1){
			cbox[0] = 0;
						
		}else{
			$("#check-c").prop('checked',true);
			alert("Cannot Uncheck");
		}
					
	}
	modifyLayout();
}
			
			
function checkCpp(){
	if($("#check-cpp").prop('checked')){
		cbox[1] = 1;
	}else{
		if(checkOne() != 1){
			cbox[1] = 0;
		}else{
			$("#check-cpp").prop('checked',true);
			alert("Cannot Uncheck");
		}
					
	}
	modifyLayout();
}
			
			
function checkJava(){
	if($("#check-java").prop('checked')){
		cbox[2] = 1;
	}else{
		if(checkOne() != 1){
			cbox[2] = 0;
		}else{
			$("#check-java").prop('checked',true);
			alert("Cannot Uncheck");
		}
	}
	modifyLayout();
}
			
			
function checkPy(){
	if($("#check-py").prop('checked')){
		cbox[3] = 1;
	}else{
		if(checkOne() != 1){
			cbox[3] = 0;
		}else{
			$("#check-py").prop('checked',true);
			alert("Cannot Uncheck");
		}
			
	}
	modifyLayout();
}
			
function modifyLayout(){
	var i;
	var t = ['c-code-div','cpp-code-div','java-code-div','py-code-div'];
	var n = checkOne();
	n = 12/n;
	for(i = 0; i < 4; i++){
		if(cbox[i] == 0){
			$('#'+t[i]).prop('hidden','true');
		}else{
			$('#'+t[i]).attr('class','col-sm-'+n);
			if($('#'+t[i]).prop('hidden')){
				$('#'+t[i]).prop('hidden','');
			}
		}
	}
	if($(window).width() > 590)
		setCodeAreaSizef();
	else
		setCodeAreaSizes();
}
			
function checkOne(){
	var c,i;
	c = 0;
	for(i = 0; i < 4; i++){
		if(cbox[i] == 1)
		c++;
	}
	return c;
}

$("#fullscreen-c").click(function(){
	$("#fullscreen-title").html(filename+".c");
	setCode(filename+".c",'fullscreen-text');
});
			
$("#fullscreen-cpp").click(function(){
	$("#fullscreen-title").html(filename+".cpp");
	setCode(filename+".cpp",'fullscreen-text');
});
			
$("#fullscreen-java").click(function(){
	$("#fullscreen-title").html(filename+".java");
	setCode(filename+".java",'fullscreen-text');
});
			
$("#fullscreen-py").click(function(){
	$("#fullscreen-title").html(filename+".py");
	setCode(filename+".py",'fullscreen-text');
});

function downloadC(){
	$.ajax({
		url:"set-session.php",
		method:"post",
		data:"varname=EXTENSION&vardata=.c",
		datatype:"text",
		success:function(){
			window.location="file-download.php";
		}
	});
}

function downloadCpp(){
	$.ajax({
		url:"set-session.php",
		method:"post",
		data:"varname=EXTENSION&vardata=.cpp",
		datatype:"text",
		success:function(){
			window.location="file-download.php";
		}
	});
}


function downloadJava(){
	$.ajax({
		url:"set-session.php",
		method:"post",
		data:"varname=EXTENSION&vardata=.java",
		datatype:"text",
		success:function(){
			window.location="file-download.php";
		}
	});
}

function downloadPy(){
	$.ajax({
		url:"set-session.php",
		method:"post",
		data:"varname=EXTENSION&vardata=.py",
		datatype:"text",
		success:function(){
			window.location="file-download.php";
		}
	});
}

</script>

</body>
</html>