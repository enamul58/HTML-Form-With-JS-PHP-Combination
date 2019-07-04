<?php include 'header.php';?>

	<script>
        function selectFunction(){
			var index = document.myform.coder.selectedIndex;
			var value = document.myform.coder.options[index].value;
			var showData = "You Are "+value+" Coder";
			document.getElementById('output').innerHTML = showData;
		}		

	</script>

    <div  id="output"> </div>

	<form action="" method="post" name="myform" id="myform"  onsubmit="selectFunction(); return false;">
		<table>
			<tr>
				<td>Language: </td>
				<td>
				    <select name="coder">
						<option>select one</option>
						<option value="PHP">PHP</option>
						<option value="java">Java</option>
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
