<?php
include("connect.php");
include("header.php");
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#submit-btn").click(function(){
			var u = $("#username").val();
			var p = $("#pass").val();
			$.ajax({
				url : "ajax_auth.php",
				type : "post",
				data : { username : u, password : p },
				success : function(rec){
					if(rec==1){
						$(".error").html("Invalid Username And Password");
					}
					if(rec==2){
						
						$(".error").html("Invalid Password");
					}
					if(rec==4){
						$(".success").show();
						show_preloader();
					}
				}
			});



		});
	});
	var count = 6;
	function show_preloader()
	{
		count--;
		$(".success b").html(count);
		setTimeout("show_preloader()", 1000);
		if(count==1)
			window.location.href="my_account.php";
	}
	





</script>




			<div id="right-content-bottom">
				<h3>User Login</h3>
				<div id="login-box">
					<!-- <form action="auth.php" method="post"> -->
					<table align="center">
						<tr>
							<td>Username</td>
							<td><input name="username" type="text" id="username" class="input" /></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input name="pass" id="pass" type="password" class="input" /></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input class="btn" type="button" id="submit-btn" value="Login">
							</td>
						</tr>
					</table>
						<p class="error">
						
							
						</p>
						<p class="success" style="display: none;">
							Successfull Login, Redirecting To Your Account Page ! <b>5</b>
							<Br />
							<img id="preloader" src="images/2.gif">
						</p>

				<!-- </form> -->
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>