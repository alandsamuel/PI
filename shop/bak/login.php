<?php  
/*session_start();//start session 
 
require "db_connection.php";  
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('bo.php','_self')</script>";   
        $_SESSION['email']=$user_email; //digunakan session dan nilai variabel $user_email disimpan dalam $_SESSION.      
    }  
    else  
    {  
      echo "<script>alert('Email atau password salah!')</script>";  
    }  
} */ 
?>     
 
    
<html>  
<head lang="en">  
    <meta charset="UTF-8">	    
    <title>Login</title> 

<script type="text/javascript">
	function validasi() {
		if(document.formLogin.username.value == "")
	   {
		 alert( "Masukkan nama!" );
		 document.formLogin.username.focus() ;
		 return false;
	   }
	   
	   if(document.formLogin.password.value == "")
	   {
		 alert( "Masukkan password!" );
		 document.formLogin.password.focus() ;
		 return false;
	   }
	}
</script>
	
</head>  
    
<body>	
<div class="container">  
    <div class="row">  
        <div class="col-md-5 col-md-offset-2">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Sign In</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" action="index.php?target=terimalogin" method="post" name="formLogin" onsubmit="return(validasi());" >  
                        <fieldset>  
                            
							<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-email" type="text" class="form-control" name="username" class="required" value="" placeholder="name" autofocus>                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" class="required" placeholder="password">
                            </div>
							<input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                            
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>    
 <!-- Change this to a button or input when using this as a form -- >  
 <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> --> 	
  
</body>   
</html>  
  
