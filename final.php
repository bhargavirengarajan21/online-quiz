<html>
 <?php  $conn = new mysqli("localhost","root","godseygandi","quiz"); ?>
<?php session_start(); ?>
<?php
	//Create Select Query
	$query="select * from shouts order by time desc limit 100";
	$shouts = mysqli_query($conn,$query);

 ?>
<!DOCTYPE html>
<html>
	
	     <h2>You are Done!</h2>
	     <p>Congrats! You have completed the test</p>
	     <p>Final socre: <?php echo $_SESSION['score']; ?></p>
	    
	     <?php session_destroy(); ?>
	


    
  </body>
</html>
