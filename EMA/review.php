<?php
session_start();
if(isset($_POST['do'])){
	
	$review=$_POST['review'];
	$id=$_POST['eventid'];
	$page=$_POST['page'];
	$creater_email=$_POST['createremail'];
	if($review==""){
		echo"<script>alert('please file the review then click ')</script>";
   echo"<script>window.open('$page','_self')</script>";	
	exit();
	}
	else{
		$con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con) or die('database selection error');
$date= Date('20y-m-d');

$query=mysql_query("INSERT INTO `ema`.`review` (`creater_email`, `reviewer_email`, `event_id`, `review`,`on_date`) VALUES ('creater_email', '$_SESSION[email]', '$id', '$review','$date')")or die('error in insertion query');

 if($query){
	 echo "<script>alert('you are successfully review')</script>";
	 echo"<script>window.open('$page','_self')</script>";
      exit();
	 
	  }
else{
	echo "<script>alert('some thing go wrong please try agian ')</script>";
	 echo"<script>window.open('$page','_self')</script>";
      exit();	
}	
	}
	}

?>