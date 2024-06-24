<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/products-detail.css">
    <script src="https://kit.fontawesome.com/f172167687.js" crossorigin="anonymous"></script>


</head>

<body>
    <nav class="navbar-my">
        <div class="brand">
            <div class="brand-title">ShopLogo</div>
        </div>



        <a href="#" class="toggle-button-my">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links-my">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Cart</a></li>
                <li><a class=" btn btn-primary p-2" href="#">Login</a></li>
            </ul>
        </div>

        <div class="search-icon" id="search-icon"><i class="fa-solid fa-magnifying-glass"></i></div>

    </nav>

    <div class="details-container mt-4">
        <div class="image-gallery">
            <div class="image-container">
                <button class="nav-btn prev-btn" id="prevBtn">&#10094;</button>
                <img src="assets/image/products/9.png" alt="Product Image 1" class="product-image">
                <img src="assets/image/products/10.png" alt="Product Image 2" class="product-image">
                <button class="nav-btn next-btn" id="nextBtn">&#10095;</button>
                <span class="zoom-icon" id="zoomIcon">&#128269;</span>
            </div>
        </div>
        <div class="product-details">
            <h2 style=" font-weight: bold;">IPHONE 14 PRO MAX (256GB) Silver, Black , Gold</h2>
            <p>Brand: APPLE</p>
            <P>Warranty: 2Years</P>
            <h3 style=" font-weight: bold;">Price: $1500</h3>
            <p>ဈေးနှုန်းများ အချိန်နှင့်တပြေးညီ အနည်းငယ် အပြောင်းအလဲရှိနိုင်ပါသည်။</p>
            <p>See the description below.or write a review to earn points</p>
            <div class="product">
                <div class="quantity-control">
                    <button id="decrease-quantity">-</button>
                    <input type="text" id="quantity" value="1" readonly>
                    <button id="increase-quantity">+</button>
                </div>
                <div class="add-1">
                    <button id="add-to-cart">ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>

    <div class="product-description mb-4">
        <div class=" desc-txt d-flex justify-content-between">
            <h2>Description</h2>
            <i id="toggle-icon">+</i>
        </div>

        <div id="dsc-more" class="description-content">
            <h5 class="ps-1 mt-3 mb-5" style=" font-weight: bold;">IPHONE 14 PRO MAX (256GB) Silver, Black , Gold</h5>
            <p class="ps-1">Dimensions: 160.7 x 77.6 x 7.9 mm (6.33 x 3.06 x 0.31 in)</p>
            <p class="ps-1">NETWORK: 1, 2, 3, 5, 7, 8, 12, 20, 25, 26, 28, 30, 38, 40, 41, 48, 66, 70, 77, 78, 79 SA/NSA/Sub6 - A2894, A2896</p>
            <p class="ps-1">Dimensions: 160.7 x 77.6 x 7.9 mm (6.33 x 3.06 x 0.31 in)</p>
            <p class="ps-1">NETWORK: 1, 2, 3, 5, 7, 8, 12, 20, 25, 26, 28, 30, 38, 40, 41, 48, 66, 70, 77, 78, 79 SA/NSA/Sub6 - A2894, A2896</p>
            <p class="ps-1">Dimensions: 160.7 x 77.6 x 7.9 mm (6.33 x 3.06 x 0.31 in)</p>
            <p class="ps-1">NETWORK: 1, 2, 3, 5, 7, 8, 12, 20, 25, 26, 28, 30, 38, 40, 41, 48, 66, 70, 77, 78, 79 SA/NSA/Sub6 - A2894, A2896</p>
        </div>
    </div>

    <div id="zoomModal" class="zoom-modal">
        <span class="close">&times;</span>
        <img class="zoom-modal-content" id="zoomedImage">
    </div>

    <script src="assets/js/products-detail.js"></script>

</body>

</html>