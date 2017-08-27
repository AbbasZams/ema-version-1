<!DOCTYPE HTML>
<?php
session_start();
?>

<html>
	<head>
		<title>updat package page</title> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

		<script type="text/javascript" src="assets/css/bootstrap.min.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

	<style type="text/css">
	#menu-bar{
		list-style: none;
		float: right;
		background-color:#31B0D5; 

			}
#menu-bar li{
		background-color: white;
		cursor: pointer
		
			}
#menu-bar a:hover{
	color:white;
	background-color:#31B0D5
			}
#logo img{
	width: 45%;
	
	padding-bottom: 10px;
}

.fo{
	font-family: 'Kaushan Script', cursive !important;
	color: #286E88; 
}

.form-group.fo{
	font-family: 'Kaushan Script', cursive;
}
#comp-brand img{
	height:  200px;
	border-radius: 20%; 
}

.badge-notify{
   background:red;
   position:relative;
   top: -55px;
   left: -10px;
}
.badge-notifi{
  background:red;
   position:relative;
   top: -55px;
   left: -15px;
}

.sponsor{
	color:white;
	padding-top: 20px;
}
/* Dropdown Button */
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}

	</style>
	</head>
	<body>

		<!-- Header -->
			<section id="header">
				<header>

					 							<?php
							$con=mysql_connect("localhost","root", "") or die("database connectivity error");
                            mysql_select_db("ema",$con);
								$profilepicture = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$_SESSION[email]' and `for`='profile'")or die('logo selection  query error');
								if(mysql_num_rows($profilepicture)>0){
                                 $row=mysql_fetch_array($profilepicture)
								?>

					<div><span class="image avatar"><img src="profile_pictures/<?php echo $row[0];?>" alt="" /></span></div>
					
					<?php
								}
									else{
										?>
										<div><span class="image avatar"><img src="images/ABB.png" alt="" /></span></div> 
									<?php
									}
									 $username = mysql_query("SELECT `fristname`,`lastname` FROM `user` WHERE email='$_SESSION[email]' ")or die('user selection  query error');
									$name=mysql_fetch_array($username)
									?>
					
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
					<br>
					 

				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active"> Update package</a></li>
						 <li><a href="#four">Contact EMA</a></li>
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">

							<header class="majr">

								<div class="jumbotron" style="height: 130px;
									background: #196E88;
									box-shadow: 2px 2px 2px 0px;
									box-shadow: 0px 1px 8px 0px;
									opacity:0.9; 
									overflow: hidden;">
								<div class="row">
									<div class="col-md-4" id="logo">
										
											<img src="images/emanew2.png" class="img-responsive">
										
									</div>
									<div class="col-md-8">
										
											<ul class="nav nav-tabs" id="menu-bar">
											<li><a href="profile.php">Profile</a></li>
												
												<li><a href="create-event.php">Create Event</a></li>
												<li><a href="as-organizer.php">As Organizer</a></li>
												<li><a href="home.php">Home</a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header> <!-- End of header div -->	


							<div class="row">
							<div class="col-md-12">
							<?php
							$packagename=$_GET['packagename'];
							$status=$_GET['status'];
							 
							$package = mysql_query("  SELECT * FROM `package` WHERE organizer_email='$_SESSION[email]' AND `packagename`='$packagename' and `status` = '$status'") or die(' package selection query error');

                              if(mysql_num_rows($package)>0){
                                 $rowes=mysql_fetch_array($package)
								 
									
?>
							<div class="container">
									<h3 class="fo">Edit service</h3>
									<form name="updateservice" method="post" action="update_package_php.php">
									<table>
										<tbody>
											<tr>
												<td>Package name</td><td><input type="text" name="packagename" value="<?Php echo $rowes[1];?>"></td>
											</tr>
											<tr>
												<td>Details</td><td><input type="text" name="detail" value="<?Php echo $rowes[2];?>"></td>
											</tr>
											<tr>
												<td>Price</td><td><input type="text"  name="price" value="<?Php echo $rowes[3];?>"></td>
												<td><select id="selectbasic" name="per" class="form-control">
        										<option value="<?Php echo $rowes[4];?>"><?Php echo $rowes[4];?></option>
        										<option value="per hour">Per Hour</option>
        										<option value="per day">Per Day</option>
        										<option value="per event">Per Event</option>
												<option value="per head">Per Head</option>
        										</select></td>
												<input type="hidden" name="pkname" value="<?php echo $packagename; ?>">
												<input type="hidden" name="status" value="<?php echo $status; ?>">
											</tr>
										</tbody>
									</table>
								</div>
								<button class="btn btn-success" name="edit" type="submit" style="margin-left: 100px;">Edit</button>
								</form>
							<?php
							  }
							  else{
								   echo "<script>alert('some thing goes wrong please tray again')</script>";
								echo"<script>window.open('comp-details.php','_self')</script>";
							exit();
							  }
							?>
							</div>
							</div>

                          



							</section> <!-- section one end -->

						  

						</div> <!-- Main End -->

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li> <p style="color: white;"> Developed By Muhammad Rahman and Abbas Ahmad Under Supervision of Jehangir Muhammad khan.</p>  <span style="float: right;">CopyRight &copy; 2017</span> </li>
							</ul>
						</div>
						
           
					</section>

			</div>

<script type="text/javascript">
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/css/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>