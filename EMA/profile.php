<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
	<head>
		<title>Profile page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
			<link rel="stylesheet" type="text/css" href="assets/css/jquery.rateyo.min.css">
			<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/main.css" />
		

<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>
		
		
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

	<style type="text/css">
	body{
	font-family: 'BenchNine';
	letter-spacing: 1px;

}
h3{
		 font-family: 'BioRhyme Expanded';
    color:#307C94;
	}


.view-more{
	color:#39B3D7;
	text-decoration: none;

}
.view-more:hover{
	color:#39B3D7; 
}
.fo{
	font-family: 'BenchNine';
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

#comments-div{
	z-index: 999;

}
#hide-show{
	cursor: pointer;
}
.reply{
	float: right;
	cursor: pointer;
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


/* ,,,,,,,,,,,, Messaging Modal Start,,,,,,,,,, */

.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 999; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
    position: fixed;
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}

/* The Close Button */
.close {
    color: black !important;
    float: right;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black !important;;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #fff;
    height: 40px;
}

.modal-body {
	
	max-height: 300px;
	overflow: scroll;
	overflow-y: scroll;
overflow-x: hidden;
}

.modal-footer {
    padding: 2px 16px;
    background-color: #286E88;
    height: auto;
}

/* Add Animation */
@-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

@keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

#inbox-msg-pic{
	max-width: 40px;
	max-height: 40px;
}
#inbox-msg-pic img{
	max-width: 40px; 
	max-height: 40px;
	float: right;
	padding-left: 20px;
}
#inbox-name p{
	margin-left: 5%;
	color:#286E88; 
	position: absolute; 
	margin-bottom:10%; 
	z-index: 1; 
	font-weight: bold;
}
.send-msg-btn{
	float: left;
	height: 40px;
	-webkit-border-radius: 0 !important;
     -moz-border-radius: 0 !important;
          border-radius: 0 !important;
}
.incoming-msg{
	margin-left: 1%;
	width: 10%;
	min-height: 20px;
	padding: 2px;
	background-color: #286E88; 
	border-radius:2px;
	max-height:auto;
	font-size: 12px;
	color: #fff;
	padding-left: 2px ;
	-webkit-animation: mymove 3s infinite; /* Chrome, Safari, Opera */
    animation: mymove 3s infinite;

}
 @-webkit-keyframes mymove {
    50% {box-shadow: 10px 15px 25px #318CE7;}
}

/* Standard syntax */
 @keyframes mymove {
    50% {box-shadow: 10px 15px 25px #318CE7;}
}

/*,,,,,,,,,,,,,,,, incoming message styling end ,,,,,,,,, */ 
.outgoing-msg{
	margin-left: 75%;
	width:10%;
	min-height: 20px;
	padding: 2px;	
	background-color: #fff;
	border: 1px solid #998888;
	border-radius:4px;
	max-height:auto;
	font-size: 12px;
	color: #998888;	
	-webkit-animation: mylove 3s infinite; /* Chrome, Safari, Opera */
    animation: mlmove 3s infinite;
}

 @-webkit-keyframes mylove {
    50% {box-shadow: 10px 15px 25px #998888;}
}

/* Standard syntax */
 @keyframes mlmove {
    50% {box-shadow: 10px 15px 25px #998888;}
}


  /*,,,,,,,,,,,,,,,, outgoing message styling end ,,,,,,,,, */  
#msg-typing input{
	width: 100%; 	
	margin-bottom: 35px;
}
/* ,,,,,,,,,,,, Messaging Modal end,,,,,,,,,, */

/* ,,,,,,,,,,,, New appearing div style,,,,,,,,,, */

        
    /* THE NOTIFICAIONS WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
    #notifications {
        display:none;
        width:100%;
        position:absolute;
        color:#286E88 !important;
        top:325px;
        left:0;
        background:#FFF;
        border:solid 1px rgba(100, 100, 100, .20);
        -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
        z-index: 1;
    }
    /* AN ARROW LIKE STRUCTURE JUST OVER THE NOTIFICATIONS WINDOW */
    #notifications:before {         
        content: '';
        display:block;
        width:0;
        height:0;
        color:transparent;
        border:10px solid #CCC;
        border-color:transparent transparent #FFF;
        margin-top:-20px;
        margin-left:175px;
    }
    
  #notifications h3 {
        display:block;
        color:#286E88 !important; 
        background:#FFF;
        font-weight:bold;
        font-size:15px;    
        padding-left: 160px;
        margin:0;
        border-bottom:solid 1px rgba(100, 100, 100, .30);
    }
        
    .seeAll {
        background:#F6F7F8;
        

        font-size:15px;
        font-weight:bold;
        text-align:center;
    }
    .seeAll a {
        color:#286E88 !important;
        padding-left:270px;
    }
    .seeAll a:hover {
        background:;
        color:#286E88 !important;
    }
	/* ,,,,,,,,,,,, Messaging div start ,,,,,,,,,, */
      
    /* THE messaging WINDOW. THIS REMAINS HIDDEN WHEN THE PAGE LOADS. */
    #messaging {
        display:none;
        width:100%;
        position:absolute;
        top:325px;
        left:0;
        background:#FFF;
        border:solid 1px rgba(100, 100, 100, .20);
        -webkit-box-shadow:0 3px 8px rgba(0, 0, 0, .20);
        z-index: 1;
    }

  #messaging:before {         
        content: '';
        display:block;
        width:0;
        height:0;
        color:transparent;
        border:10px solid #CCC;
        border-color:transparent transparent #FFF;
        margin-top:-20px;
        margin-left:250px;
    }
    
  #messaging h3 {
        display:block;
        color:#286E88 !important; 
        background:#FFF;
        font-weight:bold;
        font-size:15px;    
        padding-left: 190px;
        margin:0;
        border-bottom:solid 1px rgba(100, 100, 100, .30);
    }

