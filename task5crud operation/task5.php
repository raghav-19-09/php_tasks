<?php

include "config.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    // echo $name;
    $email = $_POST['email'];
    $website = $_POST['website'];
    $gender = $_POST['gender'];
    $comment = $_POST['comment'];
    // echo $comment;

    $sql = "INSERT INTO `users`(`name`, `email`, `website`, `gender`, `comment`) 
    VALUES ('$name','$email','$website','$gender','$comment')";
    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "New record created successfully";
        header('location: task5.php');
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="task5.js"></script>
    <title>registration form</title>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                            <form action="" method="post" name="form" id="myform" onsubmit="return formValidation()">

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="name" name="name" class="form-control form-control-lg" value="" />
                                            <label class="form-label" for="firstName">Name</label>
                                            <span id="msg"></span>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="url" id="website" name="website" class="form-control form-control-lg" required />
                                            <label class="form-label" for="websiteAddress">Website</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline datepicker w-100">
                                            <input type="text" id="email"  name="email" class="form-control form-control-lg" id="email" />
                                                <span id="message"></span> 
                                            <label for="email" class="form-label">Email</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <textarea name="comment" id="comment1" class="form-control form-control-lg" ></textarea>
                                            <label class="form-label" for="comment">Comment</label>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Gender: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="gender" type="radio" id="femaleGender" value="female"  required/>
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" required/>
                                            <label class="form-check-label" for="maleGender">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other" required/>
                                            <label class="form-check-label" for="otherGender">Other</label>
                                        </div>

                                    </div>

                                </div>
                                <div class="mt-4 pt-2">
                                    <input type="submit" class="btn btn-primary" name="submit" value="submit" />
                                </div>
                                <br><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <table id="table1" class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Gender</th>
                    <th>Comments</th>
                    <th>Action</th>raghav
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                ?>

                        <tr>
                            <td><?php echo  $row['id']; ?></td>
                            <td><?php echo  $row['name']; ?></td>
                            <td><?php echo  $row['email']; ?></td>
                            <td> <?php echo  $row['website']; ?></td>
                            <td> <?php echo  $row['gender']; ?></td>
                            <td> <?php echo  $row['comment']; ?></td>
                            <td>
                            <a href="update.php?id=<?=  $row['id']; ?>" name="edit" class="btn btn-primary btn-sm">Edit</a>
                            <a href="delete.php?id=<?=  $row['id']; ?>" name="delete" class="btn btn-danger btn-sm">Delete</a>
                            </td>


                        </tr>
                <?php }           
                } ?>
            </tbody>
        </table>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>