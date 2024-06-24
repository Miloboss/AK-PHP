<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping Navbar</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f172167687.js" crossorigin="anonymous"></script>
</head>

</head>

<?php
include('navbar.php');
?>
<div class="mobile-menu-overlay"></div>

<div class="carousel-my">
    <div class="carousel-inner-my">
        <div class="carousel-item-my"><img src="assets/image/1.png" alt="Image 1"></div>
        <div class="carousel-item-my"><img src="assets/image/2.png" alt="Image 2"></div>
        <div class="carousel-item-my"><img src="assets/image/3.png" alt="Image 3"></div>
        <div class="carousel-item-my"><img src="assets/image/4.png" alt="Image 3"></div>
    </div>
</div>
<!-- products -->
<div class="container-fluid mt-4 products">
    <div class=" d-flex justify-content-between">
        <div class=" pro-title-name">
            <h3>Our Products</h3>
        </div>
        <div class=" pro-title-view ">
            <a href="#">
                <h3 class=" list-group-item">View All <i class="fa-solid fa-arrows-turn-right"></i></h3>
            </a>
        </div>
    </div>

    <div class="product-grid">
        <div class="product-item">
            <img src="assets/image/products/5.png" alt="Product 1">
            <div class="product-details">
                <div class="product-brand">Brand Name 1</div>
                <div class="product-name">Product Name 2</div>
                <div class="product-price">K100000</div>
            </div>
        </div>
        <div class="product-item">
            <img src="assets/image/products/6.png" alt="Product 2">
            <div class="product-details">
                <div class="product-brand">Brand Name 2</div>
                <div class="product-name">Product Name 2</div>
                <div class="product-price">K200000</div>
            </div>
        </div>
        <div class="product-item">
            <img src="assets/image/products/7.png" alt="Product 3">
            <div class="product-details">
                <div class="product-brand">Brand Name 3</div>
                <div class="product-name">Product Name 3</div>
                <div class="product-price">K300000</div>
            </div>
        </div>
        <div class="product-item">
            <img src="assets/image/products/8.png" alt="Product 4">
            <div class="product-details">
                <div class="product-brand">Brand Name 4</div>
                <div class="product-name">Product Name 4</div>
                <div class="product-price">K400000</div>
            </div>
        </div>
    </div>
</div>


<script src="assets/js/script.js"></script>

</body>

</html>