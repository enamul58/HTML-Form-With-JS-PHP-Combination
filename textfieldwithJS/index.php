<?php include 'header.php';?>
<script>
function myFunction(){
var name = document.myform.username.value;
var showData = "username is: "+ name;
document.getElementById('output').innerHTML = showData;
	
}
</script>


    <div id="output"></div>
	<form action="" method="post" name="myform" id="myform" onsubmit="myFunction(); return false; ">
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
