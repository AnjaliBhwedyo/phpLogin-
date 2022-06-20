<? php
require"database/config.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Login Form</title>
</head>
<body background="images/back2.jpg">
	<div id="Mainwrapper">
		<form method="POST" enctype="multipart/form-data">
			<table align="center" style="color:white; width: 365px ;height: 200px; position: relative;top:200px;border: 1px solid; ">
				<tr>
					<td style="position: relative;left: 50px;bottom:5px;background-color: #1d2247;">
						<center><h3>Login Form </h3></center>
					</td>
				</tr>
				<tr><td><center>Username</center></td>
						<td><input type="text" name="username" placeholder="Enter Your username"  value="admin"></td>
				</tr>
				<tr><td><center>Password</center></td>
						<td><input type="password" name="password" placeholder="Enter Your password" ></td>
				</tr>
				<tr><td><center>
					
						<input type="button" name="SignIn" value="SignIn" style="background-color: #42729B:color:white; height: 40px;position: relative;top: 5px" >
					</a>
					</center></td>
						<td>
						<center><a  href="register.php"><input type="button" name="Register" value=" Register " style=" background-color:#EDE613  ; color: black; width: 150px; height: 40px;position: relative;top: 5px; "></a></center>
					</td>
				</tr>
			</table>
		</form>
	</div>

</body>
</html>

<? php

 if(isset($_POST['SignIn'])) {
    $username =$_POST['username'];
    $password =$_POST['password'];
    $query1="SELECT * FROM admin WHERE username ='$username' AND password='$password'";
    $runquery1=mysqli_query($con,$query1);
    if (mysqli_num_rows($runquery1)>0){
       header('location:mainpage.php');
       
     }
    
    else {
       header('location:register.php');
    }
}


?>

