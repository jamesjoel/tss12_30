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


var i=$("#gender").is(":checked");
var j=$("#gender").is(":checked");

 var check= true;
if(a==""){
	// alert(a);
	check=false;
	$("#fullname_msg").html("insert fullname plez");
}
else{
	$("#fullname_msg").html("");
}
if(b==""){
// 	check=false;
	$("#user_msg").html("insert username");

}
else{
	$("#user_msg").html("");
	 }
if(c==""){
	check=false;
	$("#pass_msg").html("insert password");
}
else{
	$("#pass_msg").html("");
}
if(d=="")
{
	check=false;
	$("#repass_msg").html("insert repass");
}
else{
	$("#repass_msg").html("");
}
if(e==""){
	check=false;
	$("#add_msg").html("insert address");
}
else{
	$("#add_msg").html("");
}
if(f==""){
	check=false;
	$("#contact_msg").html("insert contact");
}
else{
	$("#contact_msg").html("");
	if(isNaN(f)==true){
			$("#contact_msg").html("insert no. only contact");
	}
	else{
			$("#contact_msg").html("");
			if(f.length!=10){
				check=false;
				$("#contact_msg").html("insert 10 digit only");
			}
			else{
					$("#contact_msg").html("");
			}
	}
}
if(g=="")
{
	check=false;
	$("#pincode_msg").html("insert pincode");

}
else{

	$("#pincode_msg").html("");
}
if(h=="city"){
	check=false;

	$("#city_msg").html("insert city");

}
else{

	$("#city_msg").html("");
}
if(i==false && j==false){
	$("#gender_msg").html("plz select gender");
}
else{
	$("#gender_msg").html("");
}

return check;

});
});