.past-title{
	text-transform: uppercase;
	font-size: 20px;
	letter-spacing: 2px;
	font-weight: bolder;

}
.con-div{
	width: 40;
	 height: 40px;
	  font-size: 12px;
}
.form-group .form-control{
	border-radius: 0;
	border: 0;
	border-bottom: 2px solid  #196E88;
	box-shadow: none;
	background: white;
}
.form-group .form-control:focus{
	border-radius: 0;
	border: 0;
	border-bottom: 2px solid  #AAAAAA;
	background: white;
	box-shadow: none;
}
.new-pro-div{
	width: 140px;
	height: 140px;
	border-radius: 100%;
	align-content: center;
	margin-left: 25%;

}
.new-pro-div img{
	width: 100%;
	height: 100%;
	border-radius: 100%;
}
.button-div {
	float: right;
}
.button-div .btn{
	width: 70px;
	font-size: 13px;

}
.past-btn-div .btn{

	width: 70px;
	font-size: 13px;
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

							<div class="row">
								<div class="col-sm-12">
									<div class="new-pro-div" align="center">
										<img src="profile_pictures/<?php echo $row[0];?>" class="img-responsive" alt=""  />
									</div>
								</div>
							</div>
					
					<?php
								}
									else{
										?>
										<div><span class="image avatar new-pro"><img src="" alt="" /></span></div> 
									<?php
									}
									$username = mysql_query("SELECT `fristname`,`lastname` FROM `user` WHERE email='$_SESSION[email]' ")or die('user selection  query error');
									$name=mysql_fetch_array($username)
									?>
									<br>
					
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
					<br>
					<div class="row">
					<div class="col-sm-6">
					<a href="upload_profile_picture.php"><button class="btn btn-info">Update profile</button></a>&nbsp;
					</div>
					<div class="col-sm-3"  style="background-color: #286E88 !important;">
					  <button  id="noti_Button" class="btn btn-info" style="width: 30px;" >
    					<span class="fa fa-bell fa-lg"  style=""></span>
     					</button>
						<?php
						$notify=mysql_query("SELECT COUNT(state) from notification where  to_email='$_SESSION[email]' AND state='new' ") or die(' comment selection query error');
						if(mysql_num_rows($notify)>0){
							$note=mysql_fetch_array($notify);
							if($note[0]>0){
							?>
    					 <span class="badge badge-notify"><?php echo $note[0];?></span>
						<?php
					}
						}
						else {
							 
						}
						?>
    					</div>
    			     				<div class="col-sm-3" style="background -color: #286E88 !important;">
					<button class="btn btn-info" id="msg_Button" style="width: 30px;">
    					<span class="fa fa-envelope fa-lg" style=""></span>
     					</button>
												<?php
						$massagenotify=mysql_query("SELECT COUNT(state) from massage where  to_email='$_SESSION[email]' AND state='unread' ") or die(' massage selection query error');
						if(mysql_num_rows($massagenotify)>0){
							$msgnote=mysql_fetch_array($massagenotify);
							if($msgnote[0]>0){
							?>
    					<span class="badge badge-notifi"><?php echo $msgnote[0];?></span>
						<?php
					}
						}
						else {
							 
						}
						?>
    					</div>
						
			</div> 
					
					
					
					 <!--.... Msg button ,,,,, -->




					<!--.... new  div ,,,,, -->
					 <div id="notifications">
                    <h3>Notifications</h3>
                    <div style="height:220px;">
							<?php
							$update=mysql_query("UPDATE `notification` SET `state`='view' WHERE to_email='$_SESSION[email]' and `state`='new'") or die('notification updation query error');
							
							$shownotification=mysql_query("SELECT * from notification where  to_email='$_SESSION[email]' AND state='view' ") or die('notification selection query error');
						if(mysql_num_rows($shownotification)>0){
							while($shownote=mysql_fetch_array($shownotification)){
							$fromemail=$shownote[0];
							 
								?>
							
							<div class="row" style="padding-top: 4px; padding-bottom: 4px;">
							<?php
							$notifierpicture=mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$fromemail' and `for`='profile'")or die(' notifier picture selection  query error');
								if(mysql_num_rows($notifierpicture)>0){
                                 $notifierpic=mysql_fetch_array($notifierpicture)
							?>
							<div class="col-md-2">
								<div style="width: 40px; height: 40px;  ">
    							 	<img src="profile_pictures/<?php echo $notifierpic[0];?>" class= "img-responsive img-circle" align="center" style="width: 100%; height: 100%"/>
    							 </div>
    						</div>
							
							
							<?php
								}
								else{
									?>
    						<div class="col-md-2">
    							<i class="fa fa-image fa-3x"></i>
    						</div>
							<?php
								}
								?>
    						<div class="col-md-10" style="font-size: 12px;">
    							<?php echo $shownote[3];?>
    						</div>
							
    						</div>
							<?php
						}
						}
						else{
						?>
	<p><font size="5" color="gray">
	<center>No notification yet... </center>
	</font>
	</p>
<?php	
						}
								
    					?>
													
    					</div>
						</div>
						<!--.... end  div ,,,,, -->



					<!--....Msging  new  div ,,,,, -->
					 <div id="messaging">
                    <h3>Message's</h3>
                    <div style="height:220px;">
                    	

                    	 <?php
							//$update=mysql_query("UPDATE `notification` SET `state`='view' WHERE to_email='$_SESSION[email]' and `state`='new'") or die('notification updation query error');
							
							$massage=mysql_query("SELECT * from massage where  to_email='$_SESSION[email]' AND state='unread' ") or die('massage selection query error');
						if(mysql_num_rows($massage)>0){
							while($showmsg=mysql_fetch_array($massage)){
							$from_email=$showmsg[0];
							 
								?>
							
							<div class="row">
							<?php
							$massagerpicture=mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$fromemail' and `for`='profile'")or die(' notifier picture selection  query error');
								if(mysql_num_rows($massagerpicture)>0){
                                 $massagerpic=mysql_fetch_array($massagerpicture)
							?>
    						 
    						<div class="col-md-2">
    							<div style="width: 40px; height: 40px; padding: 4px;">
    							 <img src="profile_pictures/<?php echo $massagerpic[0];?>" class= "img-responsive img-circle" style="width: 100%; height: 100%" align="center" />
    							 </div>
    						</div>
														<?php
								}
								else{
									
								 ?>
								 <div class="col-md-2">
								 <i class="fa fa-image fa-3x"></i>
								 </div>
								 <?php
								}
								?>
    						<div class="col-md-10">
                                <a href="#" class="fo myBtn" id="" style="font-size: 12px;">  <?php echo  $showmsg[2];?> </a>
    						</div>
    					</div>
    				
<?php
						}
						}
						 else{
						?>
	<p><font size="5" color="gray">
	<center>No massage Yet... </center>
	</font>
	</p>
<?php	
						}
								
    					?>
    					 
    					 
                    </div>
 
                </div>
                <div class="row con-row">
                	<div class="col-sm-12 con-row">
                	
                		<h4>Contacts</h4>

                	</div>
                </div>
                <br>
                <div class="row ">

                <?php
                $fallowquery=mysql_query("SELECT * FROM `fallow` where fallowby_email='$_SESSION[email]'") or die('fallow selecion query erroe');
                if(mysql_num_rows($fallowquery)>0){
                	while($fallow=mysql_fetch_array( $fallowquery)){
                		

                ?> 
                	<div class="col-sm-3" align="center" style="padding: 2px; padding-top: 20px;padding-bottom: 20px;" >
                	<a href="chat.php?senderemail=<?php echo $fallow[1];?>">
                		<div class="con-div" align="center">
                		<?php
                		$fallowprofile = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$fallow[1]' and `for`='profile'")or die('fallow picture selection  query error');
								if(mysql_num_rows($fallowprofile)>0){
                                 $fallowpicture=mysql_fetch_array($fallowprofile);
                		?>
                			<img src="profile_pictures/<?php echo $fallowpicture[0];?>" class="img-responsive img-circle" style="width: 100%; height: 100%">
                			<?php
                		}
                		else{
                			?>
                			<img src="" style="width: 100%; height: 100%">
                			<?php
                		}
                		$fallowname = mysql_query("SELECT `fristname`  FROM `user` WHERE email='$fallow[1]'")or die('fallow name selection  query error');
                		 $fallow_name=mysql_fetch_array($fallowname);
                			?>
                			<span ><?php echo $fallow_name[0];?></span>
                		</div>
                		</a>
                	</div>
 					<?php
 				}
 			}
 			else{
 				echo "No contacts ";
 			}
 			?>
                </div>


					<!--.... end  div ,,,,, -->





					 
				</header>
				
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
									<div class="col-md-4" id="logo">
										
											<img src="images/emanew2.png" class="img-responsive">
										
									</div>
									<div class="col-md-8">
										
											<ul class="nav nav-tabs" id="menu-bar">
											<li><a href="create-event.php">Create Event</a></li>
												<li><a href="as-organizer.php">As Organizer</a></li>
												<li><a href="comp-details.php">Org Details</a></li>
												<li><a href="home.php">Home</a></li>
												
											</ul>
										
									</div>
								</div>
								</div>	
							</header>
