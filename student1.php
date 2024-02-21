<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>ATTENDANCE  MANAGEMENT  SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body1">
	    <div style="height: 10px">
	    <img src="images/7.png" style="width: 20%;padding-top: 5%"></div></div>
		<div class="title" style="width: 100%; height:20px">
			<p style="text-align: center; font-size: 40px; color: brown"><b>STUDENT  LOGIN</b></p>
		</div>
	    <nav style="width: 100%; height: 20px; float: left; padding-right: 30px;">
			<ul style="float: right">
				<li class="active"style="padding-right: 90px"><a href="AMShome.php"><b>HOME</b></a></li>
			</ul>
		</nav>
	<div style="width: 100%; height: 100px; float: left; padding-top: 80px;">
		<center><label>Login Id&nbsp&nbsp&nbsp:</label>
		<input class="form-control" placeholder="login" type="Login id" name ="Login id"></center>
		<br>
		<center><label>Password&nbsp&nbsp:</label>
		<input class="form-control" placeholder="password" type="Password" name="Password"></center>
	</div>
		<div style="padding-right: 17 %;padding-top: 3%; padding-left: 50%">
	<a href="student2.php"><button><b>Submit</b></button></a>
	</div>
	</body>
	</html>