<?php include 'header.php';?>


<script>
function myCheck(){
	var genderLen = document.myform.gender.length;
	for(i=0; i<genderLen; i++){
		var checkValue = document.myform.gender[i].checked;
		if(checkValue){
			var genderName = document.myform.gender.value;
		}
	}
	var showData = "Your Gender Is: "+genderName;
	document.getElementById('output').innerHTML = showData;
}
</script>

  <p id="output"></p>

	<form action="" method="post" name="myform" id="myform" onsubmit="myCheck(); return false;">
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
