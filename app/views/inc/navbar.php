<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Bootstrap demo</title>
    
  </head>

  <body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid d-flex align-items-center">

    <!-- Left side nav -->
    <ul class="navbar-nav d-flex flex-row gap-3 mb-0">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo url('home'); ?>">Jewelry</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url('product/index'); ?>">New Releases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo url('product/index'); ?>">Products</a>
      </li>
    </ul>

    <!-- Centered brand -->
    <a  class="navbar-brand mx-auto" href="<?php echo url('home'); ?>"><b>APOLLONIAN</b></a>

    <!-- Search form on the right -->
    <form class="d-flex me-auto " role="search" style="max-width: 250px;">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <a href="<?php url("user/list")?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M16 18a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1a1 1 0 0 0 1 1a1 1 0 0 0 1-1a1 1 0 0 0-1-1m-9-1a2 2 0 0 1 2 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2a2 2 0 0 1 2-2m0 1a1 1 0 0 0-1 1a1 1 0 0 0 1 1a1 1 0 0 0 1-1a1 1 0 0 0-1-1M18 6H4.27l2.55 6H15c.33 0 .62-.16.8-.4l3-4c.13-.17.2-.38.2-.6a1 1 0 0 0-1-1m-3 7H6.87l-.77 1.56L6 15a1 1 0 0 0 1 1h11v1H7a2 2 0 0 1-2-2a2 2 0 0 1 .25-.97l.72-1.47L2.34 4H1V3h2l.85 2H18a2 2 0 0 1 2 2c0 .5-.17.92-.45 1.26l-2.91 3.89c-.36.51-.96.85-1.64.85"/></svg>
      </a>
      <a href="<?php url("user/signUp")?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>  
    </a>
    </div>
</nav>

</body>
</html>