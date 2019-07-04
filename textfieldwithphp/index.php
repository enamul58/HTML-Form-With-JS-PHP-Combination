<?php include 'header.php';?>




<?php 
	if(isset($_POST['username'])){
		$name = $_POST['username'];
		echo "username is: ". $name;
	}
?>

	<form action="" method="post" name="myform" id="myform">
		<table>
			<tr>
				<td>username:</td>
				<td><input type="text" name="username" required="1" /></td>
			</tr>
			<tr>
				<td><t/d>
				<td><input type="submit" value="submit"/>
				    <input type="reset" value="clear"</td>
			</tr>
		</table>
	
	
	</form>








<?php include 'footer.php';?>
