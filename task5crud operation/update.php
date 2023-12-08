<?php 
include 'config.php';
$id=$_GET['id'];
// echo $id;
$q1="SELECT * FROM users WHERE id = $id;";
// print_r($query);
$query=mysqli_query($conn,$q1);
if(isset($_POST['update'])){

    $name = $_POST['name'];
    $website = $_POST['website'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $gender = $_POST['gender'];
    $q2="update users set name='$name',website='$website',email='$email',comment='$comment',gender='$gender' where id='$id'";
   //echo "$q1";
   $res=mysqli_query($conn,$q2);
   if($res)
   {
     echo "<script>alert('data updated successfully');location.href='task5.php'</script>";
   }
   else {
     echo "<script>alert('data not  updated successfully');location.href='task5.php'</script>";
   }

    // echo $name;

    //  $sql = "update users set  name='$name', website='$website', email='$email', comment='$comment', gender='$gender'  where id=$id ";

    // $query2 = mysqli_query($con,$sql);
    // if($query2)  
    // {
    //     echo "<script>alert('data updated');</script>";
        
    // }else{
    //     echo "<script>alert('data updated failed');</script>";
    // }
    // print_r($sq1);
//    $array=mysqli_fetch_assoc($query);
//    echo "<pre>"; print_r($query);
   
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

    <title>registration form</title>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update the Form</h3>
                            <?php 
                            while($row=mysqli_fetch_assoc($query))
                            {     ?>
                            <form action="" method="post">

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="name2" name="name" class="form-control form-control-lg" value="<?php echo  $row['name']; ?>"/>
                                            <label class="form-label" for="firstName">Name</label>
                                            <span id="msg"></span>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="url" id="website" name="website" class="form-control form-control-lg" value="<?php echo  $row['website']; ?>"/>
                                            <label class="form-label" for="websiteAddress">Website</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <input type="email" name="email" class="form-control form-control-lg" id="email" value="<?php echo  $row['email']; ?>"/>
                                            <label for="email" class="form-label">Email</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <textarea name="comment" id="comment1" class="form-control form-control-lg" value=""><?php echo  $row['comment']; ?></textarea>
                                            <label class="form-label" for="comment">Comment</label>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="gender" type="radio" id="femaleGender" value="female" <?php if($gender == 'female'){ echo "checked";} ?> />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male"<?php if($gender == 'Male'){ echo "checked";} ?> />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other"<?php if($gender == 'other'){ echo "checked";} ?> />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>

                                </div>
                                <div class="mt-4 pt-2">
                                    <input type="submit" class="btn btn-primary" name="update" value="update" />
                                </div>
                                <br><br>
                            <?php } ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    
    </html>



