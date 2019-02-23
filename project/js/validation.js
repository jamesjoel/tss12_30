$(document).ready(function(){
	$("#username").blur(function(){
		var a = $(this).val();
		var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
		if(a != "" && reg.test(a) == true)
		{
			$.ajax({
				url : "check_username.php",
				type : "post",
				data : { uname : a},
				success : function(rec){
					if(rec==1)
					{
						$("#username_msg").html("This Username Already Exists!");
					}
					else
					{
						
						$("#username_msg").html("");
					}
				}
			});
		}

	});




	$("#signup_frm").submit(function(){
		var a = $("#full_name").val();
		var b = $("#username").val();
		var c = $("#pass").val();
		var d = $("#re_pass").val();
		var e = $("#add").val();
		var f = $("#contact").val();
		var g = $("#pincode").val();
		var h = $("#city").val();


		var i = $("#male").is(":checked");
		var j = $("#female").is(":checked");


		var check=true;


		if(a=="")
		{
			check=false;
			$("#full_name_msg").html("Insert Your Full Name");
		}
		else
		{
			$("#full_name_msg").html("");

		}

		if(b=="")
		{
			check=false;
			$("#username_msg").html("Insert Your Username/Email");
		}
		else
		{
			$("#username_msg").html("");
			var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
			if(reg.test(b)==false)
			{
				check=false;
				$("#username_msg").html("Insert Correct Email Id");		
			}
			else
			{
				$("#username_msg").html("");		

			}

		}
		if(c=="")
		{
			check=false;
			$("#pass_msg").html("Insert Your Password");
		}
		else
		{
			$("#pass_msg").html("");

		}
		if(d=="")
		{
			check=false;
			$("#re_pass_msg").html("Insert Your Re-Password");
		}
		else
		{
			$("#re_pass_msg").html("");
			if(c != d)
			{
				check=false;
				$("#re_pass_msg").html("Insert Correct Re-Password");
			}
			else
			{
				$("#re_pass_msg").html("");
			}		

		}

		if(e=="")
		{
			check=false;
			$("#add_msg").html("Insert Your Address");
		}
		else
		{
			$("#add_msg").html("");

		}

		if(h=="Select")
		{
			check=false;
			$("#city_msg").html("Select Your City");
		}
		else
		{
			$("#city_msg").html("");

		}

		if(f=="")
		{
			check=false;
			$("#contact_msg").html("Insert Your Contact");
		}
		else
		{
			$("#contact_msg").html("");
			if(isNaN(f)==true)
			{
				check=false;
				$("#contact_msg").html("Insert Numbers Only");
			}
			else
			{
				$("#contact_msg").html("");
				if(f.length != 10)
				{
					check=false;
					$("#contact_msg").html("Insert 10 Only");
				}
				else
				{
					$("#contact_msg").html("");
					
				}
			}

		}

		if(g=="")
		{
			check=false;
			$("#pincode_msg").html("Insert Your PinCode");
		}
		else
		{
			$("#pincode_msg").html("");

		}

		if(i==false && j==false)
		{
			check=false;
			$("#gender_msg").html("Select Gender");
		}
		else
		{
			$("#gender_msg").html("");

		}








		return check;

	});
});