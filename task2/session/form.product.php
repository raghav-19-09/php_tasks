<?php
session_start();
if (isset($_POST['submit'])) {
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    if (isset($_SESSION['product'])) {
        $product = $_SESSION['product'];
    }
    $product[] = [
        "productId" => $productId,
        "productName" => $productName,
        "productPrice" => $productPrice
    ];
    // echo "<pre>";print_r($_SESSION);die;
    $_SESSION['product'] = $product;
}

?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>


    <div class="container py-5 h-100">
        <h2>product details</h2>
        <form action="" method="post">
            <label for="productId">Product Id:</label><br>
            <input type="text" id="productId1" class="form-control" name="productId" value=""><br>
            <label for="ProductName">Product name:</label><br>
            <input type="text" id="ProductName1" class="form-control" name="productName" value=""><br><br>
            <label for="ProductName">Product Price:</label><br>
            <input type="text" id="ProductPrice1" class="form-control" name="productPrice" value=""><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <div class="">
            <table class="table">
                <thead>
                    <tr>
                        <td>product id</td>
                        <td>product name</td>
                        <td>product price</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    
                <?php if (isset($_SESSION['product'])) { ?> 
                            <?php foreach ($_SESSION['product'] as $key=>$product) { ?>
                                <?php //echo "<pre>" ;print_r($key);?>
                                <?php //echo "<pre>"; print_r($product['productId']); ?>
                                <tr>
                                <td><?= $product['productId']; ?></td>
                                <td><?= $product['productName']; ?></td>
                                <td><?= $product['productPrice']; ?></td>
                                <td> 
                                    <a href="edit.php?id=<?= $key; ?>" name="edit" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="delete.php?id=<?= $key; ?>" name="delete" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>