<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include (VIEWS."inc/navbar.php")?>
<main>

<h1 class="text-center  my-5 py-3">View All Products </h1>
<div class="container">
  <div class="row g-4">
    <?php $i = 1; ?>
    <?php foreach($products as $row): ?>
      <?php 
        $fullPath = str_replace('\\', '/', $row['slug']);
        $relativePath = strstr($fullPath, '/uploads/');
      ?>
      <div class="col-md-4 col-sm-6">
        <div class="card h-100 shadow-sm">
          <img src="<?php echo $relativePath; ?>" class="card-img-top" alt="Product image" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $i . '. ' . htmlspecialchars($row['name']); $i++; ?></h5>
            <div class="d-flex justify-content-between align-items-center">
              <span class="fw-bold"><?php echo number_format($row['price'], 2); ?> $</span>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
    </main>
   <?php include (VIEWS."inc/footer.php")?>
</body>
</html>