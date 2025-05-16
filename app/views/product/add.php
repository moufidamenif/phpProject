<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add Product </title>
</head>
<body>
<?php include (VIEWS."inc/navbar.php")?>
<main>
<h1 class="text-center  my-5 py-3">Add new  Product</h1>
<form method="post" action ="<?php url("product/store")?>">
  <div class="form-group">
    <label for="exampleFormControlInput1">Product 's Name </label>
    <input type="text" class="form-control" id="name"  name="name"required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Product 's Price </label>
    <input type="number" class="form-control" id="price"  name="price"required >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Product 's quantity </label>
    <input type="number" class="form-control" id="name" name="quantity" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Product 's description</label>
    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="category">Product 's Category  </label>
      <select  class="form-control" id="category" name="category">
      <?php  foreach ($categories as $category ):?>
      <option value="<?= $category['id'] ?>"><?php echo $category["name"]?> </option>
      <?php endforeach ;?>
    </select>
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect">Brand 's Category  </label>
      <select  class="form-control" id="brand">
      <?php  foreach ($brands as $brand ):?>
      <option value="<?= $brand['id'] ?>"><?php echo $brand["name"]?> </option>
      <?php endforeach ;?>
    </select>
  </div>
    <div class="form-group">
    <label for="exampleFormControlFile1">Product'Image </label><br>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button type="submit"></button>
</form>
</main>
<?php include (VIEWS."inc/footer.php")?>
</body>