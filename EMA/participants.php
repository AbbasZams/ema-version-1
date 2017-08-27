<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
		<title>participants</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" type="text/css" href="assets/css/jquery.rateyo.min.css">
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
		
		
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
#logo{
}
#logo img{
	width: 45%;
	
	padding-bottom: 10px;
}

.view-more{
	color:#39B3D7;
	text-decoration: none;

}
.view-more:hover{
	color:#39B3D7; 
}
.fo{
	font-family: 'Kaushan Script', cursive !important;
	color: #286E88; 
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
						
						<li class="activ"><a href="#four">Requests For Joining </a></li>
					</ul>
				</nav>
				
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">

							<header class="majr">

								<div class="jumbotron top-menu-div">
								<div class="row">
									<div class="col-md-3" id="logo">
										
											<img src="images/emanew2.png" class="img-responsive">
										
									</div>
									<div class="col-md-9">
										
											<ul class="nav nav-tabs" id="menu-bar">
											<li><a href="profile.php">Profile</a></li>
											<li><a href="create-event.php">Create Event</a></li>
												<li><a href="as-organizer.php">As Organizer</a></li>
												<li><a href="comp-details.php">Company Details</a></li>
												<li><a href="home.php">Home</a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header>
<!--................................... End of header div.............................. -->						</section>

										
									


							
									
								</div>
								<!-- Four -->
							<section id="four">
							<div  class="row">
							<div class="col-md-12">
								<div class="container table-responsive">
								<?php
									$id=$_GET['id'];
									 $participants = mysql_query("SELECT  user.fristname,user.lastname,user.email FROM user join `participant` WHERE user.email=participant.participant_email and participant.event_id='$id'")or die('participants selection  query error');
									if(mysql_num_rows($participants)>0){
									 ?>
								
									<table class="table table-hover">
									<?php
									while($rowss=mysql_fetch_array($participants)){
									$email=	$rowss[2];
									 
									?>
    <tbody>
      <tr>
	  <?php
	  $picture=mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$email' and `for`='profile'") or die(' participant picture selection querr error');
	  if(mysql_num_rows($picture)>0){
		  $partphoto=mysql_fetch_array($picture)
		  ?>
		  					<td><img src="profile_pictures/<?php echo $partphoto[0];?>"  class="img-responsive img-rounded" style="height: 80px; width: 80px;border-radius: 20%;  "></td>
		  <?php
	  }
	  else{
	  ?>
      	<td><i class="fa fa-picture-o fa-2x" aria-hidden="true"></i></td>
		<?php
	  }
		?>
        <td style="padding:25px"><?php echo $rowss[0];?></td>
        <td style="padding:25px"><?php echo $rowss[1];?></td>
        <td style="padding:25px"><?php echo $rowss[2];?></td>
        <td style="padding:25px"> <a href="reject_participant.php?id=<?php echo $id;?> && email=<?php echo $email;?>" onclick="return window.confirm('are you sure to reject this participate in this event')"> 
		<button><i class="fa fa-times" aria-hidden="true"></i></button></a>
		</td>
      </tr>
       </tbody>
	   <?php
		}
	   ?>
  </table>
  <?php
}
else{
	?>
	<p><font size="5" color="green">
	<center> There is no participants in this event</center>
	</font>
	</p>
	<?php
}
  ?>
								</div>
								</div>
								</div>
							</section>
							</div>

							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li> <p style="color: white;"> Developed By Muhammad Rahman and Abbas Ahmad Under Supervision of Jehangir Muhammad khan.</p>  <span style="float: right;">CopyRight &copy; 2017</span> </li>
							</ul>
						</div>
						
           
					</section>

			

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.rateyo.min.js"></script>

		<!-- Scripts -->


			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>