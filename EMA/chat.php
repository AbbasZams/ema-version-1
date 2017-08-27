<html>
<?php
 session_start();
$senderemail= $_SESSION['senderemail'] =$_GET['senderemail'];
?>
<head>
	<title>
		chat page
	</title>
	<style type="text/css">
		*{
			margin:0;
			padding:0;
			font-family: tahoma, sans-serif;
			box-sizing: border-box;
		}
		
		body{
			background: #1ddced;
		}
		.chatbox{
			width: 500px;
			min-width: 390px;
			height: 600px;
			background: #fff;
			padding: 25px;
			margin: 20px auto ;
			box-shadow: 0 3px #ccc;

		}
		.chatlogs{
			padding: 10px;
			width: 100%;
			height: 450px;
			 overflow-x: hidden;
			 overflow-y: scroll;
			 writing-mode: bottom 100px;

		}
		.chatlogs::-webkit-scrollbar{
			width: 10px;
		}
		.chatlogs::-webkit-scrollbar-thumb{
			border-radius: 5px;
			background: rgba(0,0,0,-1);
		}
		 
.chat-form{
	margin-top: 20px;
	display: flex;
	align-items: flex-start;
}
 .chat{
			display: flex;
			flex-flow: row wrap;
			align-items: flex-end;
			margin-bottom: 10px;
		}
	.chat .user-photo{
		width: 60px;
		height: 60px;
		background: #ccc;
		border-radius: 50%;
		overflow: hidden;

	}
	 .chat .user-photo img{
		width: 100%;
		height: 100%;
		 
	}
	.chat .chat-message{
		width: 80%;
		padding: 15px;
		margin: 5px 10px 0px;
		border-radius: 10px;
		color: #fff;
		font-size: 20px;

	}
	.friend .chat-message{
		background: #1adda4;
	}
	.self .chat-message{
background: #1ddced;
order:-1;
	}
.chat-form textarea{
	background: #fbfbfb;
	width: 75%;
	height:50px;
	border:2px solid #eee;
	border-radius: 3px;
	resize: none;
	padding: 10px;
	font-size: 18px;

color: #333;
}
.chat-form textarea:focus {
	background: #fff;

}
.chat-form textarea::-webkit-scrollbar{
			width: 10px;
		}
		.chat-form textarea::-webkit-scrollbar-thumb{
			border-radius: 5px;
			background: rgba(0,0,0,-1);
		}

.chat-form button{
	background: #1ddced;
	padding: 5px 15px;
	font-size: 30px;
	color: #fff;
	border:none;
	margin:0 10px;
	border-radius: 3px;
	box-shadow: 0 3px 0 #0eb2c1;
	cursor: pointer;
	-webkit-transition:background .2s ease ;
	-moz-transition:background .2s ease ;
	-o-transition:background .2s ease ;
}
.chat-form button:hover{
background: #13c8d9;	
}

	</style>
	 
	<script type="text/javascript" src="js/jquery.min.js"></script>
 	<script type="text/javascript">
 	$(document).ready(function() {
$(document).bind('keypress', function(e) {
	if(e.keyCode==13){
		$('#my_form').submit();
		$('#massage').val("");
		$('#snd').val("");
		 
	}

});
 	});
 </script>
 <script type="text/javascript">
 	function post() {
 		var massage = document.getElementById("massage").value;
 		var sender = document.getElementById("snd").value;
 		 
 		if(massage && sender) {
 			$.ajax
 			({
 				type: 'post',
 				url: 'massageajax.php',
 				data:
 				{ user_massage:massage,
 					user_mail:sender
 					 
 				},
 				success: function (response) {
 					document.getElementById("massage").value="";
 					 
 					 
 				}
 			});
 		}
 		return false;

 	}
 </script>
  <script type="text/javascript">
 	function autoRefresh_div() {
 		$("#result").load("massageload.php").show().;
 	}
 	setInterval('autoRefresh_div()' , 2000);
 </script>
	 
</head>
<body>
<div class="chatbox">
<div class="chatlogs">
  
<div id="result"> 
 <?php
 include("massageload.php");
 ?>
</div>

	</div> 
 <form method='post' action="#"  id="my_form" onsubmit="return post();" name="my_form">
	<div class="chat-form">
	<textarea id="massage"></textarea>
	<button type="submit" name="btn" id="btn">Send</button>
	<input type="hidden" id="snd" value="<?php echo $senderemail;?>">
	</div>
	</form>	
	</div>
	 
	
</body>
</html>