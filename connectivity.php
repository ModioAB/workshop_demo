<?php
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'hackon');
 define('DB_USER','root');
 define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

  /*
  $ID = $_POST['user'];
  $Password = $_POST['pass']; */
  function SignIn()
   {
    session_start(); //starting the session for user profile page
    if(!empty($_POST['user_input'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
    { 
    	$query = mysql_query("SELECT * FROM users where userName = '$_POST[user_input]' AND pass = '$_POST[pass_input]'") or die(mysql_error());
    	$row = mysql_fetch_array($query) or die(mysql_error());
    	if(!empty($row['userName']) AND !empty($row['pass']))
    	{
    		$_SESSION['UserName'] = $row['pass'];
    		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
    	}
    	else
    	{
    		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
    	}
    }
    else
    {
    	echo "PLEASE INPUT SOMETHING";
    }
   }
   if(isset($_POST['submit']))
   	{
    	SignIn();
    }
?>
