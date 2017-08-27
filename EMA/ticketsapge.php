<!DOCTYPE html>
<?php
session_start();
$id=$_GET['id'];
$page=$_GET['page'];
?>
<html>
<head>

	<title>ticket page</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/styling1.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/animate.css">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


<link href='https://fonts.googleapis.com/css?family=BioRhyme Expanded' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=BenchNine' rel='stylesheet'>

<style type="text/css">
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

::-webkit-input-placeholder{
	font-family: 'BenchNine';
	letter-spacing: 1px;
}
.ticket-info-row{
	border-bottom: 2px solid #286E88;
	background-color: skyblue;
	padding: 4px;
}
.ticket-info{
	font-size: 20px;
}

.side-col{
	border-left: 5px solid #286E88;
}
 .form-control::placeholder{
	font-family: 'BenchNine';
	letter-spacing: 1px;
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
.proposal-btn{
	float: right;
}
.event-title{
border-bottom: 2px solid #286E88;  
				padding: 4px;
				 font-weight: bolder;
				  background-color: 	#F0F8FF;
	box-shadow: 10px 15px 25px gray;
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

      	
        <li class="active"><a href="home.php">Back to Home <span class="sr-only">(current)</span></a></li>
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
		<?php 
		$ticketquery = mysql_query(" SELECT event.title,paid_event_detail.ticketnumbers,paid_event_detail.ticketprice,event_schedul.fromdate,event.event_logo FROM event join paid_event_detail join event_schedul WHERE event.id=paid_event_detail.event_id and event.id=event_schedul.event_id and event.id='$id' ")or die('ticket selection  query error');
										 if(mysql_num_rows($ticketquery)>0){
										 	$ticket=mysql_fetch_array($ticketquery);
										 	$ticketsum = mysql_query(" SELECT SUM(ticket_id) from ticket where event_id='$id'")or die('ticket sum  query error');
										 	$sum=mysql_fetch_array($ticketsum)
												?>
		
			<div class="col-md-5 ">
				<div class="event-title">
					<h4><?php echo $ticket[0];?></h4>
					
				</div>
				<br>
				<div style="height: 300px;">
					<img src="event_logo/<?php echo   $ticket[4];?>" style="width: 100%; height: 100%;">
				</div>
				
			</div>
			<div class="col-md-7 side-col">
				
				<div class="event-title">
					<h4>Tickets Info</h4>
				</div>
				<br>
				<div class="row " style=" font-size: 32px">
					<div class="col-md-3 col-md-offset-2 ticket-info">
						Price per ticket
					</div>
					<div class="col-md-2" style="color:#286E88;">
						<b> <?php echo $ticket[2];?></b>
					</div>
					<div class="col-md-5" >
						
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-3 col-md-offset-2 ticket-info">
						 Sold
					</div>
					<div class="col-md-1">
						:
					</div>
					<div class="col-md-6" style="color:#286E88; font-size: 16px; ">
						 <?php echo $sum[0];?>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-3 col-md-offset-2 ticket-info">
						Remaining tickets
					</div>
					<div class="col-md-1">
						:
					</div>
					<div class="col-md-6" style="color:#286E88; font-size: 16px; ">
						 <?php echo $ticket[1]-$sum[0];?>
					</div>
				</div>
				<br><br>
				<form method="post" name="ticket" action="">
				<div class="row form-group">
					<div class="col-md-2">
						
					</div>
					<div class="col-md-5">
						<input type="number" name="accountno" class="form-control" placeholder="Enter account number"  />
					</div>
				</div>
				<br><br>
				<br>
				<div class="row">
					<div class="col-md-4">
						
					</div>
					<div class="col-md-6">
						<button  name="buyticket" type="submit" class="btn btn-warning" style="width: 200px; padding: 4px; letter-spacing: 2px;">Buy Your's</button>
					</div>
				</div>

				</form>
				<div class="row">
					<div class="col-md-8"></div>
					<div class="col-md-4" style="color: gray; font-size: 12px;">Starting Date &nbsp;<span><?php echo $ticket[3];?></span> </div>
				</div>
				</div>
				<?php
			}
			?>

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

    $(this).text(($(this).text() != 'Hide comments') ? 'Hide comments' : 'Comments').fadeIn("slow");
       
       });

    $('#comments-div').css('visibility', ($('#comments-div').css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");



});
</script>

<script type="text/javascript">

    $('.reply').click(function() {
   
    $('.comment-field').css('visibility', ($(this).css('visibility') != 'hidden') ? 'visible' : 'hidden').slideToggle("slow");
   
});
</script>

<!--for comments div End -->





</body>
</html>
<?php
if(isset($_POST['buyticket'])){

	$accountno=$_POST['accountno'];
	if($accountno==""){
		echo "<script>alert('Enter account number')</script>";
	 
	exit();
}
else{
	$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con);
$ticketnum=$sum[0]+1;
$q=mysql_query("INSERT INTO `ema`.`ticket` (`ticket_id`, `event_id`, `user_email`,`account_no`, `amount` ) VALUES ('$ticketnum', '$id', '$_SESSION[email]','$$accountno', '$amount')")or die('organizer table insertion query error') ;
if($q){
$query=mysql_query(" insert into participant(participant_email,event_id )values('$_SESSION[email]' , '$id' )")or die('error in insertion query');
if($query){
	echo "<script>alert('you by ticket ok $ticketnum ')</script>";
	 echo"<script>window.open('$page','_self')</script>";
}

}

}
}

?>