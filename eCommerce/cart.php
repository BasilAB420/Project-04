<?php include ("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>

         <div class="col-lg-8">
<table class="table">
<thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item name</th>
      <th scope="col">Item price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
<?php 
$total=0;
if(isset($_SESSION['cart']))
{
   foreach($_SESSION['cart'] as $key => $value)
   {
        $sr=$key+1;
        $total=$total+$value['Price'];
        echo"
      <tr>
        <td>$sr</td>
        <td>$value[Item_Name]</td>
        <td>$value[Price]</td>
        <td><input type='number' class='text-center' value='$value[Quantity]' min='1' max='10'></td>
        <td>
        <form action='manage_cart.php' method='POST'>
        <button name='REMOVE_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
        </form>
        </td>
      </tr>
        ";
   }
}
?>


  </tbody>
</table>
         </div>

        <div class="col-lg-2">
         <div class="border bg-light rounded p-3">
                                                  <h4>Total:</h4>
                                                  <h5 class="text-center"> <?php echo $total ?> </h5>
    
    <form>
    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Cash on Delivery
  </label>
      <br><br>
  
  <button class="btn btn-primary btn-block">Make Purchase</button>
    </form>

         </div>
        </div>

        </div>
    </div>

</body>
</html>