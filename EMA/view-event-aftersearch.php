<!DOCTYPE html>
<?php
session_start();
$eventid=$_GET['eventid'];
$email=$_GET['email'];
?>
<html>
<head>

	<title> view event after search </title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styling1.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/animate.css">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>

<style type="text/css">
.well{

	box-shadow: 10px 15px 25px gray;
}
#searching-people{
	border-style: inset;
	padding: 5px;
	 background-image: url('http://www.dudaite.com/i/2016/12/3d-speech-bubble-vector-wallpapers-desktop-background.png');
	 background-size: cover;
}
::-webkit-input-placeholder{
	
	font-family: 'BenchNine';
	letter-spacing: 1px;
}
 .form-control::placeholder{

	font-family: 'BenchNine';
	letter-spacing: 1px;
	}
#profile-img img{
	width: 90px;
	height: 110px;
}
#setting-btn{
	float: right; 
	margin-top: 25px; 
	border-radius: 20%;
}
#logout-btn{
	float: right;
	 margin-top: 94px;
	 border-radius: 20%;
}
#profile-btn{
	margin-bottom: 5px; 
	border-radius: 20%;
}
.follow-people{
	border-style: outset;
}
/* ,,,,,,,,,,,, scroll bar styling ,,,,,,,,,, */

::-webkit-scrollbar {
    width: 12px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #286E88; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: #286E88; 
}
/* ,,,,,,,,,,,, scroll bar styling end ,,,,,,,,,, */
#trend ul li a {
	color: black;
}
#trend ul li a:hover{
	text-decoration: none;
	color: #307C94;

}

.info1{
	font-size: 15px;
	text-transform: uppercase;

}
.profile-info{
	border-right: 2px solid gray;
	padding: 4px;
}
.preview-div{
	border-bottom: 1px dashed gray;
	margin-top: 15px;
}
.preview-div a:hover{
	text-decoration: none;
	font-size: 15px;
}

#searching-people a:hover{
	text-decoration: none;
}

.city-search input{
	width: 240px;
	position: relative;
	left: 300px;
	top: 12px;
}
.city-search button{
	position: relative;
	left: 350px;
	top: 12px;
}
.adds-div{

	border-style: inset;
	padding: 5px;
	background-size: cover;
	width: 100%;
	height: 300px;
}
</style>


</head>
<body>

<nav class="navbar navbar-default" id="custom-bootstrap-menu" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="images/emanew2.png" class="img-responsive"></a>
    </div>

    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    	

      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="explore.php">Keep Exploring</a></li>
		<li class=" pro-img"><a><span class="glyphicon glyphicon-plus"></span></a></li>
</ul><?php
$con=mysql_connect("localhost","root", "") or die("database connectivity error");
                            mysql_select_db("ema",$con);
							$date= Date('20y-m-d');
								$profile = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$_SESSION[email]' and `for`='profile'")or die('logo selection  query error');
								if(mysql_num_rows($profile)>0){
                                 $picture=mysql_fetch_array($profile);
								 
                      
			 
			}
			 ?>
         <div id="show" class="color">
							
							<div>
								<div class="col-md-4" align="center">
								<br>
 <span id="profile-img"> <a href="profile.php" ><img src="profile_pictures/<?php echo $picture[0];?>" class= "img-responsive img-rounded" align="center" height="70%" width="70%" /> </a></span>
								<br>
								
								<a href="profile.php"><button class="btn btn-default" id="profile-btn"> My Profile</button></a>
								<br>	
								</div>
								<div class="col-md-5">
								<?php
								$name_joindate=mysql_query("select fristname ,lastname,joindate from user where email='$_SESSION[email]' ") or die('name and join date query error');
								$data=mysql_fetch_array($name_joindate);
								?>
								<p style="float: left; margin-top:30px; font-size: 11px; color: white; font-weight: bold;"><?php echo $data[0];echo " ".$data[1]; ?></p>
								<p style="float: left; font-weight: bold;font-size: 11px; color: white;">Member since <span><?php echo $data[2]; ?></span></p>
									
								</div>
								<div class="col-md-3">
								<div style="position: relative;">

								<a href="setting.php"><button class="btn btn-info" id="setting-btn"> Settings</button></a>
								<br>
								<a href="logout.php"><button class="btn btn-danger" id="logout-btn"> Log Out</button></a>
								</div>
								</div>
								
    						</div>
    						
    						
    						</div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--,,,,,,,,,,,,,, navbar end ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,, -->

