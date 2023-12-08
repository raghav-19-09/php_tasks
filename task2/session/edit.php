<?php
session_start();
$id = $_GET['id'];
// echo $id;
// if (isset($_POST['edit'])) {

// echo "<pre>"; print_r($productId);
// die;
// }
?>


<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>edit details</title>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container py-5 h-100">
        <form action="" method="post">
            <label for="productId">Product Id:</label><br>
            <input type="number" id="productId1" class="form-control" name="productId" value="<?= $_SESSION['product'][$id]['productId']; ?>"><br>
            <label for="ProductName">Product name:</label><br>
            <input type="text" id="ProductName1" class="form-control" name="productName" value="<?= $_SESSION['product'][$id]['productName']; ?>"><br><br>
            <label for="ProductName">Product Price:</label><br>
            <input type="number" id="ProductPrice1" required class="form-control" name="productPrice" value="<?= $_SESSION['product'][$id]['productPrice']; ?>"><br><br>
            <input type="submit" name="update" value="update">
        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['update'])) {

    $_SESSION['product'][$id]['productId'] = $_POST['productId'];
    $_SESSION['product'][$id]['productName'] = $_POST['productName'];
    $_SESSION['product'][$id]['productPrice'] = $_POST['productPrice'];
    echo "<script>alert('Data Updated successfully');</script>";

echo" <script>location.href='form.product.php'</script>";
    // print_r($_SESSION['product'][$id]['productId']);
    // die;
}

?>