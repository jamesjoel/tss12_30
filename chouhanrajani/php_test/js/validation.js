$(document).ready(function(){
  $("#sign").submit(function(){
  	var a=$("#fullname").val();
  		var b=$("#username").val();
var c=$("#pass").val();
var d=$("#repass").val();
var e=$("#add").val();
var f=$("#city").val();
var g=$("#contact").val();
var h=$("#pincode").val();
var x=$("#male").is(":checked");
var y=$("#female").is(":checked");



  	var check=true;


  	if(a=="")
  	{
  		check=false;
  		// alert(a);
  		$("#fullname_msg").html("insert fullname please");
  	}
  	else{
  		$("#fullname_msg").html("");
  	}
  	if(b=="")
  	{

  		check=false;
  		$("#username_msg").html("insert username name");
  	}
  	else
  	{   

  		$("username_msg").html("");
  		var regl = (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/);
  		if(regl.test(b)==false)
  		{
  			check=false;
  			// alert(b);
  			$("username_msg").html("insert proper email id username");
  		}
  		else
  		{
  		$("#username_msg").html("");
  		}
  	}
  	if(c=="")
  	{
  		check=false;
  		$("#pass_msg").html("insert password");
  	}
  	else{
  		$("#repass_msg").html("insert correct repassword");
  	}
  	if(h=="")
  	{
  		check=false;
  		$("#pincode_msg").html("insert pincode");
  	}
  	else{
  		      $("#pincode_msg").html("");
  		      if(isNaN(h)==true){
  			     $("#pincode_msg").html("insert no only");
  		        }
  		      else{
  			     if(h.length!=6){
  				      $("#pincode_msg").html("insert 6 digit only");
  			       }
  			     else{
  				    $("#pincode_msg").html("");
  			       }
  		          }
  	     }
  	if(e=="")
  	{
  		check=false;
  		$("#add_msg").html("insert address");
  	}
  	else{
  		$("add_msg").html("");
  	}
  	if(f=="select"){
  		check=false;
  		$("#city_msg").html("select city");
  	            }
  	     else
  	     {
  		$("#city_msg").html("");
  	     }
  	if(x==false && y==false){
  		        check =false;
  		      $("#gender_msg").html("please select gender");
  	         }
  	else{
  		$("#gender_msg").html("");
  	}
  	if(g==""){
  		check =false;
  		$("#contact_msg").html("insert contact");
  	}
  	else{
  		$("#contact_msg").html("");
  		if(isNaN(g)==true){
  			$("#contact_msg").html("insert no only");
  		}
  		else
  		{
  			$("#contact_msg").html("");
  			if(g.length!=10){
  				$("#contact_msg").html("insert 10 digit no");
  			}
  			else
  			{
  				$("#contact_msg").html("");
  			}
  		}
  	}
  	return check;
  });
});