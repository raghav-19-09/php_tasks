<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <title>Add products and price</title>
  <script src="ajax.js"></script>
</head>

<body>
  <section class="" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  <p id="two" class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Add to Product Functionality</p>
                  <form action="" id="myform" class="mx-1 mx-md-4" method="post">
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Product SKU</label>
                        <input type="text" id="p_sku" name="p_sku" />

                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Product Name</label>
                        <input type="text" id="p_name" name="p_name" />
                        <span id="test"></span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4cd">Product Price</label>
                        <input type="number" id="p_price" name="p_price" />
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        Product Quantity: <input type="number" id="p_quantity" name="p_quantity" />
                      </div>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" id="insertbtn" class="btn btn-primary" value="submit">Add Product</button>
                    </div>
                    <div class="alert">
                      <p id="msgDisplay"></p>
                    </div>
                    <div id="error-message"></div>
                    <div id="success-message"></div>
                    <div id="msgs"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="container table-responsive py-5">
            <div class="col-sm-12" id="table-data">

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update record</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" id="updateform" class="mx-1 mx-md-4" method="post">
            <div class="form-outline flex-fill mb-0">
                  <input type="hidden" id="model_id" />
                </div>
              <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                  <label class="form-label" for="form3Example3c">Product SKU</label>
                  <input type="text" id="modal_p_sku" readonly />

                </div>
              </div>
              <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                  <label class="form-label" for="form3Example3c">Product Name</label>
                  <input type="text" id="modal_p_name" readonly />
                  <span id="test"></span>
                </div>
              </div>
              <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                  <label class="form-label" for="form3Example4cd">Product Price</label>
                  <input type="number" id="modal_p_price" readonly/>
                </div>
              </div>
              <div class="d-flex flex-row align-items-center mb-4">
                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                  Product Quantity: <input type="number" id="modal_p_quantity" />
                </div>
              </div>

                <div class="form-outline flex-fill mb-0">
                  <input type="hidden" id="model_id" />
                </div>
             

              <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <button type="submit" id="update" class="btn btn-primary" value="submit">Update Product</button>
              </div>
              <div class="d-flex justify-content-left mx-4 mb-3 mb-lg-4">
                <button type="reset" id="update" class="btn btn-success" value="reset">Reset</button>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
           
          </div>
        </div>
      </div>
  </section>
  <!-- Modal end-->

  <script>
   
    
  </script>
  <script>
    $(document).ready(function() {
      // Load Table Records
      function loadTable() {
        $.ajax({
          url: "view.php",
          type: "POST",
          success: function(data) {
            $("#table-data").html(data);
          }
        });
      }
      loadTable(); // Load Table Records on Page Load

      // Insert New Records
      $("#insertbtn").click(function(e) {
        e.preventDefault();
        var p_sku = $("#p_sku").val();
        var p_name = $("#p_name").val();
        var p_price = $("#p_price").val();
        var p_quantity = $("#p_quantity").val();
        if (p_sku == '' || p_name == '' || p_price == '' || p_quantity == '') {
          $("#error-message").html("All fields are required.").slideDown();
          $("#success-message").slideUp();
        } else {
          var data = 'p_sku=' + p_sku + '&p_name=' + p_name + '&p_price=' + p_price + '&p_quantity=' + p_quantity;
          $.ajax({
            type: "POST",
            url: "insert.php",
            data: data,
            cache: false,
            success: function(data) {
              if (data) {
                loadTable();
                $("#myform").trigger("reset");
                $("#success-message").html("Data Inserted Successfully.").slideDown();
                $("#error-message").slideUp();
              } else {
                loadTable();
                $("#error-message").html("Can't Save Record.").slideDown();
                $("#success-message").slideUp();
              }
            }
          });
        }
      });

      // Delete Records
      $(document).on("click", ".delete-btn", function() {
        if (confirm("Do you really want to delete this record ?")) {
          var productId = $(this).attr("id");
          var element = this;

          $.ajax({
            url: "delete.php",
            type: "POST",
            data: {
              id: productId
            },
            success: function(data) {
            location.reload();
              if (data == 1) {



              } else {
                $("#error-message").html("Can't Delete Record.").slideDown();
                $("#success-message").slideUp();
              }
            }
          });
        }
      });
    });

// fetch the data 
    $(document).on("click", ".update-btn", function() {
        var id = $(this).attr('id');
        
       $.ajax({
            method: "POST",
            url: "datafetch.php",
            data: {id:id},
            dataType: "json",
            success:function(data){
                // $('#updateid').val(data.id);
                $('#exampleModal').modal('show'); 
                $('#modal_p_sku').val(data.p_sku);
                $('#modal_p_name').val(data.p_name);
                $('#modal_p_price').val(data.p_price);
                $('#modal_p_quantity').val(data.p_quantity);  
                $('#model_id').val(data.id);  
            }
      });
    // }
  });

  $(document).ready(function(){
$("#update").click(function(){
        var id = $("#model_id").val();
        var p_sku = $("#modal_p_sku").val();
        var modal_p_name = $("#modal_p_name").val();
        var modal_p_price = $("#modal_p_price").val();
        var p_quantity = $("#modal_p_quantity").val();

           
            $.ajax({
            type: "POST",
            url: "update.php",
            data: {modal_p_name:modal_p_name,modal_p_price:modal_p_price,p_quantity:p_quantity,id:id},
            cache: false,
            success: function(result){
                alert(result);
              
                $('#updateform')[0].reset();
                $('#exampleModal').modal('hide');
                loadTable();
            }
            });
            alert(wjhfjkwhw);
            return false;

      });
    });
  </script>

</body>

</html>
