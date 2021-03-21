<html>
	<head>
    <title>log in </title>
  </head>
  <style>
  h1{
	  text-align: center;
  }
    h2 {
  position: absolute;
  left: 450px;
  top: 100px;
  
  border: 10px black;
  padding-top: 50px;
  padding-right: 50px;
  padding-bottom: 50px;
  padding-left: 80px;
  background: Wheat;
  background-clip: padding-box;
}

 

  
  
  </style>
	<body>
	<?php
	$nameErr = $passErr="";
    $uname = $pass= "";
	if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

      if (empty($_POST["uname"]))
      {
  		$nameErr = "Username is required";
  	}
     else if(strlen($_POST["uname"])<5)
  	 {
  	  $nameErr="Enter valid name";
  	 }
  	 else
     {
  		 $uname=$_POST["uname"];
  	 }
  	     if (empty($_POST["pass"]))
      {
  		$passErr = "password is required";
  	   }
     else if(strlen($_POST["pass"])<6)
  	 {
  	  $passErr="password must be Atleast 6 charecter";
  	 }
  	 else
     {
  		 $pass=$_POST["pass"];
  	 }
	 
	 if(empty($_POST["uname"])||empty($_POST["pass"])){
		 echo "Fill all the forms";
	 }
	 else{
		 header("location: post_login.php");
	 }
  	  
    }
	?>
		
<h1><i>WELCOME TO EDUCARE</i></h1>
Log in to your Accout<br>
		<h2><form action="" method="post">
			<table>
				<tr>
					<img src="login.jpg" width="300" height="150">
					<td><input type="email" placeholder="Username" name="uname" value="<?php echo $uname?>"<span><?php echo $nameErr
					?></span></td>

				</tr>
				<tr>
					<td><input type="password" placeholder="Password" name="pass" value="<?php echo $pass?>"<span><?php echo $passErr
					?></span></td>
				</tr>

				<tr>
					<td colspan="2"><input type="submit" value="Log in"></td>
				</tr>
				
     <tr><td> <input type="checkbox" checked="checked" name="remember"> Remember me</td></tr>

			</table>


		</form></h2>
		<?php

echo $uname;
echo "<br>";
echo $pass;

?>
	</body>
</html>