$(document).ready(function(){
	$("#sign").submit(function(){
   var a=$("#fullname").val();
   var b=$("#username").val();
   var c=$("#add").val();
   var d=$("#city").val();
   var i=$("#male").is(":checked");
   var j=$("#female").is(":checked");
   var f=$("#contact").val();
   var g=$("#pincode").val();
   var h=$("#pass").val();
   var o=$("#repass").val();



   check=true;
   if(a==""){
   	check =false;
   	$("#fullname_msg").html("isert fullname");
   }
   else
   {
   	$("#fullname_msg").html("");
   }
   if(b=="")
   {
   	check=false;
   		$("#username_msg").html("isert username");
   }
   else
   {
   	$("#username_msg").html("");
   }
   if(h=="")
 {
   check =false;
      $("#pass_msg").html("isert password");
   }
   else
   {  
      $("#pass_msg").html("");
   }
   if(o=="")
      {
      $("#repass_msg").html("insert repass");
   }
   else{
      
      $("#repass_msg").html("");

   }

 if(c=="")
 {
 	check =false;
   	$("#add_msg").html("isert address");
   }
   else
   {
   	$("#add_msg").html("");
   }
   if(f=="")
   {
   	check=false;
   	$("#contact_msg").html("contact no");
   	if(isNaN(f)==true){
   		$("#contact_msg").html("insert no only no");
   	}
   	else
   	{	if(f.length!=10)
   		{
   		$("#contact_msg").html("please insert 10 digit no");
   		}
   		else{
   			$("#contact_msg").html("");
   		}
   	}

   }
    else
   {
   	$("#contact_msg").html("");
   }

   if(i==false && j==false){
   	$("#gender_msg").html("seleted gender please");
   }
   else{
   	$("#gender_msg").html("");
   }

   if(g=="")
   {
   	check=false;
   	$("#pincode_msg").html("pincode no");
   	if(isNaN(g)==true){
   		$("#pincode_msg").html("insert no only no");
   	}
   	else
   	{	if(g.length!=6)
   		{
   		$("#pincode_msg").html("please insert 6 digit no");
   		}
   		else{
   			$("#pincode_msg").html("");
   		}
   	}

   }
    else
   {
   	$("#pincode_msg").html("");
   }

if(d=="select")
{
	check=false;
	$("#city_msg").html("insert city");
}
else
{
	$("#city_msg").html("");
}
return check;


	});
});