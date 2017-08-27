<!DOCTYPE HTML>
<?php
session_start();
$id=$_GET['id'];
?>
<html>
  <head>
    <title>upload event data</title>
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
            <li><a href="#one" class="active">upload profile picture</a></li>
             
            
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
                        <li><a href="comp-details.php">Company Details</a></li>
                        <li><a href="home.php">Home</a></li>
                        
                      </ul>
                    
                  </div>
                </div>
                </div>  
              </header> <!-- End of header div -->  


              <div class="row">
                <div class="col-md-12">
                <h4 align="center"  style="color:#286E88;  font-family: 'Kaushan Script', cursive;">Set profile picture  here..</h4>
					<br>
      <form class="form-horizontal" name="upload-event-data" method="post" enctype="multipart/form-data" action="">
<fieldset>
 
<!-- Form Name -->
 

 <!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton" style="color:#286E88;  font-family: 'Kaushan Script', cursive;  ">Select picture</label>
  <div class="col-md-4">
    <input id="filebutton" name="file[]" class="input-file" type="file"  multiple="multiple">
  </div>
</div>
 
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton" style="color:#286E88; font-family: 'Kaushan Script', cursive; ">click upload</label>
  <div class="col-md-4">
    <button id="singlebutton" type="submit" name="upload" class="btn btn-success">upload</button>
  </div>
</div>
<input type="hidden" name="eventid" value="<?php echo $id;?>" />

</fieldset>
</form>

                

                  
                </div>
                
              </div>





              </section> <!-- section one end -->

             
<br><br>            
              
<br><br>     
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

<?php
$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$valid_video_formats=array("mp4");
$max_file_size=8388608;
 
 if(isset($_POST['upload'])){
	foreach($_FILES['file']['tmp_name'] as $key => $tmp_name){	
	 $file_name = $_FILES['file']['name'][$key];
	 $file_type = $_FILES['file']['type'][$key];
	 $file_size = $_FILES['file']['size'][$key];
	 $file_tmp = $_FILES['file']['tmp_name'][$key];
	 //$file_extension= pathinfo($file_name,PATHINFO_EXTENSION);
	  $event_id=$_POST['eventid'];
	 $file_ext=explode('.',$_FILES['file']['name'][$key])	;
     $file_ext=end($file_ext);  
     $file_ext=strtolower(end(explode('.',$_FILES['file']['name'][$key]))); 
 
	 if(empty($file_name)){
		 echo "<script>alert('please select file')</script>";
		  
			 exit();  
	 }
	 if(in_array($file_ext,$valid_video_formats)===false && in_array($file_ext,$valid_formats)===false){
		 echo "<script>alert('your file  $file_name  have no valid format')</script>";
	 }
	 if($file_size>$max_file_size){
		echo "<script>alert('your file  $file_name  have no valid size')</script>"; 
		 
	 }
	  else{
		 $con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con);
	 
	if(in_array($file_ext,$valid_video_formats)===true){
	move_uploaded_file($file_tmp, "event_video/$file_name");
$q=mysql_query("INSERT INTO `event_video`(`event_id`, `name`, `type`, `size`, `extension`) VALUES ('$event_id','$file_name',' $file_type',' $file_size','$file_ext')");
if($q){
	 echo "<script>alert('your video $file_name uploaded successfully')</script>";
	// echo"<script>window.open('profile.php','_self')</script>";
     // exit();
	 }
	 else{
		 echo "<script>alert('your video $file_name uploading field')</script>";
	//exit();
	}
	 }
	  
	 if(in_array($file_ext,$valid_formats)===true){
		 move_uploaded_file($file_tmp, "event_picture/$file_name");
		 $q1=mysql_query(" INSERT INTO `event_picture`(`event_id`, `name`, `type`, `size`, `extension`) VALUES ('$event_id','$file_name',' $file_type',' $file_size',' $file_ext')");
if($q1){
		  
	     echo "<script>alert('your image $file_name  uploaded successfully')</script>";
		// echo"<script>window.open('profile.php','_self')</script>";
	 	//exit();
	 }
	 else{
	echo "<script>alert('your image $file_name uploading field')</script>"; 
			 	//exit();	 
	 }
	}
	 
	 }
	  
	 }
	  
	 echo"<script>window.open('profile.php','_self')</script>";  
	 exit();	
 }
?>
