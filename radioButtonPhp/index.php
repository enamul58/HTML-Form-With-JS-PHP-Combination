<?php include 'header.php';?>




<?php 
	if(isset($_POST['gender'])){
		$name = $_POST['gender'];
		//echo "gender name is: ". $name;
		
		if($name == "Meal"){
			echo "your gender is: ".$name; 
		}elseif($name == "Femeal"){
			echo "your gender is: ".$name;
		}else{
			echo "Others";
		}
		
		/* if(!empty($name)){
			$name = null;
		} */
	}
?>

	<form action="" method="post" name="myform" id="myform">
		<table>
			<tr>
				<td>Gender: </td>
				<td>
				    <input type="radio" name="gender" value="Meal"/>Meal
				    <input type="radio" name="gender" value="Femeal"/>Femeal
				    <input type="radio" name="gender" value="Others"/>Others
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="submit"/>
				    <input type="reset" value="clear"/>
				    <input type="submit" value="reset"/>
					
				</td>
			</tr>
		</table>
	
	
	</form>








<?php include 'footer.php';?>
