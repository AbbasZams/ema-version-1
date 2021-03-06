<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>

	<title>explore page</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styling1.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/animate.css">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>

<style type="text/css">
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
#nameerror{
 color:red;
 font-size:90%; !important;
 }
 #namesuccess{
 color:green;
 font-size:90%; !important;
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
        <li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="#">Explore</a></li>
        <li><a href="organizers.php">Organizer's</a></li>
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
	<div class="col-md-2" style="border-right: 2px solid #AAAAAA;">
		<div  id="trend">
				<h4> Trending Events </h4>
				<hr>
				<div class="row">
					<div class="col-sm-12">
						<div class="well" style="width: 100%; height: 300px;">
							<marque> No events yet...</marque>
						</div>
					</div>
				</div>
		</div>

		<br>
			<hr>				
	</div>

		<div class="col-md-6"> 

		<div class="row">
			<div class="col-md-12">
				<?php
		$date= Date('20y-m-d');
      $con=mysql_connect("localhost","root","") or die(' connection query error');
 $db=mysql_select_db('ema',$con) or die('database selection  query error');
 $result=mysql_query(" select user.fristname,user.lastname,user.email,event.id,event.title,event.address ,event_schedul.fromdate,event.chargingtype from user join event_schedul join event where user.email=event_schedul.creater_email and event.id=event_schedul.event_id and event_schedul.todate >='$date' ") or die("Error in  event selection main query");
  if(mysql_num_rows($result)>0){
	  while($rows=mysql_fetch_array($result)){
		  $eventid= $rows[3];
		  $email=$rows[2];
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
											<img src="images/ABB.png"  class="img-responsive img-rounded" style="height: 100%; width: 100%; border-radius: 2px;">
											<?php
										 }
										?>
						
					</div>
					
					<br>
					<div class="name-div" align="center">
					<span style="color:#307C94 !important; font-size: 15px">Event By :</span> <br>
					<span> <b><?php echo $rows[0];echo " ".$rows[1]; ?></b> </span>
					</div>
				</div>
				<div class="col-sm-8">
						<div class="row">
    				
     						<div class="info1 col-sm-6">
        						<span><b><?php echo $rows[4];?></b></span>
      						</div> 
      						 
      						<div class="col-sm-6" align="right">
														<?php
														if($rows[7]=='paid'){
														?>

															<a href="workstream.php?id=<?php echo $rows[3];?>&&email=<?php echo $email;?>&&page=<?php echo 'explore.php'?>"> 
															<button class="btn btn-info" style="border-radius: 50%; margin-left: 55px;" title="Bid its paid">B</button>
															</a>
															<?php
														}
															?>
														</div>
														</div>
      						    
        					<div>
        						<span>Starts at :</span>
        						<span><?php echo $rows[6];?></span>
        					</div>
        					<div>
            					<span>Held at :</span>
        						<span><?php echo $rows[5];?></span>
      						</div>
      						<div class="preview-div">
            					<span><a href="view-event-aftersearch.php?eventid=<?php echo $eventid;?>&&email=<?php echo $email;?>">Preview Event...</a></span>
            					<br>
      						</div>
      						
      						<br>
        						<div>
								<?php
								$fallow = mysql_query("SELECT `fallowby_email` FROM `fallow` WHERE `fallowby_email`='$_SESSION[email]' and `fallowed_email`='$email'")or die('fallow selection  query error');
										 if(mysql_num_rows($fallow)>0){
								?>
        						<a href="un_fallow.php?email=<?php echo $email;?>&&page=<?php echo "explore.php";?>" onclick="return window.confirm('are you sure to un-fallow this user')"><button class="btn btn-warning" style="font-size: 14px; width: 90px;"> Connected</button>
								<?php
										 }
								else{
									?>
									<a href="fallow.php?email=<?php echo $email;?>&&page=<?php echo "explore.php";?>" onclick="return window.confirm('are you sure to follow this user')"><button class="btn btn-info" style="font-size: 14px; width: 90px;"> + Connect</button>
									<?php
								}
								/*$participant = mysql_query("SELECT `participant_email` FROM `participant` WHERE `participant_email`='$_SESSION[email]' and `event_id`='$eventid'")or die('participant selection  query error');
										 if(mysql_num_rows($participant)>0){
								?>
        						<a href="#" onclick="return window.confirm('you are already join in this event')"><button class="btn btn-warning" style="font-size: 14px; width: 90px; float: right;"> Joined </button></a>
        						<?php
										 }
										 else{
											 ?>
											<a href="participete_in_event.php?id=<?php echo $eventid;?>&&page=<?php echo 'explore.php'; ?>&&email=<?php echo $email;?> " onclick="return window.confirm('are you sure to participate in this event')"><button class="btn btn-info" style="font-size: 14px; width: 90px; float: right;"> +Join</button></a> 
										<?php
										}*/

										 
												if($rows[7]=='paid'){
													$participant = mysql_query("SELECT `participant_email` FROM `participant` WHERE `participant_email`='$_SESSION[email]' and `event_id`='$eventid'")or die('participant selection  query error');
										 if(mysql_num_rows($participant)>0){
												?>
													 <span> <a href="#"  onclick="return window.confirm('you are already purchased ticket of  this event')"><button class="btn btn-warning" style="float: right; font-size: 14px; width: 80px;"> Purchased</button></a>
												</span>
												<?php
										 }
										 else{
											 ?>
											  <span> <a href="ticketsapge.php?id=<?php echo $eventid;?>&&page=<?php echo 'explore.php';?>"  onclick="return window.confirm('You want to purchased ticket of this Event??')"> <button class="btn btn-info " style="font-size: 14px; width: 80px; float: right;">Purchase</button></a>
												</span>
										 <?php
										 }
										}
										else{
												$participant = mysql_query("SELECT `participant_email` FROM `participant` WHERE `participant_email`='$_SESSION[email]' and `event_id`='$eventid'")or die('participant selection  query error 2');
										 if(mysql_num_rows($participant)>0){
												?>
													 <span> <a href="#"  onclick="return window.confirm('you are already join in this event')"><button class="btn btn-warning" style="font-size: 14px; width: 80px; float: right;"> Joined</button></a>
												</span>
												<?php
										 }
										 else{
											 ?>
											  <span> <a href="participete_in_event.php?id=<?php echo $eventid;?>&&page=<?php echo 'explore.php';?>"  onclick="return window.confirm('You want to participate in this Event')"> <button class="btn btn-info" style="font-size: 14px; width: 80px; float: right;">+ Join</button></a>
												</span>
										 <?php
										 }
											}	 
												
								?>
								</div>
				</div>
			</div>
			</div>
			<?php
	  }
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



		<div class="col-md-4">
		<h4> Search  by Events  Title</h4>
		<hr>
		<div id="searching-people">
			 
 <form method="post" name="searchform" onsubmit=" return validatedata();">
			 
