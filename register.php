 <?php
require"database/config.php";

?>
 
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Login Form</title>
</head>
<body background="images/back1.jpg">
	<div id="Mainwrapper">
		<form method="POST" enctype="multipart/form-data">
			<table align="center" style="color:white; width: 365px ;height: 200px; position: relative;top:200px;border: 1px solid; ">
				<tr>
					<td style="position: relative;left: 50px;bottom:5px;background-color: #1d2247;">
						<center><h3> Register Form </h3></center>
					</td>
				</tr>
				<tr><td><center>Username</center></td>
						<td><input type="text" name="username" placeholder="Enter Your username" ></td>
				</tr>
				<tr><td><center>Password</center></td>
						<td><input type="password" name="password" placeholder="Enter Your password" ></td>
				</tr>
				
						<td>
						<center><input type="submit" name="Register" value=" Register " style=" background-color:#EDE613  ; color: black; width: 150px; height: 40px;position: relative;top: 5px; "></center>
					</td>
				</tr>
				<tr>
					<td align="center" > Upload  Image 
						 
					</td>
					<td> <input type="file" name="img1" > </td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>
<?<?php 
		if(isset($_POST['Register']))
		{
			$username=$_POST['username'];
			$password= $_POST['password'];
			$img= $FILES['img1']['name'];
			$temp_name= $FILES['img1']['temp_name'];
			$filepath="admin/$img";
			move_uploaded_file($temp_name,$filepath);
			$query2="insert into admin(username, password,img) values ('$username','$password','$img')";
			$runquery2=mysqli_query($con,$query2);
			if(runquery2){
				echo "<script>
				alert('Account Has been registered');</script>";
			}
		}
 ?>