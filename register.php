<!DOCTYPE HTML>
<html>
<head>
	<title>Register Form </title>
	<style type="text/css"></style>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="first-container">
		<img class="background-image" src="bg-desktop.svg" alt="">

		<div class="form-container">
			<form action="register_logic.php" method="POST">
				<table border="1" style="margin: 0px auto;">
					<tr> 
						<td colspan="2" style="text-align: center; font-weight: bold; height:30px;">Registration Form</td>
					</tr>
					<tr>
						<td style="text-align: center;">Username :</td>
						<td><input type="text" placeholder="Enter username" name="username" required style="height: 22px; width: 225px"></td>
					</tr>
					<tr>
						<td style="text-align: center;">Firstname :</td>
						<td><input type="text" placeholder="Enter firstname" name="firstname" required style="height: 22px; width: 225px"></td>
					</tr>
					<tr>
						<td style="text-align: center;">Lastname :</td>
						<td><input type="text" placeholder="Enter lastname" name="lastname" required style="height: 22px; width: 225px"></td>
					</tr>
					<tr>
						<td style="text-align: center;">Password :</td>
						<td><input type="password" placeholder="Enter password" name="password" required style="height: 22px; width: 225px"></td>
					</tr>
					<tr>
						<td style="text-align: center;">Email :</td> 
						<td><input type="email" placeholder="Enter email id" name="email" required style="height: 22px; width: 225px"></td>
					</tr>
						<td style="text-align: center;">Gender :</td>
						<td><input type="text" placeholder="Enter gender" name="gender" required style="height: 22px; width: 225px"></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align: center;"><input type="Submit" value="submit" style="height: 30px; font-weight: bold;"></td>
					</tr>
				</table>
			</form>
		</div>
		
	</div>	
	
</body>
</html>
