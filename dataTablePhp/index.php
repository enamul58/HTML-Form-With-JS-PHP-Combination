<?php include 'header.php';?>

	<?php
		if(isset($_POST['submit'])){
			$name   = $_POST['name'];
			$gender = $_POST['gender'];
			$dept   = $_POST['dept'];
			$coder  = $_POST['coder'];
	?>


     <table class="tblone">
		<tr>
			<td colspan="2" align="center">OUTPUT</td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo $name; ?></td>
		</tr>
		<tr>
			<td>Gender</td>
			 <?php if($gender=="Meal"){ ?>
				   <td><?php echo "Meal";?></td>
			 <?php }else { ?>
					<td><?php echo "Femeal";?></td>
			 <?php } ?>
					
		</tr>
		<tr>
			<td>Department</td>
			  <?php if($dept == "CSE"){ ?>
				  <td><?php echo "CSE";?></td> 
			  <?php }elseif($dept == "Maths"){ ?>
				    <td><?php echo "Maths"; ?></td>
			  <?php }else{ ?>
				  <td><?php echo "Physice";?></td>
			  <?php } ?>
		</tr>
		<tr>
			<td>Language</td>
			<td><?php  echo $coder; ?></td>
		</tr>
	 </table>
    <?php } ?>
	
	
	<form action="" method="post" name="myform" id="myform">
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" required="1"/></td>
			</tr>
			<tr>
				<td>Gender: </td>
				<td>
					<input type="radio" name="gender" value="Meal"/>Meal
					<input type="radio" name="gender" value="Femeal"/>Femeal
				</td>
			</tr>
			<tr>
				<td>Department</td>
				<td>
				    <input type="checkbox" name="dept" value="CSE"/>CSE
				    <input type="checkbox" name="dept" value="Maths"/>Maths
				    <input type="checkbox" name="dept" value="Physice"/>Physice
				</td>
			</tr>
			<tr>
				<td>Language: </td>
				<td>
				    <select name="coder">
						<option value="">select one</option>
						<option value="PHP">PHP</option>
						<option value="JAVA">Java</option>
						<option value="C#">C#</option>
						<option value="C++">C++</option>
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
