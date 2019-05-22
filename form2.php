
</html>
<?php session_start(); ?>
<?php $conn = new mysqli("localhost","root","godseygandi","quiz");
	//Set question number
	$number = (int) $_GET['n'];

	//Get total number of questions
	$query = "select * from questions";
	$results = $conn->query($query) or die($conn->error.__LINE__);
	$total=$results->num_rows;

	// Get Question
	$query = "select * from `questions` where qid = $number";

	//Get result
	$result = $conn->query($query) or die($conn->error.__LINE__);
	$question = $result->fetch_assoc();


	
 ?>
<!DOCTYPE html>
<html>
  <body>
  

  	<p class="question">
	   <?php echo $question['question'] ?>
	</p>
	<form method="post" action="process.php">
	       
<input type=radio name='choice' value ="<?php echo $question['options1'] ?>"> <?php echo $question['options1'] ?><br>
<input type=radio name='choice' value="<?php echo $question['option2'] ?>">  <?php echo $question['option2'] ?><br>
<input type=radio name='choice' value="<?php echo $question['opption3'] ?>">  <?php echo $question['opption3'] ?> <br>
<input type=radio name='choice' value="<?php echo $question['option4'] ?>">  <?php echo $question['option4'] ?><br>

		<br>
	      <input type="submit" value="submit" />
	      <input type="hidden" name="number" value="<?php echo $number; ?>" />
	</form>
  </body>
</html>
