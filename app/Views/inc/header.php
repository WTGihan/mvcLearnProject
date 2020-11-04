<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BURL.'assets/css/main.css'; ?>">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <title>Learn MVC</title>
</head>

<body>

<div class="nav">

  <div class="imgclass">
    <img src="<?php echo BURL.'assets/img/logo.png'; ?>" width="90px" alt="">
  </div>

  <div class="nav1">

    <ul>
    <div class="content">

      <div class="item">
        <li>
          <a href="<?php url(); ?>" class="nav-li">Home</a>
        </li>
      </div>
    
      <div class="item">
        <li>
          <a href="<?php url('product/index'); ?>" class="nav-li">Product</a>
        </li>
      </div>
      
      <div class="item">
        <li>
          <a href="<?php url('product/add'); ?>" class="nav-li">Add Product</a>
        </li>
      </div>

    </div>
    
    </ul>
  </div>

</div>