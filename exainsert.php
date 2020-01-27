<?php
if (isset($_POST['submit'])) {


$Question = $_POST ['Question'];

$A = $_POST['A'];

$B = $_POST['B'];

$C = $_POST['C'];

$D = $_POST['D'];

$Correct=$_POST['Correct'];


if ($Question && $A && $B && $C && $D && $Correct){




	$bro= mysqli_connect("localhost", "root", "") or die ("we couldnt connect!");

	mysqli_select_db($bro, "exams");

	
mysqli_query ($bro, "INSERT INTO exam (Question, A, B, C, D, Correct) values ('$Question', '$A', '$B', '$C', '$D', '$Correct')");

$registered = mysqli_affected_rows($bro);

echo "Questions submited successfully";

// include "home.php";

header("Refresh:3; url=examiner.php");



mysqli_close($bro);

}
else{

	echo "fill every field bro";
}
}

?>