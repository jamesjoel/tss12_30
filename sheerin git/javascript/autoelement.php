<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		div{
			min-height: 200px;
			height:auto;
			width:600px;
			margin:20px auto;
			background-color: #acd789;
			text-align: center;
			padding:10px;
			border-radius:20px;
		}
	</style>
	<script>
		function addmore()
		{
			var tr=document.createElement("tr");			
			tr.setAttribute("id","tblrow");
			var td1=document.createElement("td");
			var td2=document.createElement("td");
			var td3=document.createElement("td");
			var td4=document.createElement("td");
			var td5=document.createElement("td");
			var input1=document.createElement("input");
			var input2=document.createElement("input");
			var input3=document.createElement("input");
			// var anchor=document.createElement("a");
			
			td1.innerHTML="Name";
			td3.innerHTML="Age";
			// anchor.innerHTML="remove";

			input1.setAttribute("type","text");
			input1.setAttribute("placeholder","Name");
			input1.setAttribute("name","name[]");
			// input1.value="sheerin";
			
			input2.setAttribute("type","text");
			input2.setAttribute("placeholder","Age");
			input2.setAttribute("name","age[]");

			input3.setAttribute("type","button");
			input3.setAttribute("value","remove");
			input3.setAttribute("name","btn");
	
			
			
			// anchor.setAttribute("href","#");

			//now creating new element finally with this syntax
			 td2.appendChild(input1);
			 td4.appendChild(input2);
			 // td5.appendChild(anchor);
			 td5.appendChild(input3);

			 tr.appendChild(td1);
			 tr.appendChild(td2);
			 tr.appendChild(td3);
			 tr.appendChild(td4);
			 tr.appendChild(td5);


			document.getElementById('tab').appendChild(tr);
		}
		function remove()
		{
			var parent=document.getElementById('tab');
			var child=document.getElementById('tblrow');
			parent.removeChild(child);
		}
		
	</script>
</head>
<body>
<div>
	<button  onclick="addmore()">add more</button>
 
	<hr/>
	<form action="autosave.php" method="post">
		<input type="submit" value="save">
		<br/>
		<br/>
		<table  id="tab" border=1 align="center" cellspacing="0px" cellpadding="10px">
			<tr >
				<td>name</td>
				<td><input type="text" name="name[]" placeholder="Name"></td>
				<td>age</td>
				<td><input type="text" name="age[]" placeholder="Age"></td>
				<td><input type="button" name="btn" onclick="remove()"value="remove"></td>
				

			</tr>
		</table>
	</form>
</div>

</body>
</html>