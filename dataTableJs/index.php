<?php include 'header.php';?>

	<script>
        function formFunction(){
			var name = document.myform.name.value;
			var showData = " "+name;
			document.getElementById('showName').innerHTML = showData;
			
			var genLength = document.myform.gender.length;
			for( i=0; i<genLength; i++){
				var checkValue = document.myform.gender[i].checked;
				if(checkValue){
					getResult = document.myform.gender[i].value;
				}
			}
			document.getElementById('showGender').innerHTML = getResult;

		    var depLength = document.myform.gender.length;
			for( i=0; i<depLength; i++){
				var checkDep = document.myform.dept[i].checked;
				if(checkDep){
					depValue = document.myform.dept[i].value;
				}
			}
			document.getElementById('showDepartment').innerHTML = depValue;
			
			var index = document.myform.coder.selectedIndex;
			var value = document.myform.coder.options[index].value;
			document.getElementById('output').innerHTML = value;
		}				

	</script>
     <table class="tblone">
		<tr>
			<td colspan="2" align="center">OUTPUT</td>
		</tr>
		<tr>
			<td>Name</td>
			<td><span id="showName"></span></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><span id="showGender"></span></td>
		</tr>
		<tr>
			<td>Department</td>
			<td><span id="showDepartment"></span></td>
		</tr>
		<tr>
			<td>Language</td>
			<td><span id="output"></span></td>
		</tr>
	 </table>
	 
	<form action="" method="post" name="myform" id="myform"  onsubmit="formFunction(); return false;">
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
