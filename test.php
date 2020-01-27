<?php 
if (isset($_POST['submit'])) {
	echo " your answer is"."<br>";
	echo $_POST['gasia'];
}
 ?>
<form action="test.php" method="post">
	<input type="radio" name="gasia" value="A" id="">
	<input type="radio" name="gasia" value="B" checked="true" id="">
	<input type="radio" name="gasia" value="C" id="">
	<input type="submit" value="Submit" name="submit">
</form>