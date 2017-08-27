<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>

	<title>home page</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styling1.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/animate.css">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>

<style type="text/css">


.default-well{
	margin-top : 164px;
}

.trend ul li a {
	color: black;
}
.trend ul li a:hover{
	text-decoration: none;
	color: #307C94;
	
}

.top-person{
	border-style: groove;
	margin: 1px;
}

#searching-people{
	border-style: inset;
	padding: 5px;
	 background-image: url('https://s-media-cache-ak0.pinimg.com/736x/e9/0e/c5/e90ec5cfcb18fca6f4d20bd63bd7d3bd--dance-class-lets-dance.jpg');
	 background-size: cover;
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


#date-div1{
	width: 130px;
	height: 130px;
	font-weight: bold;
	color: #286E88 !important;
	margin-top: 5px;
	margin-left: 0px;
	font-size: 9px;
	padding: 1px;
	letter-spacing: 1px;

}
#pic-div{
	width: 120px;
	height: 120px;
}
#pic-div img{
	width: 100%;
	height: 100%;
}
#description-div{
	width: 100%;
	height: auto;
	border-bottom: 2px solid gray;

}
#description-div a button{
	margin-top: px;
}
::-webkit-input-placeholder{
	font-family: 'BenchNine';
	letter-spacing: 1px;
}
 .form-control::placeholder{
	font-family: 'BenchNine';
	letter-spacing: 1px;
	}
.data-div{
	border-bottom: 1px solid gray;
	margin-top: 1px;
}
.data-div1{
	border-bottom: 1px solid gray;
}

/*..,,,,, comments css ,,,,,,,*/

