<?php
function display($id)
{

   $conn = new mysqli("localhost","root","godseygandi","quiz");
     if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
     } 
else
{
echo $id."hello";
$sql = "SELECT * FROM questions where qid=$id";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    $row = $result->fetch_assoc();
    $qid=   $row['qid'];
    $question = $row['question'];
    $option_a = $row['option1'];
    $option_b =$row['option2'];
    $option_c = $row['option3'];
    $option_d = $row['option4'];
    $answer = $row['answer'];
echo "<p>".$question."</p>";
}

}

$conn->close();
}
?>
