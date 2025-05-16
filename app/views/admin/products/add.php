<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <title>add Product </title>
</head>
<body>
<?php include (VIEWS."inc/navbar.php")?>
<main>
<h1 class="text-center  my-5 py-3">Add new  Product</h1>
<form method="post" action ="<?php url("admin/storeProduct")?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Product 's Name </label>
    <input type="text" class="form-control" id="name"  name="name"required>
  </div>
  <div class="form-group">
    <label for="price">Product 's Price </label>
    <input type="number" class="form-control" id="price"  name="price"required >
  </div>
  <div class="form-group">
    <label for="quantity">Product 's quantity </label>
    <input type="number" class="form-control" id="name" name="quantity" required>
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
      <select  class="form-control" id="brand" name="brand">
      <?php  foreach ($brands as $brand ):?>
      <option value="<?= $brand['id'] ?>"><?php echo $brand["name"]?> </option>
      <?php endforeach ;?>
    </select>
  </div>
    <div class="form-group">
    <label for="image">Product'Image </label><br>
    <input type="file" class="form-control-file" id="image" name ="image">
    </div>
  <div class ="text-end ">
<input class="btn btn-info" type="submit" value="ADD Product">
    
    </div>
</form>
</main>
<?php include (VIEWS."inc/footer.php")?>
</body>