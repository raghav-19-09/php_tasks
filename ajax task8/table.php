<?php
include 'connection.php';



$sql1 = "SELECT * FROM `products`";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
  // output data of each row
  while($row1 = mysqli_fetch_assoc($result1)) {
    echo "id: " . $row1["id"]."<br>";
  }
} else {
  echo "0 results";
}





?>
<table id="table1" class="table">
                    <thead>
                      <tr>          
                          <th>Product Price</th>
                          <th>Product Quantity</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $sql1 = "SELECT * FROM `products`";
                      $result1 = mysqli_query($conn, $sql1);

                      if (mysqli_num_rows($result1) > 0) {
                        // output data of each row
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                      ?>
                          <tr>
                            <td><?php echo $row1['p_price']; ?></td>
                            <td><?php echo $row1['p_quantity']; ?></td>
                            <td>
                              <a href="update.php?id=<?= $row1['id']; ?>" name="edit" class="btn btn-primary btn-sm">Edit</a>
                              <a href="delete.php?id=<?= $row1['id']; ?>" name="delete" class="btn btn-danger btn-sm">Delete</a>
                            </td>   
                          </tr>
                       <?php  
                        }
                       }?>
                    </tbody>
                  </table>






            




<?php
//copy
// $.ajax({
//             url: "View.php",
//              type: "GET", 
//              cache: false, 
//              success: function (data) {
//               alert(data); 
//               $('#table').html(data);
//             }
//           });
?>
 // $(document).ready(function() {

// $(document).on("click", ".update-btn", function() {
//   if (confirm("Do you really want to update this record ?")) {
//     var productId = $(this).data("id");
//     var element = this;
//     alert(productId);
//     $.ajax({
//       url: "datafetch.php",
//       type: "POST",
//       // data: {productId},
//       dataType: "json",
//       success: function(data) {
//         alert(data);
//         $('#exampleModal').modal('show'); 
//         $('#modal_p_sku').val(data.p_sku);
//         $('#modal_p_name').val(data.p_name);
//         $('#modal_p_price').val(data.p_price);
//         $('#modal_p_quantity').val(data.p_quantity);
//       }
//     });
//   }
// });

