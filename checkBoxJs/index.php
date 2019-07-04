<?php include 'header.php';?>

<script>
function checkBox(){
	var length = document.myform.coder.length;
	var $result = "";
	for( i=0; i<length; i++){
		var checkValue = document.myform.coder[i].checked;
		if(checkValue){
			$result += document.myform.coder[i].value + ", "; 
		}
	}
	var showData = "You Have Selected: "+$result;
	document.getElementById('output').innerHTML = showData;
}


</script>

    <div id="output"></div>
	<form action="" method="post" name="myform" id="myform" onsubmit="checkBox(); return false;">
		<table>
			<tr>
				<td>Language: </td>
				<td>
				    <input type="checkbox" name="coder" value="PHP"/>PHP
				    <input type="checkbox" name="coder" value="JAVA"/>JAVA
				    <input type="checkbox" name="coder" value="C#"/>C#
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