<section id="feed">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-3" align="center" style="">
		<div  id="trend">
				<h4> Trending Video's </h4>
				<hr>
				<div class="adds-div">
					
				</div>
		</div>

						
	</div>

		<div class="col-md-6"> 

		<div class="row">
			<div class="col-md-12">
			<br>
			<br>
			<br>
			 
				<?php
		$date= Date('20y-m-d');
      $con=mysql_connect("localhost","root","") or die(' connection query error');
 $db=mysql_select_db('ema',$con) or die('database selection  query error');
 $result=mysql_query(" select user.fristname,user.lastname,user.email,event.id,event.title,event.address ,event_schedul.fromdate,event_schedul.todate,event_schedul.time,event.category,event.discription,event.city,event.country from user join event_schedul join event where user.email=event_schedul.creater_email and event.id=event_schedul.event_id and event.id='$eventid' and user.email='$email' ") or die("Error in  event selection main query");
  if(mysql_num_rows($result)>0){
	   $rows=mysql_fetch_array($result);
		  
		  ?>
		  <div class="well explore-event">
			<div class="row">
				<div class="col-sm-4 profile-info" align="center">
					<div style="height: 100px; width: 120px; " align="center">
					<?php
							$profilephoto= mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$email' and `for`='profile'")or die('profile  picture selection  query error');
										 if(mysql_num_rows($profilephoto)>0){
										$photo=mysql_fetch_array($profilephoto)
										?>					<img src="profile_pictures/<?php echo $photo[0];?>"  class="img-responsive img-rounded" style="height: 100%; width: 100%; border-radius: 2px;  ">
										<?php
										 }
										 else{
											?>
											<img src=" "  class="img-responsive img-rounded" style="height: 100%; width: 100%; border-radius: 2px;">
											<?php
										 }
										?>
						
					</div>
					
					<br>
					<div class="name-div" align="center">
					<span style="color:#307C94 !important; font-size: 15px">Event By :</span> <br>
					<span> <b><?php echo $rows[0];echo " ".$rows[1]; ?></b> </span>
					</div>
					<div id="date-div1">
										<br>

											<div class="data-div">
												
												<span> Starts at</span> 
												<span style="color: black !important"> <?php echo $rows[6];?></span> <br>
												<!--<i style="color: black !important">2017</i>-->
											</div>
											<div class="data-div">
												<span> End at </span> 
												<span style="color: black !important"><?php echo $rows[7];?> </span> <br>
												 
												
											</div>

											<div class="data-div">
												<span>	On </span>  <span style="color: black !important"><?php echo $rows[8];?> </span>
												</div>
												
											<div><span> Catagory  <i style="color: black !important; font-size: 10px"><?php echo $rows[9];?></i></span>
											</div>
										</div>
				</div>
				<div class="col-sm-8">
    				
     						<div class="row info1">
     							<div class="col-sm-12">
        						<span><b><?php echo $rows[4];?></b></span>
        						</div>
      						</div> 
      						    
        					<div class="row">
        						<div class="col-sm-2">
									<span style="color:#286E88 !important">About </span> 
								</div>
								<div class="col-sm-10"></div>
        						<span> <?php echo $rows[10];?></span>
        					</div>
        					<div>
            					<span style="color:#307C94 ">Held at :</span>
        						<span><?php echo " ".$rows[5];?></span> <span><?php echo " ".$rows[11];?></span><span><?php echo " ".$rows[12];?></span>
      						</div>
      						<br>
      						<div>
								<?php
								$fallow = mysql_query("SELECT `fallowby_email` FROM `fallow` WHERE `fallowby_email`='$_SESSION[email]' and `fallowed_email`='$email'")or die('fallow selection  query error');
										 if(mysql_num_rows($fallow)>0){
								?>
        						<a href="un_fallow.php?email=<?php echo $email;?>&&page=<?php echo "explore.php";?>" onclick="return window.confirm('are you sure to un-fallow this user')"><button class="btn btn-warning" title="Connected with the user" style="width: 100px; font-size: 13px;"> - Connected</button>
								<?php
										 }
								else{
									?>
									<a href="fallow.php?email=<?php echo $email;?>&&page=<?php echo "explore.php";?>" onclick="return window.confirm('are you sure to follow this user')"><button class="btn btn-info" title="Connect with the user" style="width: 100px; font-size: 13px;"> + Connect</button>
									<?php
								}
								$participant = mysql_query("SELECT `participant_email` FROM `participant` WHERE `participant_email`='$_SESSION[email]' and `event_id`='$eventid'")or die('participant selection  query error');
										 if(mysql_num_rows($participant)>0){
								?>
        						<a href="#" onclick="return window.confirm('you are already join in this event')"><button class="btn btn-warning" style="width: 100px; font-size: 13px; float: right;" title="Participated" > Joined </button></a>
        						<?php
										 }
										 else{
											 ?>
											<a href="participete_in_event.php?id=<?php echo $eventid;?>&&page=<?php echo 'explore.php'; ?>&&email=<?php echo $email;?> " onclick="return window.confirm('are you sure to participate in this event')"><button class="btn btn-info" style="width: 100px; font-size: 13px; float: right;" title="Participate in Event"> +Join</button></a> 
										<?php
										}
								?>
								</div>
      						<div class="preview-div" style="color:#307C94; font-weight: bolder;  ">
            					<br>
            					What other people says about the event
      						</div>
      						
      						<br>
        						 	<!---review section start-->
										
											<?php
										 $reviewquery=mysql_query("select  * from ema.review where event_id='$eventid' ORDER BY review_id DESC LIMIT 3") or die('review jion  event selection query error');
										if(mysql_num_rows($reviewquery)>0){
										 while($review=mysql_fetch_array($reviewquery)){
										 	?>
					 							<div class="row" style="padding: 4px;">
										<div class="col-md-2 col-md-offset-1" >
										<div style="width: 80px; height: 60px; float: right; ">
										<?php
					 					$revieweremail=$review[1];	
										$reviewerprofile = mysql_query("SELECT `name` FROM  `profile_picture` WHERE email='$revieweremail' and `for`='profile'")or die('reviewer  picture  selection  query error');
										if(mysql_num_rows($reviewerprofile)>0){
										$reviewerpic=mysql_fetch_array($reviewerprofile);
									?>
											 
												<img src="profile_pictures/<?php echo $reviewerpic[0];?>" class="img-responsive img-rounded">
												<?php
											}else
											{
											?>
											<img src="" class="img-responsive img-rounded">
											<?php	
											}
											?>
										 
											
										</div>
										</div>
										<div class="col-md-9">
										<?php
										$reviewernamequery = mysql_query(" SELECT fristname,lastname  FROM `user` WHERE email='$revieweremail'")or die('reviewer  name selection  query error');
										 
										$reviewername=mysql_fetch_array($reviewernamequery);
									?>
											<div class="row">
												<div class="col-md-8">
													<strong style="font-weight: bolder; color:#307C94;position: relative; left: -10px; ">
													 <?php
													 echo $reviewername[0]." ".$reviewername[1];?>
													  </strong>
												</div>
												<div class="col-md-4">
													<span style="float: right; color: red; border-bottom: 1px solid gray;">
													<a href="view_review.php?reviewid=<?php echo $review[3];?>&&eventid=<?php echo $eventid;?>">
													 View
													 </a>
													 </span>
												</div>
											</div>
											<div class="row">
												<div>
													 <?php echo substr($review[4],0,40).
													 "<span style='color:#307C94; font-size:10px;'> Read more ... </span>";?>
												</div>
											</div>
											
										</div>
												</div>
												<?php
								}
							}else
							{
								?>
							 <span style="padding-left: 40%; color: gray; font-weight: bolder;">No  review added yet </span>
							<?php	
							}
							?>
									<!---review section end-->
									<br>
									<!--review count-->
									<div class="row">
					
					 	<div  class="col-md-12" align="center">
						  <?php
									$totalreview=mysql_query("SELECT COUNT(review) from review where  event_id='$eventid' ") or die('  event count review selection query error');
									if(mysql_num_rows($totalreview)>0){
									$count=mysql_fetch_array($totalreview)
									?>
										<span > <p id="hide-show" > <b style="color: black !important"><a href="view_review.php?reviewid=<?php echo $review[3];?>&&eventid=<?php echo $eventid;?>"> <?php echo $count[0];?> reviews </a></b></p></span>
										<?php
										}
									else{
									?>
										<span><p id="hide-show">  <b  style="color: black !important"> 0 review </b><p></span>
									<?php
									}
									?>
					</div>
					 
					  
				</div>		

				</div>
			</div>
			</div>
			<?php
	  
  }
    else{
	 ?> <center>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <br>
	 <div class="well">
	       <font size="6"  color="gray"> Oop's no event yet.
			</font>
			</div>
			</center>
			<?php
  }

  ?>
			</div>
			
		</div>

		</div>



		<div class="col-md-3" align="center">
		
  		</div>


		</div>
	</div>


</section>
<br>
<br>
<br>
<br>
<br>
<br>

<section id="footer">
						<div class="container-fluid">
								
								  <span style="float: right;">CopyRight &copy; 2017</span> 
						</div>
</section>




<script type="text/javascript">
				
				$('.pro-img').click(function() {
				$(this).next().slideToggle('500');
			$(this).find('span').toggleClass('glyphicon-plus glyphicon-minus');
			$('#show').css('visibility', ($('#show').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("fast");
    
    
});

			</script>



</body>
</html>