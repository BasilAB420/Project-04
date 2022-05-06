<?php include ("header.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=Device-width, initial-scale=1.0">
  <title>Index</title>
</head>
<body>




  <div class="container mt-5">
    <div class="row">

    <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
    <div class="card">
        <img src="img/1.webp" class="card-img-top">
        <div class="card-body text-center">
            <h5 class="card-title">Bag 1</h5>
            <p class="card-text">Price: $450</p>
            <button type="submit" name= "Add_To_Cart" class="btn btn-dark btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Bag 1">
            <input type="hidden" name="Price" value="450">
        </div>
    </div>
    </form>
    </div>

    <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
    <div class="card">
        <img src="img/2.webp" class="card-img-top">
        <div class="card-body text-center">
            <h5 class="card-title">Bag 2</h5>
            <p class="card-text">Price: $450</p>
            <button type="submit" name= "Add_To_Cart" class="btn btn-dark btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Bag 2">
            <input type="hidden" name="Price" value="450">
        </div>
    </div>
    </form>
    </div>

    <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
    <div class="card">
        <img src="img/3.webp" class="card-img-top">
        <div class="card-body text-center">
            <h5 class="card-title">Bag 3</h5>
            <p class="card-text">Price: $450</p>
            <button type="submit" name= "Add_To_Cart" class="btn btn-dark btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Bag 3">
            <input type="hidden" name="Price" value="450">
        </div>
    </div>
    </form>
    </div>

    <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
    <div class="card">
        <img src="img/4.webp" class="card-img-top">
        <div class="card-body text-center">
            <h5 class="card-title">Bag 4</h5>
            <p class="card-text">Price: $450</p>
            <button type="submit" name= "Add_To_Cart" class="btn btn-dark btn-info">Add to Cart</button>
            <input type="hidden" name="Item_Name" value="Bag 4">
            <input type="hidden" name="Price" value="450">
        </div>
    </div>
    </form>
    </div>



    </div>
  </div>
</body>
</html>