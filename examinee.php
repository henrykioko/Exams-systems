<?php
 include 'nav.php';
// // session_start();
// include 'session.php';
// if(!isset($_SESSION['name'])){

// 	echo "Access denied";

// }else{


$bro = mysqli_connect("localhost", "root" ,"") or die ("We were unable to connect you");

mysqli_select_db($bro,"exams");

$per_page=1;
$query = mysqli_query($bro,"SELECT * FROM exam LIMIT 1,1");

$pages_query = mysqli_query($bro," SELECT * FROM exam ");

$pages = ceil(mysqli_num_rows($pages_query)/$per_page);

$page = (isset($_GET ['page'])) ? (int)$_GET['page']:1;

$start= $page<1? 1:($page -  1)*($per_page);

$query = mysqli_query($bro,"SELECT * FROM exam LIMIT $start,$per_page");
$y=1;



while ($query_row = mysqli_fetch_assoc($query)){
	// for ($y=0; $y <= $pages ; $y++) { 
		# code...
	
 	
 	
	echo "<center>";
	echo $query_row['Question']."<br/>";
	echo "<form action= 'examinee.php' method='post'>";
	echo "<input type='radio' name='radio' value='A'/> &nbsp"."A.&nbsp".$query_row['A']."<br/>";
	echo "<input type='radio' name='radio' value='B'/> &nbsp"."B.&nbsp". $query_row['B']."<br/>";
	echo "<input type='radio' name='radio' value='C'/> &nbsp"."C.&nbsp".$query_row['C']."<br/>";
	echo "<input type='radio' name='radio' value='D'/> &nbsp"."D.&nbsp". $query_row['D']."<br/>";
	echo "<input type='submit' name='submit' value= 'submit'>";
	echo "</form>";
	echo "</center>";
	// $y++;

				
	

}

$prev= $page-1;
$next=$page+$y;
echo $next;

if ($page>1){

// echo "<a href= 'examinee.php?page=$prev'>Prev</a>&nbsp";

}

if ($pages >=1){
	$x=1;

	// while ( $x<= 10) {
	





 if(isset($_POST['submit'])) {
	// echo " your answer is"."<br>";
	echo $_POST['radio']."<br>";
	// echo "click next to see the next question";
    header("Refresh: 0; url='examinee.php?page=$next'");

	

	// echo $answers;

	 for (;$x<=$pages;$x++){
	$query_row = mysqli_fetch_assoc($query);
	$answers=$_POST['radio'];
	$love=$query_row['correct'];
	$y++;
	echo $love; 
	$profs=mysqli_query($bro," SELECT correct FROM exam WHERE ID= '$x'  ");
	foreach ($profs as $prof) {
		$mama= $prof['correct'];	
		if($x==$page ) {
			echo $mama;
		}
	}
		mysqli_query ($bro, "UPGRADE exam SET (next) value('$y') WHERE Id = '$y' ");
 	
	




	// echo ($x==$page) ? '<b><a href="?page='.$x.'">'.$x. '</a></b>':'<a href="?page='.$x.'">'.$x. '</a>';

	// echo "&nbsp";
	// mysqli_query ($bro, "INSERT INTO exam (next)  values ('$x')");
 	// echo $next;
	// header("Refresh: 10; url='examinee.php?page=$x'");
	// mysqli_query($bro, "DELETE next FROM exam WHERE id ='2'" ) or die (mysqli_error($bro));

	// header("refresh: 10; url ='?page='.$x.''");
	// echo $next;
}
// $next++;
}
// }




}/*else{
	echo "<strong>";
	echo "End of the list boy";
	echo "</strong>";*/

		
			if($page<$pages){
	echo "<center>";

 echo "<a href= 'examinee.php?page=$next'>Next</a>";
echo "</center>";
}


?>