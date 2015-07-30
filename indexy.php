 <?php
$user_name = "Guest";
 session_start();

 if(($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['username']))) {
 if (true) {
 $_SESSION['login'] = 1;
 $user_name = $_POST['username'];
 }
 }
 echo "Welcome $user_name </br>";

 if (!isset($_SESSION['login'])) {
 ?>

 <html>
	 <head></head>
	 <body>
		 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			 Username:
			 <input type="text" name="username"> <br />
			 <input type="submit" name="submit" value="Log In">
		 </form>
	 </body>
 </html>
 <?
 }
 else
 {
	header("location: content.php");
}?>