<div class="input-group" style="z-index: 0; margin: 5px;">
     			<input type="text" class="form-control" name="searchevent" oninput="namevalidat();" placeholder="Search Events..." required id="name">
      				<span class="input-group-btn">
        				<button class="btn btn-default" name="searchbtn" type="submit">Go</button>
      				</span>
    		</div><!-- /input-group -->
    		<span id="nameerror"></span><span id="namesuccess"></span>
    		</form>
    		<br>
    		<?php
      				if(isset($_POST['searchbtn'])){
      					$names=$_POST['searchevent'];
      					if($names=="")
      					{
      						echo "<script>alert('fill search fiel then click')</script>";
								 	
							exit();
      					}
      					else{
      					 $search=mysql_query(" select user.fristname,user.lastname,user.email,event.id,event.title ,event_schedul.fromdate from user join event_schedul join event where user.email=event_schedul.creater_email and event.id=event_schedul.event_id and event_schedul.todate >='$date' and event.title like'$names%' ") or die("Error in search  event selection  query");
      					 
  if(mysql_num_rows($search)>0){
	  while($searchevent=mysql_fetch_array($search)){
		  $eventid= $searchevent[3];
		  $email=$searchevent[2];


?>



		  <div class="row event-search">
    			<a href="#">
    			<div class="col-sm-4" align="center" style="color: black !important; ">
    				<div style="width:60px; height: 50px;">
    				<?php

    					$searcheventpic = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$searchevent[2]' and `for`='profile'")or die('profile pic selection  query error');
										 if(mysql_num_rows($searcheventpic)>0){
										$searchpic=mysql_fetch_array($searcheventpic);
										?>
    					<img src="profile_pictures/<?php echo $searchpic[0];?>" style="width: 100%; height: 100%">
    					<?php
    				}
    				else{
    					?>
    					<img src="" style="width: 100%; height: 100%">
    					<?php
    				}
    				?>
    				</div>
    				<div>
    					<span style="color:#307C94 !important; ">Event By </span> <br>
    					<span><?php echo $searchevent[0]." ".$searchevent[1];?></span> 
    				</div>
    			</div>
    			<div class="col-sm-8">
    				<div>
    					<span> <b> <?php echo $searchevent[4];?></b> </span>
    				</div>
    				<div style="color: black !important">
    					<span>Starts at : </span> <span> <?php echo $searchevent[5];?> </span> <br>
    				
    				</div>
    				<span style="padding-left: 140px;"><a href="view-event-aftersearch.php?eventid=<?php echo $eventid;?>&&email=<?php echo $email;?>"> Click To Preview </a></span>
    			</div>
    			</a>
    		</div>
    		<hr>
<?php
			 

								 }
							 }

      					else{
      						echo "No result found..!";
      					}
      				}

      				}
      				?>
    		
		<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
	

  		</div ><!-- /.col-md-4-->
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

			<!--for search viladation End -->
<script type="text/javascript">
	//name validation
function namevalidat(){
 var nameReg = /^[A-Za-z ]+$/;
var name = $('#name').val();
var massage = "";
	  if(nameReg.test(name)){
	  massage= " name is valid";
            $("#namesuccess").html(massage); 
			 $("#nameerror").html(''); 
			  
        }
		if(!nameReg.test(name)){
	  massage= "name is Invalid";
            $("#nameerror").html(massage); 
			 $("#namesuccess").html(''); 
			  
        }
		if(name==""){
	  $("#nameerror").html(''); 
	 $("#namesuccess").html(''); 
	  
	 }
}
</script>
<script type="text/javascript">
	//form validation
	function validatedata(){
  var searchname = document.getElementById('name').value;

  var nameReg = /^[A-Za-z]+$/;
  if(searchname==""){
	   
            
			alert(' search name  is required');
			return false;
        }
        if(!searchname.match(nameReg)){
		alert('In  search name only letter allowed');
	   return false;
             
	}
	else{
		return true;
	}
}
</script>



</body>
</html>