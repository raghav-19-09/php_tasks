<?Php
include 'connection.php';
session_start();
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $email_check= "SELECT * FROM users where email='$email'";
   $q1=mysqli_query($conn,$email_check);
   if(mysqli_num_rows($q1)>0){
    $password_check= "SELECT * FROM users where password='$password'";
    $q2=mysqli_query($conn,$password_check);
    if(mysqli_num_rows($q2)>0){
        $q="SELECT * FROM users where email='$email'";
        $q3=mysqli_query($conn,$q);
        if($q3){
        while($row=mysqli_fetch_assoc($q3)){
          // print_r($row['name']);
        $_SESSION['user']=$row;
         }
        }
        // echo "<script>alert('Your Are Login Succesfully..')</script>";
        header('location:dashboard.php');
    }
    else{
        echo "<script>alert('enter invalid password....')</script>";
        echo "<script>window.location.href='login.php'</script>";
    }
   }
   else{
    echo "enter incorrect email";
        header('location:login.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Sign in Form with Icons</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="login.css">
</head>
<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Login</h2>   
        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="text" class="form-control" name="email" placeholder="email" required="required">
            </div>
        </div>
		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
        </div>        
        <div class="form-group">
        <input type="submit" class="btn btn-primary" name="submit" value="submit"/>
        </div>
        <div class="bottom-action clearfix">
        <a href="register.php">Register here!</a>
        <!-- <p class="text-center small">Don't have an account! </p> -->
            <a href="#" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    
</div>
</body>
</html>