<!--................................... End of header div.............................. -->	

										
									


							<div class="container-fluid">
							<h3>Upcoming Events</h3>
							<?php
								$date= Date('20y-m-d');
   $result=mysql_query(" select user.fristname,user.lastname,event.id,event.title,event.category,event.country,event.city,event.address,event_schedul.fromdate,event_schedul.todate,event_schedul.time,event.discription from user join event_schedul join event where user.email='$_SESSION[email]' and event_schedul.creater_email='$_SESSION[email]'  and event.id=event_schedul.event_id and event_schedul.fromdate >'$date' ORDER BY fromdate ASC") or die("Error in event selection query");
  if(mysql_num_rows($result)>0){
	  while($rows=mysql_fetch_array($result)){
		  $eventid= $rows[2];
							?>
								<div class="well">
									<div class="row" style=" color: black !important">
										<div class="col-sm-3" align="center" style="border-right: 2px solid gray;">
											<div style=" width: 120px; height: 120px;">
										 		<?php
										 			$profilephoto = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$_SESSION[email]' and `for`='profile'")or die('profile picture selection  query error');
										 			if(mysql_num_rows($profilephoto)>0){
													$photo=mysql_fetch_array($profilephoto)
												?>
												<img src="profile_pictures/<?php echo $photo[0];?>" alt="" class= "img-responsive" style="width: 100%; height: 100%;"/>
												<?php
												}
											else{
												?>
											
												<span class="image avatar"><img src="" alt="" /></span>
											 
												<?php
												}
												?>
											</div>

													 
												<p align="center" style="color: #307C94 !important" >Event By: <br>
										<span align="center" style="color: black"><?php echo $rows[0]." ".$rows[1]; ?> </span> </p>

								
											<div class="data-div">
												
												<span style="color: #307C94 !important"> Starts at</span> 
												<span style="color: black !important"><?php echo $rows[8];?> </span> <br>
												<!--<i style="color: black !important">2017</i>-->
											</div>
											<div class="data-div">
												<span style="color: #307C94 !important"> End at </span> 
												<span style="color: black !important"><?php echo $rows[9];?> </span> <br>
												<!--<i style="color: black !important">2017</i>-->
												
											</div>

											<div class="data-div">
												<span style="color: #307C94 !important">	On </span>  <span style="color: black !important"><?php echo $rows[10];?></span>
												</div>
												
											<div><span style="color: #307C94 !important"> Catagory  <span style="color: black !important;"><?php echo $rows[4];?></span></span>
											</div>
										


										</div>
										<div class="col-sm-9">
											<div class="row">
												<div class="col-sm-9">
													<span style="color: black !important; text-transform: uppercase; font-weight: bolder;"><?php echo $rows[3];?></span> 
												</div>
												<div class="col-sm-3">
													<a href="order_statuscheck.php?eventid=<?php echo $eventid;?>" style="background-color: skyblue; float: right;">ORDER STATUS</a>
												</div>
											</div>
											<br>
											
											<div class="row">
												<div class="col-sm-2">
													<span style="color: #307C94 !important">About </span>
												</div>
												<div class="col-sm-10">
													 <span><?php echo $rows[11];?></span>
												</div>
											</div>
											<div class="row">
												 
												 <div class="col-sm-2">
												 	<span style="color: #307C94 !important">Held at </span>
												 </div>
												 
												<div class="col-sm-10">
													  <span><?php echo $rows[7];?></span>  <span><?php echo $rows[6];?></span> <span><?php echo $rows[5];?></span>
												</div>
											</div>	 
												<br>
											<div class="row" style="padding: 5px; border-bottom: 2px solid gray">
												<div class="col-sm-12 ">
													<div class="button-div">
													<?php
													$useremail=$_SESSION['email'];
													?>
														 
															<a href="view-more.php?id=<?php echo  $eventid;?>&&email=<?php echo $useremail;?>" class="view-more">Preview Event...</a>

														<a href="update_event.php?id=<?php echo $eventid;?>" ><button class="btn btn-info" title="Update event info">Update</button></a>
														<a href="invitation.php"><button class="btn btn-info" title="Invite someone special">Invitation</button></a>
														<a href="organizer_list.php?id=<?php echo $eventid;?>"><button class="btn btn-info" title="Hire Organizer">Organizer</button></a>
														<a href="participants.php?id=<?php echo $eventid;?>"><button class="btn btn-info" title="Attendents">Participants</button></a>
														<a href="delete_event.php?id=<?php echo $eventid;?>" onclick="return window.confirm('are you sure to delete  this event')"><button class="btn btn-danger" title="Delete whole info">Delete</button></a>
													</div>
												</div>
											</div>
											<br>
												
											<div id="comments-div" style="padding: 5px;">
											<?php
										 $reviewquery=mysql_query("select * from ema.review where event_id='$eventid' and state='new' ORDER BY review_id DESC") or die('review selection query error');
										if(mysql_num_rows($reviewquery)>0){
										 while($review=mysql_fetch_array($reviewquery)){
										 	?>
					 							<div class="row">
										<div class="col-md-2 col-md-offset-1" >
										<div style="width: 100px; height: 80px; padding: 4px;">
										<?php
					 					$revieweremail=$review[1];	
										$reviewerprofile = mysql_query("SELECT `name` FROM  `profile_picture` WHERE email='$revieweremail' and `for`='profile'")or die('reviewer picture a selection  query error');
										if(mysql_num_rows($reviewerprofile)>0){
										$reviewerpic=mysql_fetch_array($reviewerprofile);
									?>
											 
												<img src="profile_pictures/<?php echo $reviewerpic[0];?>" class="img-responsive img-rounded" style="width: 100px; height: 80px; float: right;" >
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
										$reviewernamequery = mysql_query(" SELECT fristname,lastname  FROM `user` WHERE email='$revieweremail'")or die('reviewer name a selection  query error');
										 
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
													<a href="show_new_review.php?reviewid=<?php echo $review[3];?>&&eventid=<?php echo $eventid;?>">
													 New
													 </a>
													 </span>
												</div>
											</div>
											<div class="row">
												<div>
													 <?php echo  substr($review[4],0,40).
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
							 <span style="padding-left: 40%; color: gray; font-weight: bolder;">No new review added </span>
							<?php	
							}
							?>
												
									</div>
									 

									
									<div class="row">
											<div class="col-sm-12">
												 <form method="post" name="current" action="review.php">
    											<div class="input-group">
      												<input type="text" class="form-control" name="review" placeholder="Review ..." required>
     												 <span class="input-group-btn">
        												<button class="btn btn-default" type="submit" name="do" ><i class="fa fa-paper-plane-o fa-lg" style="padding: 8px;" aria-hidden="true"></i></button>
     												</span>
													<input type="hidden" name="eventid" value="<?php echo $eventid;?>">
													<input type="hidden" name="page" value="<?php echo "profile.php";?>">
													<input type="hidden" name="createremail" value="<?php echo $_SESSION[email];?>">
    											</div><!-- /input-group -->
												</form>
  											</div><!-- /.col-sm-12 -->
									</div><!-- /.row -->

								<div class="row">
									<div class="col-md-4">
									<?php
									$proposals=mysql_query("SELECT COUNT(proposal) from ema.proposal where  event_id='$eventid' ") or die(' proposals selection query error');
									 
									$proposalcount=mysql_fetch_array($proposals)
									?>
										<span><?php echo $proposalcount[0];?></span>&nbsp;<a href="recieve-proposals.php?eventid=<?php echo $eventid;?>">Proposal
										<?php
										 $newproposal=mysql_query("SELECT COUNT(proposal) from ema.proposal where  event_id='$eventid' and state='new' ") or die(' new proposals selection query error');
									 
									$newcount=mysql_fetch_array($newproposal);
									if($newcount[0]>0){
									?>
										<img src="images/new.gif" class="img-responsive" style="position: relative;  left: 70px; top: -40px;  width: 40px; height: 20px;">
										<?php
									}
									?>
										</a>
									</div>
									<div class="col-md-4">
								 
								  <?php
									$review=mysql_query("SELECT COUNT(review) from review where  event_id='$eventid' ") or die(' comment selection query error');
									if(mysql_num_rows($review)>0){
									$count=mysql_fetch_array($review)
									?>
										<span > <p id="hide-show" > <b style="color: black !important"><a href="show_new_review.php?reviewid=<?php echo $review[3];?>&&eventid=<?php echo $eventid;?>"> <?php echo $count[0];?> reviews </a></b></p></span>
										<?php
										}
									else{
									?>
										<span><p id="hide-show">  <b  style="color: black !important"> 0 review </b><p></span>
									<?php
									}
									?>
									</div>
									<div class="col-md-4">
											 	
								</div>
						</div>
										</div>
									</div>
								</div> <!--end of well-->
<?php
	  }
  }
  else{
	  ?>
	  <p><font color="gray" size="5">
	  <center> No  upcoming event </center>
	  </font>
	  </p>
	  <?php
  }
?>
 
			</div>						
</section><!--one end-->

						<!-- Three -->
<section id="three" class="container-fluid">
	<br>
							<h3>Past Events</h3>
							<?php $your=mysql_query(" select user.fristname,user.lastname,event.id,event.title,event.category,event.discription from user join event_schedul join event where user.email='$_SESSION[email]' and event_schedul.creater_email='$_SESSION[email]'  and event.id=event_schedul.event_id and event_schedul.fromdate <='$date' ORDER BY todate DESC ") or die("Error in event selection query");
  if(mysql_num_rows($your)>0){
	  while($yr=mysql_fetch_array($your)){
		  $yreventid= $yr[2];?>
								<div class="well" style=" color: black !important;  box-shadow: 10px 15px 25px gray;">
									<div class="row" >
									
										<div class="col-sm-3" align="center" style="border-right: 2px dashed gray">
										 <?php
										 $yourphoto = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$_SESSION[email]' and `for`='profile'")or die('logo selection  query error');
										 if(mysql_num_rows($yourphoto)>0){
										$yrphoto=mysql_fetch_array($yourphoto)
								?>

											<div style="width: 120px; height: 140px">
												<span>
													<img src="profile_pictures/<?php echo $yrphoto[0];?>" alt="" class= "img-responsive img-rounded" align="center" style="width: 100%; height: 100%" />
												</span>
											</div>
					
					<?php
								}
									else{
										?>
											<div style="width: 120px; height: 140px">
												<span class="image avatar">
													<img src="images/ABB.png" alt="" style="width: 100%; height: 100%" />
												</span>
											</div> 
									<?php
									}
									?>	
										<br>
										<p align="center"  style="color: #307C94 !important" class="sponsor">Event By:<br>
										
										<span align="center" style="color: black"><?php echo $yr[0]." ".$yr[1]; ?></span></p>

										<span class="rateYo"></span>
										<span style="color: #307C94 !important"> Rating </span> <span  style="color: black">  80% </span> <br>
										<span style="color: #307C94 !important">Catagory</span> <span style="color: black"><?php echo $yr[4];?></span>
										</div>
										<div class="col-sm-9">
												<div class="row">
													<div class="col-sm-12 past-title">
														<span><?php echo $yr[3];?></span>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-sm-3">
														<span style="color: #307C94 !important"> About event </span>
													</div>
													<div class="col-sm-9">
														<?php echo $yr[5];?>
													</div>
												</div>
												<br>
												<div class="row">
												<?php
												$useremail=$_SESSION['email'];
												?>
													<div class="col-sm-12">
														<a href="view-more.php?id=<?php echo $yreventid;?>&&email=<?php echo $useremail;?>" class="view-more">Preview Event...</a>
													</div>
												</div>
													


										
										<br>
										<br>
										<div class="row" style=" margin-bottom: 5px; padding: 5px ; border-bottom: 2px solid gray;" >
											<div class="col-sm-12">
												
											<div class="past-btn-div" style="float: right;">
										<a href="upload_event_picture_video.php?id=<?php echo $yreventid;?>"><button class="btn btn-info" title="Upload images/video">Upload</button></a>
										<a href="participants.php?id=<?php echo $yreventid;?>"><button class="btn btn-info" title="Attendents">Participants</button></a>
										<a href="delete_event.php?id=<?php echo $yreventid;?>" onclick="return window.confirm('are you sure to delete  this event')"><button class="btn btn-danger" title="Delete whole info" >Delete</button></a>
										</div>
										</div>
										</div>
										<br>

										<div id="comments-div">
											<?php
										 $pastreviewquery=mysql_query("select * from ema.review where event_id='$yreventid' and state='new' ORDER BY review_id DESC") or die('review selection query error');
										if(mysql_num_rows($pastreviewquery)>0){
										 while($pastreview=mysql_fetch_array($pastreviewquery)){
										 	?>
					 							<div class="row">
										<div class="col-md-2 col-md-offset-1" >
										<div style="width: 100px; height: 80px;  padding: 4px;">
										<?php
					 					$pastrevieweremail=$pastreview[1];	
										$pastreviewerprofile = mysql_query("SELECT `name` FROM  `profile_picture` WHERE email='$pastrevieweremail' and `for`='profile'")or die('reviewer past event picture a selection  query error');
										if(mysql_num_rows($pastreviewerprofile)>0){
										$pastreviewerpic=mysql_fetch_array($pastreviewerprofile);
									?>
											 
												<img src="profile_pictures/<?php echo $pastreviewerpic[0];?>" class="img-responsive img-rounded" style="width: 100px; height: 80px; float: right; " >
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
										$pastreviewernamequery = mysql_query(" SELECT fristname,lastname  FROM `user` WHERE email='$pastrevieweremail'")or die('reviewer past event name a selection  query error');
										 
										$pastreviewername=mysql_fetch_array($pastreviewernamequery);
									?>
											<div class="row">
												<div class="col-md-8">
													<strong style="font-weight: bolder; color:#307C94;position: relative; left: -10px; ">
													 <?php
													 echo $pastreviewername[0]." ".$pastreviewername[1];?>
													  </strong>
												</div>
												<div class="col-md-4">
													<span style="float: right; color: red; border-bottom: 1px solid gray;">
													<a href="show_new_review.php?reviewid=<?php echo $pastreview[3];?>&&eventid=<?php echo $yreventid;?>">
													 New
													 </a>
													 </span>
												</div>
											</div>
											<div class="row">
												<div>
													 <?php echo substr($pastreview[4],0,40).
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
							 <span style="padding-left: 40%; color: gray; font-weight: bolder;">No new review added </span>
							<?php	
							}
							?>
												
									</div>

										<div class="row">
											<div class="col-sm-12">
												 <form method="post" name="past" action="review.php">
    											<div class="input-group">
      												<input type="text" class="form-control" name="review" placeholder="Review ..." required>
     												 <span class="input-group-btn">
        												<button class="btn btn-default" type="submit" name="do" ><i class="fa fa-paper-plane-o fa-lg" style="padding: 8px;" aria-hidden="true"></i></button>
     												</span>
													<input type="hidden" name="eventid" value="<?php echo $yreventid;?>">
													<input type="hidden" name="page" value="<?php echo "profile.php";?>">
													<input type="hidden" name="createremail" value="<?php echo $_SESSION[email];?>">
    											</div><!-- /input-group -->
												</form>
  											</div><!-- /.col-sm-12 -->
										</div><!-- /.row -->
										
										 
										<div class="row" style="color:black;" >
											<div class="col-sm-12" align="center">
											 	 <?php
									$pastreview=mysql_query("SELECT COUNT(review) from review where  event_id='$yreventid' ") or die(' review selection query error');
									if(mysql_num_rows($pastreview)>0){
									$pastcount=mysql_fetch_array($pastreview)
									?>
										<span > <p id="hide-show" > <b style="color: black !important"><a href="show_new_review.php?reviewid=<?php echo $review[3];?>&&eventid=<?php echo $yreventid;?>"> <?php echo $pastcount[0];?> reviews </a></b></p></span>
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
							  }
							  else{
								  ?>
								  <p><font color="green" size="5">
								  <center> No past event </center>
								  </font>
								  </p>
								  <?php
							  }
							?>
<hr>
								
									<h3>Past events <span style="color: gray !important; font-size: 12px;">(You ever joined)</span></h3>
									<?php
									$part=mysql_query(" select event_id from participant where participant_email='$_SESSION[email]'") or die('participant selsction query error');
									 if(mysql_num_rows($part)>0){
	  while($partin=mysql_fetch_array($part))
		  
{     $eventpartid=$partin[0];
 
$Ecreateremal= mysql_query("select  creater_email from event_schedul where event_id='$eventpartid'")or die('cereater email selection error ');

	 if(mysql_num_rows($Ecreateremal)>0){
		 while($crtemail=mysql_fetch_array($Ecreateremal)){
			 $creater_mail=$crtemail[0];
			 
   $creater_event=mysql_query(" select user.fristname,user.lastname,event.title,event.category,event.discription from user join event join event_schedul where user.email='$creater_mail' and event.id='$eventpartid' and event_schedul.event_id='$eventpartid' and event_schedul.fromdate <='$date' ORDER BY todate DESC") or die('Error in  involved in event  query');
  if(mysql_num_rows($creater_event)>0){
	  ?>
	  <div class="well"  style="color: black !important">
	  <?php
	  while($event_detailes=mysql_fetch_array($creater_event)){
	  
	 
						?>				
									 
									<div class="row" style="color:black;">
									
										<div class="col-sm-3" align="center" style="border-right: 2px dashed gray">
										 <?php
										 $createrphoto = mysql_query("SELECT `name` FROM `profile_picture` WHERE email='$creater_mail' and `for`='profile'")or die('creater picture selection  query error');
										 if(mysql_num_rows($createrphoto)>0){
										$crtphoto=mysql_fetch_array($createrphoto)
								?>

									<div style="width: 120px; height: 140px">
										<span>
											<img src="profile_pictures/<?php echo $crtphoto[0];?>" alt="" class= "img-responsive img-rounded" align="center"  style="width:  100%; height: 100%"/>
										</span>
									</div>
					
					<?php
								}
									else{
										?>
										<div><span class="image avatar"><img src="images/ABB.png" alt="" /></span></div> 
									<?php
									}
									?>	
										<br>
										<p align="center" style="color: #307C94 !important">Event By:<br>
										
										<span align="center" style="color: black"><?php echo $event_detailes[0]." ".$event_detailes[1]; ?></span></p>
										

										 <span class="rateYo"></span>

										<span style="color: #307C94 !important"> Rating :  </span> <span style="color: black"> 80%</span> <br>

										<span style="color: #307C94 !important">Catagory </span> <span style="color: black"><?php echo $event_detailes[3]; ?></span>

										</div>
										<div class="col-sm-9">
												<div class="row">
													<div class="col-sm-12 past-title">
														<span>	<?php echo $event_detailes[2]; ?> </span>
													</div>
												</div>
												<br>
												<div class="row">
													<div class="col-sm-3" style="color: #307C94 !important">
														About Event
													</div> 
													<div class="col-sm-9">
														<?php echo $event_detailes[4]; ?>
													</div>
												</div>
												<br>
												<div class="row" style="border-bottom: 2px solid gray; padding: 5px">
													 <div class="col-sm-12"><a href="view-more.php?id=<?php echo $eventpartid ?>&&email=<?php echo $creater_mail ?>" class="view-more" >Preview event...</a> </div>
													  
														<button class="btn btn-warning" title="You join this event" style=" float: right; width: 90px; font-size: 13px;">+joined</button>
													 
												</div>
										<br>
										 
										<div id="comments-div">
											<?php
										 $jionreviewquery=mysql_query("select  * from ema.review where event_id='$eventpartid' ORDER BY review_id DESC LIMIT 4") or die('review jion  event selection query error');
										if(mysql_num_rows($jionreviewquery)>0){
										 while($jionreview=mysql_fetch_array($jionreviewquery)){
										 	?>
					 							<div class="row">
										<div class="col-md-2 col-md-offset-1" >
										<div style="width: 100px; height: 80px; padding: 4px; ">
										<?php
					 					$jionrevieweremail=$jionreview[1];	
										$jionreviewerprofile = mysql_query("SELECT `name` FROM  `profile_picture` WHERE email='$jionrevieweremail' and `for`='profile'")or die('reviewer jion event picture a selection  query error');
										if(mysql_num_rows($jionreviewerprofile)>0){
										$jionreviewerpic=mysql_fetch_array($jionreviewerprofile);
									?>
											 
												<img src="profile_pictures/<?php echo $jionreviewerpic[0];?>" class="img-responsive img-rounded" style="width: 100px; height: 80px; float: right; ">
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
										$jionreviewernamequery = mysql_query(" SELECT fristname,lastname  FROM `user` WHERE email='$jionrevieweremail'")or die('reviewer jion event name a selection  query error');
										 
										$jionreviewername=mysql_fetch_array($jionreviewernamequery);
									?>
											<div class="row">
												<div class="col-md-8">
													<strong style="font-weight: bolder; color:#307C94;position: relative; left: -10px; ">
													 <?php
													 echo $jionreviewername[0]." ".$jionreviewername[1];?>
													  </strong>
												</div>
												<div class="col-md-4">
													<span style="float: right; color: red; border-bottom: 1px solid gray;">
													<a href="view_review.php?reviewid=<?php echo $jionreview[3];?>&&eventid=<?php echo $eventpartid;?>">
													 View
													 </a>
													 </span>
												</div>
											</div>
											<div class="row">
												<div>
													 <?php echo substr($jionreview[4],0,40).
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
												
									</div>
										
										<br>
										<div class="row">
											<div class="col-sm-12">
											  <form method="post" name="jion" action="review.php">
    											<div class="input-group">
      												<input type="text" class="form-control" name="review" placeholder="Review ..." required>
     												 <span class="input-group-btn">
        												<button class="btn btn-default" type="submit" name="do" ><i class="fa fa-paper-plane-o fa-lg" style="padding: 8px;" aria-hidden="true"></i></button>
     												</span>
													<input type="hidden" name="eventid" value="<?php echo $eventpartid;?>">
													<input type="hidden" name="page" value="<?php echo "profile.php";?>">
													<input type="hidden" name="createremail" value="<?php echo $_SESSION[email];?>">
    											</div><!-- /input-group -->
												</form>
  											</div><!-- /.col-sm-12 -->
										</div><!-- /.row -->	
										
										 
									 <div class="row" style="margin-top: 10px; color:black; width: 100%; font-size: 13px" >
					 
				
						<div class="col-md-12" align="center">
						  		 	 <?php
									$joinreview=mysql_query("SELECT COUNT(review) from review where  event_id='$eventpartid' ") or die(' jion event count review selection query error');
									if(mysql_num_rows($joinreview)>0){
									$joincount=mysql_fetch_array($joinreview)
									?>
										<span > <p id="hide-show" > <b style="color: black !important"><a href="view_review.php?reviewid=<?php echo $review[3];?>&&eventid=<?php echo $eventpartid;?>"> <?php echo $joincount[0];?> reviews </a></b></p></span>
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
			<?php
	  }
	  ?>
	  </div>
	  <br>
	  <?php
  }
		 }
	 }
  }
 }
  else{
	  ?>
	  <p><font color="gray" size="5">
	  <center>You didn't join any event yet ...</center>
	  </font>
	  </p>
	  <?php
  }
?>
								
								 
							</section>
							<hr>

						<!-- Four -->
							<section id="four">
								<div class="container">
									 <h4 style="color:#286E88; font-family: 'BioRhyme Expanded';">Improve EMA  </h4>
                  <p style="color:#286E88; font-family: 'BioRhyme Expanded'; ">Lets do it...  </p>
									<form method="post" class="form-group" action="suggestion.php" name="suggestion" >
										<div class="row uniform">
											<div class="12u"> <input type="text" name="subject" id="subject" class="form-control" placeholder="A short title" /></div>
										</div>
										<div class="row uniform">
											<div class="12u"><textarea name="suggestion" id="message" class="form-control" placeholder="Write suggestion" rows="6"></textarea></div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" name="sendsuggestion"  class="special" title="Send suggestion" value="Send Suggestion" style="width: 200px; letter-spacing: 2px ; margin-left: 700px;"  /></li>
												</ul>
												<input type="hidden" name="fpage" value="profile.php">
											</div>
										</div>
									</form>
								</div>
							</section>
						 </div>
					
						 
				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<div >
								 <span style="float: right;">CopyRight &copy; 2017</span> 
							</div>
						</div>
						
           
					</section>
				
			</div>
	 
						 	<!--Messaging Modal -->
						<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
	<?php
	$massagername = mysql_query("SELECT `fristname`,`lastname` FROM `user` WHERE email='$from_email' ")or die('user selection  query error');
									$msgname=mysql_fetch_array($massagername)
									?>
      <span class="close">&times;</span>
       <span id="inbox-name"> <p> <?php echo $msgname[0]." ".$msgname[1];?>	   </p> </span>
    </div>
    <div class="modal-body">
	
	<?php
    	$massagein=mysql_query("SELECT * from massage where  to_email='$_SESSION[email]' AND from_email='$from_email'  or from_email='$_SESSION[email]' and to_email='$from_email' ") or die('massage selection query error');
						if(mysql_num_rows($massagein)>0){
							while($showmsgin=mysql_fetch_array($massagein)){
								
								if($showmsgin[0]==$from_email){
								?>
    <div class="row">
	 
    
    	<div id="inbox-msg-pic" class="col-md-1 col-md-offset-1">
		 					
      <img src="profile_pictures/<?php echo $massagerpic[0];?>">
     
      </div>
    	<div class="col-md-4 incoming-msg">
    		 <p><?php echo $showmsgin[2];?></p>
    	</div>
		 
    	<div class="col-md-7">
    		
    	</div>
    </div>
	
    	<br>
		<?php
								}
		if($showmsgin[0]==$_SESSION['email']){
		?>
    	<div class="outgoing-msg">
    		 <p><?php echo $showmsgin[2];?></p>
    	</div>
		<br>
		<?php
								}
						}}
								?>
    	<br>
    	 
     
    </div>
    <div class="modal-footer ">
    <br>
      <div class="row">
      	<div class="col-md-10">
		<form method="post" name="massage" action="massage.php"><form method="post" name="massage" action="massage.php">
      		<div class="input-group" id="msg-typing" style="width: 100%; height: 40px;">
			 
      												<input type="text" class="form-control"
      												 placeholder="Type Your message here..." name="massage" requerd>
    											</div><!-- /input-group -->
												<input type="hidden" name="toemail" value="<?php echo $from_email;?>">
 
												 
      	</div>
      	
      	<div class="col-md-2">
      		<button class="btn btn-success send-msg-btn"  type="submit" name="send">Send Message</button>
      	</div>
		</form>
      </div>
    </div>
  </div>

</div>
					<!--Messaging Modal End -->	
						 
			 

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.rateyo.min.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
<script type="text/javascript">

	function messages() {
		
	  window.open("msgswindow.html", "_blank", "location=yes,height=400,width=300,top=261,left=726,scrollbars=no,toolbar=no,status=yes,menubar=no,resizable=no" );


	}

</script>


		<!-- Scripts -->
			<script type="text/javascript">
   $(function () {
 
  var $rateYo = $(".rateYo").rateYo();
 
  $(".rateYo").click(function () {
 
    /* get rating */
    var rating = $rateYo.rateYo("rating");
 
    window.alert("you rate " + rating + " ok!");
	  
  });
 
});
    
			</script>
			
			 <script type="text/javascript">
				
				$('.btn-link').click(function() {
    $('#show').css('visibility', ($('#show').css('visibility') == 'visible') ? 'hidden' : 'visible');
});
			</script>

<!--for Messaging model -->
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementByClassName("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!--for comments div -->

<script type="text/javascript">

 $('#hide-show').click(function() {
    $('#comments-div').css('visibility', ($('#comments-div').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");

});
</script>

<script type="text/javascript">
	 
      
    $("#hide-show").click(function () {
        $("b").fadeOut(function () {
            $("b").text(($("b").text() != 'Hide comments') ? 'Hide comments' : 'Show comments').fadeIn("slow");
        })
    });


</script>
<script type="text/javascript">

    $('.reply').click(function() {
    $('.comment-field').css('visibility', ($('.comment-field').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");
});
</script>

<!--for comments div End -->

<!--for notification div new -->

<script>
    $(document).ready(function () {

        // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
        $('#noti_Counter')
            .css({ opacity: 0 })
            .text('7')              // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
            .css({ top: '-10px' })
            .animate({ top: '-2px', opacity: 1 }, 500);

        $('#noti_Button').click(function () {
        	$('#messaging').hide();
            // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
            $('#notifications').fadeToggle('fast', 'linear', function () {
                if ($('#notifications').is(':hidden')) {
                    $('#noti_Button').css('background-color', '#2E467C');
                }
                else $('#noti_Button').css('background-color', '#39B3D7');        // CHANGE BACKGROUND COLOR OF THE BUTTON.
            });

            $('#noti_Counter').fadeOut('slow');                 // HIDE THE COUNTER.

            return false;
        });

        // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
        $(document).click(function () {
            $('#notifications').hide();

            // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
            if ($('#noti_Counter').is(':hidden')) {
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                $('#noti_Button').css('background-color', '#FFF');
            } 
            else $('#noti_Button').css('background-color', '#39B3D7'); 
        });

        $('#notifications').click(function () {
            return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
        });
    });
</script>
<script>
    $(document).ready(function () {

        // ANIMATEDLY DISPLAY THE messaging COUNTER.
        $('#msg_Counter')
            .css({ opacity: 0 })
            .text('7')              // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
            .css({ top: '-10px' })
            .animate({ top: '-2px', opacity: 1 }, 500);

        $('#msg_Button').click(function () {
        	$('#notifications').hide();
            // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
            $('#messaging').fadeToggle('fast', 'linear', function () {
                if ($('#messaging').is(':hidden')) {
                    $('#msg_Button').css('background-color', '#2E467C');
                }
                else $('#msg_Button').css('background-color', '#39B3D7');        // CHANGE BACKGROUND COLOR OF THE BUTTON.
            });

            $('#msg_Counter').fadeOut('slow');                 // HIDE THE COUNTER.

            return false;
        });

        // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
        $(document).click(function () {
            $('#messaging').hide();

            // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
            if ($('#msg_Counter').is(':hidden')) {
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                 $('#msg_Button').css('background-color', '#FFF');
            } 
            else $('#msg_Button').css('background-color', '#39B3D7'); 
        });

        $('#messaging').click(function () {
            return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
        });
    });
</script>
			
			 


			<script src="assets/js/bootstrap.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
 