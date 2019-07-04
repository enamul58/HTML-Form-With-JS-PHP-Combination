<?php include 'header.php';?>

<?php
	if(isset($_POST['submit'])){
		$name = $_POST['coder'];
		echo "You Have Selected: ";
		 foreach( $name as $i => $x){
			echo $x.", "; 
		 }
	}

?>


	<form action="" method="post" name="myform" id="myform">
		<table>
			<tr>
				<td>Language: </td>
				<td>
				    <input type="checkbox" name="coder[]" value="PHP"/>PHP
				    <input type="checkbox" name="coder[]" value="JAVA"/>JAVA
				    <input type="checkbox" name="coder[]" value="C#"/>C#
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
