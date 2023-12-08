   <?php
    include 'config.php';
    include 'error.php';

    $sql = "SELECT * FROM cart_list";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        echo "<table border='1' class='table table-bordered table-hover text-align-center'>
    <tr>
    <th>Product Id</th>
    <th>Product Image</th>
    <th>Product Name</th>
    <th> Product Pice</th>
    <th>Product Quantity</th>
    <th>Total</th>
    </tr>";
    $total=0;
    $grandTotal=0;
        while ($row = mysqli_fetch_assoc($query)) {
        // echo "<pre>";print_r($row);die;
        $total=$row['price']*$row['quantity'];
            echo "<tr>";           
            echo "<td>$row[productId]</td>";
            echo "<td><img src='$row[image]' height='50px' width='50px'></td>";
            echo "<td>$row[name]</td>";
            echo "<td>$row[price]</td>";
            echo "<td>
            <input class='btn btn-warning btn-decrement' id='$row[productId]' type='button' value='-' onclick='decrement_quantity(this.id)' /> 
            <input type='text' readonly value='$row[quantity]' id='quantity'>
            <input class='btn btn-success btn-increment' id='$row[productId]' type='button' value='+' onclick='increment_quantity(this.id)'/>
            </td>";
            echo "<td>$total</td>";
            echo "</tr>";
            $grandTotal=$grandTotal+$total;
            $total=$grandTotal;
        }
        echo "<tr>
        <td colspan='5'><b>Grand Total:</b></td>
         <td><b>$grandTotal</b></td>
        </tr>";
        echo "</table>";
    ?>
    <?php

    } else {
        echo "record not found";
    }
    mysqli_close($conn);
    ?>

