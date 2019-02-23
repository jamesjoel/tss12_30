<?php
include("../project/connect.php");
$que = "SELECT * FROM state";
$result = mysqli_query($con, $que);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#state").change(function(){
				var a = $(this).val();
				$.ajax({
					url : "get_city.php",
					type : "post",
					data : { sid : a },
					success : function(rec){
						$("#city").html(rec);
					}
				});


			});
		});
	</script>
</head>
<body>
<br />
<br />
<br />
Select State <select id="state">
				<option>Select</option>
				<?php
				while($data = mysqli_fetch_assoc($result))
				{ ?>

					<option value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>


				<?php
				}
				?>
			</select>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
Select City <select id="city">
				<option>Select State First</option>
			</select>
</body>
</html>