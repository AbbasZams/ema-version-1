<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
  <head>
    <title>As organizer</title>
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
										<div><span class="image avatar"><img src="images/ABB.png" alt="" /></span></div> 
									<?php
									}
									$username = mysql_query("SELECT `fristname`,`lastname` FROM `user` WHERE email='$_SESSION[email]' ")or die('user selection  query error');
									$name=mysql_fetch_array($username)
									?>
					<br>
					<h1 id="logo"><?php echo $name[0]." ".$name[1]; ?></h1>
          <br>
        

        </header>
        <nav id="nav">
          <ul>
            <li><a href="#one" class="active">upload profile picture</a></li>
             
            <li><a href="#four">Contact EMA</a></li>
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
                <h4 align="center"  style="color:#286E88;  font-family: 'Kaushan Script', cursive;">Set company logo here..</h4>
					<br>
      <form class="form-horizontal" name="upload-logo" method="post" enctype="multipart/form-data" action="">
<fieldset>
 
<!-- Form Name -->
 

 <!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton" style="color:#286E88;  font-family: 'Kaushan Script', cursive;  ">Select logo</label>
  <div class="col-md-4">
    <input id="filebutton" name="image" class="input-file" type="file">
  </div>
</div>
 
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton" style="color:#286E88; font-family: 'Kaushan Script', cursive; ">click upload</label>
  <div class="col-md-4">
    <button id="singlebutton" type="submit" name="upload" class="btn btn-success">upload</button>
  </div>
</div>

</fieldset>
</form>

                

                  
                </div>
                
              </div>





              </section> <!-- section one end -->

             
            <!-- Three -->
              
              <br><br><br><br>
              <br><br><br>
              <br>

            <!-- Four -->
              

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
 if(isset($_POST['upload'])){
	  
	 $image_name = $_FILES['image']['name'];
	 $image_type = $_FILES['image']['type'];
	 $image_size = $_FILES['image']['size'];
	 $image_tmp = $_FILES['image']['tmp_name'];
	 $image_extension= pathinfo($image_name,PATHINFO_EXTENSION);
	  $for='logo';
	 
 if(empty($image_name)){
		 echo "<script>alert('please select logo')</script>";
		 echo"<script>window.open('upload_company_logo.php','_self')</script>";
			 exit();  
	 }
	 else{
		 $con=mysql_connect('localhost','root','') or die("database connectivity error");
mysql_select_db('ema',$con);

$query = " SELECT * FROM `profile_picture` WHERE email='$_SESSION[email]' and `profile_picture`.for='$for'" ;

$run = mysql_query($query)or die('selection quiry error in upload_company_logo.php page');

if(mysql_num_rows($run)>0){
	 $qu=mysql_query("UPDATE `ema`.`profile_picture` SET `name` = '$image_name', `type` = '$image_type', `size` = '$image_size',`extension` = '$image_extension',`for`='$for' WHERE `profile_picture`.`email` = '$_SESSION[email]' AND `profile_picture`.`for` = '$for' ")or die('updation query error');
	if($qu){
		move_uploaded_file($image_tmp, "profile_pictures/$image_name");
		echo "<script>alert('Updated successfully')</script>";
	          echo"<script>window.open('comp-details.php','_self')</script>";
	}
	}
	else {
	 

	 if($image_extension=="jpeg" ||"jpg"){
		 move_uploaded_file($image_tmp, "profile_pictures/$image_name");
		 $q1=mysql_query(" INSERT INTO `profile_picture`(`email`, `name`, `type`, `size`, `extension`,`for`) VALUES ('$_SESSION[email]','$image_name',' $image_type',' $image_size',' $image_extension','$for') ");
if($q1){
		  
		 echo "<script>alert('your logo  uploaded successfully')</script>";
		 echo"<script>window.open('comp-details.php','_self')</script>";
	 	exit();
	 }
	 else{
	echo "<script>alert('your logo  uploading field please select right pic and try again')</script>"; 
			 	echo"<script>window.open('comp-details.php','_self')</script>";
				exit();	 
	 }
	}
	
	}
 
}

 }

?>