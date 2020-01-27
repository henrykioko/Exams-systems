<!DOCTYPE html>
<header>
	<link rel="stylesheet" type="text/css" href="styling.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<title></title>
<nav>
	<ul>
	<li><a href ="examiner.php">POST EXAM</a></li>
	<li><a href="examinee.php">DO EXAM</a></li>
	</ul>
	</nav>
	<center>Welcome to examining center</center>
	</header>
<div class="text-box">
<form  method = "post" action = "exainsert.php"/>
<table  border = "0" width = "60%">

<tr><td  width = 30%>Question: </td><td> <textarea name = "Question" maxlength = ""/></textarea></td></tr><br/>
<tr>
<td width = 30% > A. </td><td> <input type ="text" name = "A" maxlength = ""/></td>
</tr>
<br/>
<tr>
<td width = 30%> B.</td>
<td> 
<input type ="text" name ="B" maxlength = ""/>
</td>
</tr>
<tr><td width = 30% > C. </td><td> <input type ="text" name = "C" maxlength = ""/> </td></tr><br/>
<tr><td width = 30% > D. </td><td> <input type ="text" name = "D" maxlength = ""/> </td></tr><br/>
<tr><td width = 30% > Correct Answer:</td><td> <input type ="text" name = "Correct" maxlength = ""/> </td>
</tr>
<br/>
</table>
<center>
<input div class="btn" type="submit" name="submit" value="submit"></div>
</center>
</form>
</div>
</html>

