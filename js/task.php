<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		div{
			margin: 20px auto;
			width: 600px;
			min-height: 200px;
			background-color: #CCC;
			border-radius: 10px;
			height: auto;	
			text-align: center;
			padding: 10px;
		}
	</style>
	<script type="text/javascript">
		var n = 1;
		function add_more()
		{
			// n++;
			var tr = document.createElement("tr");

			var td1 = document.createElement("td");
			var td2 = document.createElement("td");
			var td3 = document.createElement("td");
			var td4 = document.createElement("td");

			var input1 = document.createElement("input");
			var input2 = document.createElement("input");

			td1.innerHTML="Name";
			td3.innerHTML="Age";

			input1.setAttribute("type", "text");
			input1.setAttribute("placeholder", "Name");
			// input1.setAttribute("name", "name"+n);
			input1.setAttribute("name", "name[]");


			input2.setAttribute("type", "text");
			input2.setAttribute("placeholder", "Age");
			// input2.setAttribute("name", "age"+n);
			input2.setAttribute("name", "age[]");
			

			td2.appendChild(input1);
			td4.appendChild(input2);

			tr.appendChild(td1);
			tr.appendChild(td2);
			tr.appendChild(td3);
			tr.appendChild(td4);

			document.getElementById("tab").appendChild(tr);



		}
	</script>
</head>
<body>
<div>
	<button onclick="add_more()">Add More</button>
	<hr />
	<form action="save.php" method="post">
		<input type="submit" value="Save">
		<br />
		<br />
		<table id="tab" align="center" border="1" cellspacing="0" cellpadding="10">
			<tr>
				<td>Name</td>
				<td><input name="name[]" type="text" placeholder="Name"></td>
				<td>Age</td>
				<td><input name="age[]" type="text" placeholder="Age"></td>
			</tr>
		</table>



	</form>
</div>
</body>
</html>