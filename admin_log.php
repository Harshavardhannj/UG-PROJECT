
<?php
include "db.php";
if (isset($_POST['login'])) 
{
	$email_id = $_POST['email_id'];
    $password = $_POST['password'];
    $result = mysqli_query($con,"select * from admin_info where email_id='$email_id' and password='$password'");
	$num=mysqli_fetch_array($result);

 if(($num['email_id']==$email_id) and ($num['password']==$password)) 
    {  
     header("Location:/online-food/admin/index.php");  
    }  
 else 
    {  
    echo "<script>alert('Invalid username or password!')</script>";  
    }  
}
?> 

<?php
include "header.php";
?>

<html>
<head>
  <title>Index</title>
</head>
    <body>

<div class="wait overlay">
        <div class="loader"></div>
</div>
    
<div class="container-fluid">
    
    <div class="login-marg">
    
    <div class="section-title">
         <h2 class="login100-form-title p-b-49" >Admin Login</h2>
    </div>
                                   
  <form method="post" action="admin_log.php">
        
        <div class="form-group">
            <label for="email">Email</label>
            <input class="input input-borders" type="email_id" name="email_id" placeholder="Email id"  required>
        </div>
           
        <div class="form-group">
            <label for="email">Password</label>
            <input class="input input-borders" type="password" name="password" id="myInput" placeholder="password" required>
        </div>

        <div class="form-group">
        <h6><input type="checkbox" onclick="myFunction()">Show Password</h6>
         </div>                           
        
        <input class="primary-btn btn-block"  name="login" type="submit"  Value="Login">
             


<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                                                
</form>
</div>
</div>
</body>
</html>
<br>
<br>
<?php
include "footer.php";
?>