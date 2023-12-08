<?php
include 'connection.php';
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    // echo $name;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile_number = $_POST['mobile_number'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $hobbies = $_POST['hobbies'];
    // print_r($hobbies);die;
    // echo $mobile_number;
    // echo $name; 
    // echo $password;
    $hobbie = "";
    foreach($hobbies as $val){
      $hobbie .= $val . ",";
    }
    $check="SELECT * FROM users WHERE name = '$name';";
    $check_1="SELECT * FROM users WHERE email = '$email';";
// echo "<pre>";print_r($query);die;
    $res=mysqli_query($conn,$check);
    $res_1=mysqli_query($conn,$check_1);
    if (mysqli_num_rows($res)> 0) {
        echo "<script>alert('name already exist')</script>";
      }
    else if(mysqli_num_rows($res_1)> 0){
        echo "<script>alert('email already exist')</script>";
    }else{

        $sql = "INSERT INTO `users`(`name`, `email`, `password`, `mobile`, `dob`, `gender`, `address`, `hobbies`) VALUES
        ('$name','$email','$password','$mobile_number' ,'$dob','$gender','$address','$hobbie')";
     //  echo $sql;
     $result = $conn->query($sql);
 
    }
      

}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>registration form</title>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <form action="" method="POST" autocomplete="">
        <!-- class named "container" is assigned to div -->
        <div class="container">
            <h1>Register</h1>
            <p>Kindly fill in this form to register.</p>
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter name" name="name" id="name" required />

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required />

            <label for="pwd"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="pwd" required />

            <label for="pwd-repeat"><b>Mobile Number</b></label>
            <input type="number" placeholder="enter your mobile number" name="mobile_number" id="mobile_number" required />

            <label for="pwd-repeat"><b>Date of birth</b></label>
            <input type="date" placeholder="enter your D-O-B" name="dob" id="dob" required />
            <div>
                <h6 class="mb-2 pb-1"><b>Gender:</b> </h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="gender" type="radio" id="femaleGender" value="female" required />
                    <label class="form-check-label" for="femaleGender">Female</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" required />
                    <label class="form-check-label" for="maleGender">Male</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other" required />
                    <label class="form-check-label" for="otherGender">Other</label>
                </div>

            </div>

            <label for="pwd-repeat"><b>Address</b></label>
            <input type="text" placeholder="enter your Address" name="address" id="Address" required />
            <b>Hobbies</b>
                <label> singing <input name="hobbies[]" value="singing" type="checkbox"> </label>
                <label> cricket <input name="hobbies[]" value="cricket" type="checkbox"> </label>
                <label>travelling <input name="hobbies[]" value="travelling" type="checkbox"> </label>

                <input type="submit" class="btn btn-primary" name="submit" value="submit" />
        </div>

        <div>
            <p>Already have an account? <a href="login.php">Log in</a>.</p>
        </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>