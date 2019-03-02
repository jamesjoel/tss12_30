$(document).ready(function(){
	$("#sign").submit(function(){
	var a=$("#fullname").val();
	var b=$("#username").val();
	var c=$("#pass").val();
	var d=$("#repass").val();
	var e=$("#add").val();
	var f=$("#contact").val();
	var g=$("#pincode").val();
	var h=$("#city").val();
	var x=$("#male").is(":checked");
	var y=$("#female").is(":checked");
	// alert(a);

	var check =true;

	if(a=="")
	{
		// alert(a);
		check=false;
		$("#fullname_msg").html("insert full name");
	}
	else{
		$("#fullname_msg").html("");
	}
	if(b=="")
	{	
		check=false;
		$("#user_msg").html("insert user name");
	}
	else{
		$("#user_msg").html("");
			var reg = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
			if(reg.test(b)==false)
			{
				check=false;
				$("#user_msg").html("Insert Correct Email Id");		
			}
			else
			{
				$("#user_msg").html("");		

			}





	}
	if(c==""){
		check=false;
		$("#pass_msg").html("please insert correct password");
	}
	else{
		$("#repss_msg").html("please insert correct repassword");
	}
	if(e=="")
	{
		check=false;
		$("#add_msg").html("address properly");
	}
	else{
		$("#add_msg").html("");
	}
	if(f==""){
		check=false;
		$("#contact_msg").html("inserted contact");
	}
	else{

		$("#contact_msg").html("");
		if(isNaN(f)==true)
		{
			$("#contact_msg").html("insert no. only");
		}
		else{
			$("#contact_msg").html("");
			if(f.length!=10){
				check=false;
				$("#contact_msg").html("insert 10 digit no. only");
			}
			else{
				$("#contact_msg").html("");
			}
		}
	}
	if(g==""){
		check=false;
		$("#pincode_msg").html("insert pincode please");
	}
	else
	{
		$("#pincode_msg").html("");
	}
	if(h=="Select")
	{
		check=false;
		$("#city_msg").html("insert city");
	}
	else{
		$("#city_msg").html("");
	}
	if(x==false && y==false)
	{
		check=false;
		$("#gender_msg").html("plesase Select");
	}
	else
	{
		$("#gender_msg").html("");
	}

	return check;

	});
});
