<?php
include 'connection.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title>View Ajax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>View data</h2>
        <table class="table table-bordered table-sm">
            <tbody id="table"> </tbody>
        </table>
    </div>
    <?php
    include 'connection.php';
    $sql = "SELECT * FROM products";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        echo "<table border='1' class='table table-bordered table-hover'>
    <tr>
    <th>Product Id</th>
    <th>Product SKU</th>
    <th>Product Name</th>
    <th> Product Pice</th>
    <th>Product Quantity</th>
    <th>Action</th>
    </tr>";
        while ($row = mysqli_fetch_assoc($query)) {

            echo "<tr>";
            echo "<td>$row[id]</td>";
            echo "<td>$row[p_sku]</td>";
            echo "<td>$row[p_name]</td>";
            echo "<td>$row[p_price]</td>";
            echo "<td>$row[p_quantity]</td>";
            echo "<td><button type='button' class='update-btn' id=$row[id]   data-toggle='modal' data-target='#exampleModal'>Update</button>
                    <button type='button' id=$row[id] class='delete-btn' onClick='del(this.id)'>Delete</button></td>";
            //onClick=rem(id)
            echo "</tr>";
        }
        echo "</table>";
    ?>
    <?php

    } else {
        echo "record not found";
    }
    mysqli_close($conn);
    ?>
 </body>
</html>


    <!-- //view the record -->
    <!-- <script>
$(document).ready(function () {
  $("#insertbtn").click(function (e) {
    e.preventDefault;
    $.ajax({
        url: "view.php",
         type: "GET", 
         cache: false, 
        success: function (data) {
          alert(data); $('#table').html(data);
        }
        });
    });
  });
</script> -->