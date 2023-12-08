<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
	<div id="header">
		<h1 id="logo">Logo</h1>
		<nav>
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div id="main">
		<div id="products">
			<div id="product-101" class="product">
				<img src="images/football.png">
				<h3 class="product-id">101</h3>
				<h3 class="title"><a href="index.php">Product 101</a></h3>
				<span>Price: $150.00</span>
				<a class="add-to-cart" data-id="101" data-name="Product 101" data-price="150.00" data-image="images/football.png">Add To Cart</a>
			</div>
			<div id="product-102" class="product">
				<img src="images/tennis.png">
				<h3 class="product-id">102</h3>
				<h3 class="title"><a href="add-to-cart">Product 102</a></h3>
				<span>Price: $120.00</span>
				<a class="add-to-cart" data-id="102" data-name="Product 102" data-price="120.00" data-image="images/tennis.png">Add To Cart</a>
			</div>
			<div id="product-103" class="product">
				<img src="images/basketball.png">
				<h3 class="product-id">103</h3>
				<h3 class="title"><a href="#">Product 103</a></h3>
				<span>Price: $90.00</span>
				<a class="add-to-cart" data-id="103" data-name="Product 103" data-price="90.00" data-image="images/basketball.png">Add To Cart</a>
			</div>
			<div id="product-104" class="product">
				<img src="images/table-tennis.png">
				<h3 class="product-id">104</h3>
				<h3 class="title"><a href="#">Product 104</a></h3>
				<span>Price: $110.00</span>
				<a class="add-to-cart" data-id="104"  data-name="Product 104" data-price="110.00" data-image="images/table-tennis.png">Add To Cart</a>
			</div>
			<div id="product-105" class="product">
				<img src="images/soccer.png">
				<h3 class="product-id">105</h3>
				<h3 class="title"><a href="#">Product 105</a></h3>
				<span>Price: $80.00</span>
				<a class="add-to-cart" data-id="105" data-name="Product 105" data-price="80.00" data-image="images/soccer.png">Add To Cart</a>
			</div>			
		</div>
	</div>

	<div id="footer">
		<nav>
			<ul id="footer-links">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Declaimers</a></li>
			</ul>
		</nav>
		<div class="container-sm">
			<table class="table table-bordered table-hover">
            <tbody id="table"> </tbody>
            </table>
			</div>
	</div>

	<script>
$(document).ready(function(){
    $(".add-to-cart").on("click", function(){
        var id = $(this).attr("data-id"); // will return the id
		var name = $(this).attr("data-name"); // will return the name
		var price = $(this).attr("data-price");
		var image = $(this).attr("data-image");
		var quantity = $(this).attr("data-quantity");
		// alert(id);
		$.ajax({
			type: "POST",
			url: "insert_cart_item.php",
			data: {
				productId:id,
				image:image,
				name:name,
				price:price,
				quantity:1,
			},
			cache: false,
			success: function(result){
				//  alert(result);
				location.reload();
		}
    });
});
});

$(document).ready(function() {
      // Load Table Records
      function loadTable() {
        $.ajax({
          url: "showData.php",
          type: "POST",
          success: function(data) {
            $("#table").html(data);
          }
        });
      }
      loadTable(); // Load Table Records on Page Load
	});

</script>
<script>
	function increment_quantity(id) {
			// alert(id); 
			$.ajax({
          url: "increment.php",
          type: "POST",
		  data:{id:id},
			cache: false,
          success: function(data) {
            // alert(data); 
			location.reload();
          }
        });
	}

	function decrement_quantity(id) {
			// alert(id); 
			$.ajax({
          url: "decrement.php",
          type: "POST",
		  data:{id:id},
			cache: false,
          success: function(data) {
            // alert(data); 
			location.reload();
          }
        });
	}
</script>
</body>
</html>
