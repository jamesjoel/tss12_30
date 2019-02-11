<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	 <div id="header">
	 	   <h1>Adminpanel</h1>
	 	   <div id="right-header">
	 	   	<ul>
	 	   		<li><a href="../index.php">Home</a></li>
	 	   		<li><a href="login.php">Login</a> |</li>
	 	   		<li><a href="signup.php">Signup</a> |</li>
	 	   	</ul>
	 	   </div>
	 </div>
     
	 <div id="login-inside-content">
	 	<div id="login">
	 	 <form action="auth.php" method="post">
	 	 	
	 		<table width="400" height="100" align="center">
	 		 
	 		  <tr>
	 		  	  <td>Email or Number</td>
	 		  	 <td><input name="admin_name" type="text"></td>
	 		  </tr>
	 		 
	 		   <tr>
	 		   	<td>Password</td>
                <td><input name="pass" type="Password"></td>
              </tr>  
              <tr>
	 	         <td colspan="2" align="center"><input type="submit" value="login"></td>
              </tr> 
            </table>
         </form>
        </div>
      </div>
</body>  
</html>
	