#comments-div{
	 
	z-index: 999;


	border-top : none;
	border-right: none;
	
}
.single-comment{
}
.hide-show{
	cursor: pointer;
}
.reply{
	float: right;
	cursor: pointer;
	color: #286E88 !important;
} 
.image-name{

	width: auto;
	margin-left: 5px;
}
.image-name img{
	margin-left: 10px;
}
.search-name{
	color:#286E88;
	font-weight: bolder;
	font-size: 10px;
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

      	
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="explore.php">Explore</a></li>
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
         <div id="show" class="color"  >
							
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
		<div  class="trend">
				<h4> Catagories </h4>
				<hr>
				<div class="row">
					<div class="col-sm-12">
						<ul class="list-unstyled" style="color: black;">
							<li> &nbsp; &nbsp;<a href="#">Birthdays</a> </li>
							<li> &nbsp; &nbsp;<a href="#">Ceremonies</a> </li>
							<li> &nbsp; &nbsp;<a href="#">Concerts </a> </li>
							<li> &nbsp; &nbsp;<a href="#">Conferences</a> </li>
							<li> &nbsp; &nbsp;<a href="#">Meetings</a> </li>
							<li> &nbsp; &nbsp;<a href="#">Parties</a> </li>
							<li> &nbsp; &nbsp;<a href="#">Sports</a> </li>
							<li> &nbsp; &nbsp;<a href="#">Webinars</a> </li>
							<li> &nbsp; &nbsp;<a href="#">Workshops</a> </li>
						</ul>
					</div>
				</div>
		</div>

		<br>
			<hr>		
			
		
	</div>

		 <div class="col-md-6">
		<?php
       
  $run=mysql_query("select fallowed_email from fallow where fallowby_email='$_SESSION[email]'") or die(' selection query error');
  
  if(mysql_num_rows($run)>0){
	  while($row=mysql_fetch_array($run))
		  
{
	$fallowed_email=$row[0];
	 
   $result=mysql_query(" select user.fristname,user.lastname,event.id, event.title,event.category,event.discription,event.country,event.city,event.address, event_schedul.fromdate,event_schedul.todate,event_schedul.time,event.chargingtype from user join event_schedul join event where user.email='$fallowed_email' and event_schedul.creater_email='$fallowed_email'  and event.id=event_schedul.event_id and event_schedul.fromdate >'$date' ORDER BY event_schedul.fromdate ASC") or die("Error in 1 query");
  if(mysql_num_rows($result)>0){
	  while($rows=mysql_fetch_array($result)){
	 $eventid= $rows[2];
	  ?>
		 <div class="well">
			<div class="row">
              <div class="col-md-12 ">
				 <div class="row">
				 
					<div class="col-sm-3">
										 <div id="pic-div">
										<?php
										 $profilephoto = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$fallowed_email' and `for`='profile'")or die('logo selection  query error');
										 if(mysql_num_rows($profilephoto)>0){
										$photo=mysql_fetch_array($profilephoto)
										?>
										 <img src="profile_pictures/<?php echo $photo[0];?>" class="img-responsive">
										<?php
										 }
										 else{
											?>
											<img src="images/ABB.png" class="img-responsive img-circle">
											<?php
										 }
										?>
										</div>
										<br>
										<p align="center" style="top: -20px; color: #307C94; font-family: 'Kaushan Script', cursive" class="sponsor">Event By: <br>
										<span align="center" style="color: black"><?php echo $rows[0];echo " ".$rows[1]; ?></span> </p>
										
										<div id="date-div1">
										

											<div class="data-div">
												
												<span> Starts at</span> 
												<span style="color: black !important"><?php echo $rows[9];?> </span> <br>
												<!--<i style="color: black !important">2017</i>-->
											</div>
											<div class="data-div">
												<span> End at </span> 
												<span style="color: black !important"><?php echo $rows[10];?> </span> <br>
												<!--<i style="color: black !important">2017</i>-->
												
											</div>

											<div class="data-div">
												<span>	On </span>  <span style="color: black !important"><?php echo $rows[11];?></span>
												</div>
												
											<div><span> Catagory  <i style="color: black !important; font-size: 10px"><?php echo $rows[4];?></i></span>
											</div>
										</div>
										<br>

						</div>
					
						 
						<div class="col-sm-9 ">
												 
												<div id="description-div">
													<div class="row">
														<div class="col-sm-9">
															<span style="color: black !important; font-size: 18px; text-transform: uppercase;">
																<?php echo $rows[3];?>
															</span>
														</div>
														<div class="col-sm-3">
														<?php
														if($rows[12]=='paid'){
														?>

															<a href="workstream.php?id=<?php echo $rows[2];?>&&email=<?php echo $fallowed_email;?>&&page=<?php echo 'home.php' ?>"> 
															<button class="btn btn-info" style="border-radius: 50%; margin-left: 55px;" title="Bid its paid">B</button>
															</a>
															<?php
														}
															?>
														</div>
													</div>
													<br>
													
														<div class="row">
															<div class="col-sm-2">
																<span style="color:#286E88 !important">About </span> 
															</div> 
															<div class="col-sm-10">
																<span> <?php echo $rows[5];?></span>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-2">
																<span style="color:#286E88 !important">Held at  </span>
															</div> 
															<div class="col-sm-10">
																<span><?php echo $rows[8];?></span>
															</div>
														</div>
													
												
												<br>
												
												<?php
												if($rows[12]=='paid'){
													$participant = mysql_query("SELECT `participant_email` FROM `participant` WHERE `participant_email`='$_SESSION[email]' and `event_id`='$eventid'")or die('participant selection  query error');
										 if(mysql_num_rows($participant)>0){
												?>
													 <span> <a href="#"  onclick="return window.confirm('you are already purchased ticket of  this event')"><button class="btn btn-warning" style="float: right; font-size: 14px; width: 80px;"> Purchased</button></a>
												</span>
												<?php
										 }
										 else{
											 ?>
											  <span> <a href="ticketsapge.php?id=<?php echo $eventid;?>&&page=<?php echo 'home.php';?>"  onclick="return window.confirm('You want to purchased ticket of this Event??')"> <button class="btn btn-info " style="font-size: 14px; width: 80px; float: right;">Purchase</button></a>
												</span>
										 <?php
										 }
										}
										else{
												$participant = mysql_query("SELECT `participant_email` FROM `participant` WHERE `participant_email`='$_SESSION[email]' and `event_id`='$eventid'")or die('participant selection  query error');
										 if(mysql_num_rows($participant)>0){
												?>
													 <span> <a href="#"  onclick="return window.confirm('you are already join in this event')"><button class="btn btn-warning" style="font-size: 14px; width: 80px; float: right;"> Joined</button></a>
												</span>
												<?php
										 }
										 else{
											 ?>
											  <span> <a href="participete_in_event.php?id=<?php echo $eventid;?>&&page=<?php echo 'home.php';?>"  onclick="return window.confirm('You want to participate in this Event')"> <button class="btn btn-info" style="font-size: 14px; width: 80px; float: right;">+ Join</button></a>
												</span>
										 <?php
										 }
											}	?>
												
												<br>
												<br>
												</div>

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
											 
												<img src="profile_pictures/<?php echo $reviewerpic[0];?>" class="img-responsive img-rounded" style="width: 80px; height: 60px; float: right; " >
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
										<div class="row">
											<div class="col-sm-12">
											<form method="post" name="jion" action="review.php">
    											<div class="input-group">
      												<input type="text" class="form-control" name="review" placeholder="Review ..." required>
     												 <span class="input-group-btn">
        												<button class="btn btn-default" type="submit" name="do" style="padding: 16px;" ><i class="fa fa-paper-plane-o fa-lg" aria-hidden="true"></i></button>
     												</span>
													<input type="hidden" name="eventid" value="<?php echo $eventid;?>">
													<input type="hidden" name="page" value="<?php echo "home.php";?>">
													<input type="hidden" name="createremail" value="<?php echo $fallowed_email;?>">
    											</div><!-- /input-group -->
												</form>
											 
  											</div><!-- /.col-sm-12 -->
										</div><!-- /.row -->

										
										<br>


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


				</div>
			
				
			 

			

				
				</div>
				<?php


  
  
  
	  }
  }
  }
}
  else{
	 ?> <center>
			<div class="well default-well">
			<br>
	       <font size="7"  color="gray"> OOP'S! No Activity Yet ...
			</font>
			<br>
			<br>
			</div>
			</center>
					<br>
			<br>
			<br>
			<br>
					<br>
			<br>
			<br>		<br>
			<br>
			<br>
			
			<?php
  }
 
  ?>

</div>

		 <div class="col-md-4">
		 <h4>Find people</h4>
		 <hr>
		<div id="searching-people">
		<form method="post" name="searchform" onsubmit=" return validatedata();">
			 
<div class="input-group" style="z-index: 0; margin: 5px;">
     			<input type="text" class="form-control" name="searchpeople" oninput="namevalidat();" placeholder="Search by name..." required id="name"> 
      				<span class="input-group-btn">
        				<button class="btn btn-default" type="" name="searchbtn">Go</button>
      				</span>
      				 
    		</div><!-- /input-group -->
    		<span id="nameerror"></span><span id="namesuccess"></span>
    		</form>
    		<?php
      				 if(isset($_POST['searchbtn'])){
      					$names=$_POST['searchpeople'];
      					if($names==""){
      						echo "<script>alert('fill search fiel then click')</script>";
								 	
							exit();
      					}
      					else{
      					$queryname=mysql_query("SELECT fristname,lastname,email FROM `user` WHERE fristname like '$names%'")or die('name selection error in queryname');
      					if(mysql_num_rows($queryname)>0){
      						while($peoplename=mysql_fetch_array($queryname)){

 								$profilepic = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$peoplename[2]' and `for`='profile'")or die('profile pic selection  query error');
										 if(mysql_num_rows($profilepic)>0){
										$pic=mysql_fetch_array($profilepic)
										?>
										<div class="image-name">
										 <div style="width: 60px; height: 60px;" align="center"><a href="searchprofile.php?individualemail=<?php echo $peoplename[2];?>"><img src="profile_pictures/<?php echo $pic[0];?>" style="width: 100%; height: 100%" class="img-responsive img-rounded"></a>
										 		
										 </div>
										 
											<i class=search-name><a href="searchprofile.php?individualemail=<?php echo $peoplename[2];?>"><?php echo $peoplename[0]." ".$peoplename[1];?></a></i><br>
										
											</div>
											<?php
										 }
										 else{
											?>
											<div class="image-name"><a href="searchprofile.php?individualemail=<?php echo $peoplename[2];?>">
											<div style="width: 60px; height: 60px;"><img src="images/ABB.png" class="img-responsive img-circle" style="width: 100%; height: 100%"></a></div>
											 <i class=search-name><a href="searchprofile.php?individualemail=<?php echo $peoplename[2];?>"><?php echo $peoplename[0]." ".$peoplename[1];?></a></i><br>
											</div>
											<?php
										 }
									

      						 
      						
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
			<br>

  		</div ><!-- /.col-md-4-->
  		 
  		</div>
  		
		
		</div>
		</div>
	 
</section>
<!--,,,,,,,,,,,,,,,, Footer End ,,,,,,,,,,,,,,,,,,, -->

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
<br>
<br>
 

<section id="footer">
						<div class="container-fluid">
							<div class="text-center">
            		 <span style="float: right;">CopyRight &copy; 2017</span>               
            </div>
						</div>
</section>


<script type="text/javascript">
				
				$('.pro-img').click(function() {

				$(this).next().slideToggle('500');
			$(this).find('span').toggleClass('glyphicon-plus glyphicon-minus');
			$('#show').css('visibility', ($('#show').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("fast");
    
    
});

			</script>
			



<!--for comments div -->

<script type="text/javascript">

 $('.hide-show').click(function() {

 	$(".hide-show b").fadeOut(function () {

    $(this).text(($(this).text() != 'Hide comments') ? 'Hide comments' :'<?php echo $com[0];?> Comments').fadeIn("slow");
       
       });

    $('#comments-div').css('visibility', ($('#comments-div').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");



});
</script>

<script type="text/javascript">

    $('.reply').click(function() {
   
    $('.comment-field').css('visibility', ($(this).css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");
   
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