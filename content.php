<?php
 session_start();
 session_regenerate_id(true);
 if (isset($_SESSION['login']))
 {
	 ?>
	 
	 <a href="logout.php">Get out</a><br />
	 

	 <form action="content.php" method="GET">
		<input type=text name=write />
	 	<input type=submit name=submit value='Write this'/>
	 </form>

	 <?
	 if(isset($_GET['write']))
	 {
	 	
			 $myFile="/opt/lampp/htdocs/text";
			 $fh = fopen($myFile, 'w') or die("can't open file");
			 fwrite($fh, $_GET['write']."\n");
			 echo $_GET['write']." has been written down on file";
		
		// else{
		// 	echo "Please don't hack..";
		// }
	 }
	 if(isset($_GET['page_id']))
	 {
	 	$page_id = mysql_real_escape_string($_GET['page_id']);
	 	echo "<h1>$page_id</h1>";
	 }
}
else
{
    echo "You are not logged in.<br />";
	echo "<a href=indexy.php>Login</a><br>";
}
?>