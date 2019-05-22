<?php  $conn = new mysqli("localhost","root","godseygandi","quiz"); ?>
<?php session_start(); ?>
<?php 

      //Check to see if score is set_error_handler
	if (!isset($_SESSION['score'])){
	   $_SESSION['score'] = 0;
	}

//Check if form was submitted
if($_POST){
	$number = $_POST['number'];
	$selected_choice = $_POST['choice'];
	$next=$number+1;
	$total=4;

	//Get total number of questions
	$query="SELECT * FROM `questions`";
	$results = $conn->query($query) or die($conn->error.__LINE__);
	$total=$results->num_rows;

	//Get correct choice
	$q = "select * from `questions` where qid = $number";
	$result = $conn->query($q) or die($conns->error.__LINE__);
	$row = $result->fetch_assoc();
	$correct_choice=$row['answer'];
        echo $correct_choice;
        echo $selected_choice;

	//compare answer with result
	if($correct_choice == $selected_choice){
		$_SESSION['score']++;
	}

	if($number == $total){
		header("Location: final.php");
		exit();
	} else {
	        header("Location: form2.php?n=".$next."&score=".$_SESSION['score']);
	}
}
?>
