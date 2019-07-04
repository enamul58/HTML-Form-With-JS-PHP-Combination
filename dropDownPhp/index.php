<?php include 'header.php';?>

<?php
 
 if(isset($_POST['submit'])){
	 $coder = $_POST['coder'];
	 echo "You Are ".$coder." Coder";
 }

?>


	<form action="" method="post" name="myform" id="myform" onsubmit="checkBox(); return false;">
		<table>
			<tr>
				<td>Language: </td>
				<td>
				    <select name="coder">
						<option>select one</option>
						<option value="PHP">PHP</option>
						<option value="java">Java</option>
						<option value="C#">C#</option>
						<option value="C++">c++</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"/>
				    <input type="reset" value="clear"/>
					
				</td>
			</tr>
		</table>
	
	
	</form>


<?php include 'footer.php';?>
