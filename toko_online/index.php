<!DOCTYPE html>
<html>

<head>
    <?php $page = "BERANDA"; ?>
    <?php include('inc/header.php'); ?>
</head>

<body>
    <!-- Header -->


    <!-- Content -->
    <div class="promo">
        <div class="container">
            <?php include('inc/carousel.php'); ?>
        </div>
    </div>
    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <h2>Produk Pilihan</h2>

            <hr>
            <div class="row">
                <div class="product col-12 col-md-6 col-lg-3">
                    <a href="product_detail.php"><img src="img/product/iphone.png" alt="iPhone" class="feature"></a>

                    <h3><a href="product_detail.php">iPhone</a></h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <h6>Ketersediaan: <span class="instock">Stok Tersedia</span></h6>

                    <p>
                        <a href="cart.php" class="cart-btn">
                            <span class="price">$499.08</span>
                            <img src="img/white-cart.gif" alt="Add to Cart">BELI SEKARANG
                        </a>
                    </p>
                </div>

                <div class="product col-12 col-md-6 col-lg-3">
                    <a href="product_detail.php"><img src="img/product/macbook.png" alt="Product" class="feature"></a>

                    <h3><a href="product_detail.php">MacBook</a></h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <h6>Ketersediaan: <span class="instock">Stok Tersedia</span></h6>

                    <p>
                        <a href="cart.php" class="cart-btn">
                            <span class="price">$499.08</span>
                            <img src="img/white-cart.gif" alt="Add to Cart">BELI SEKARANG
                        </a>
                    </p>
                </div>

                <div class="product col-12 col-md-6 col-lg-3">
                    <a href="product_detail.php"><img src="img/product/ipadair.png" alt="Product" class="feature"></a>

                    <h3><a href="product_detail.php">iPad Air</a></h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <h6>Ketersediaan: <span class="instock">Stok Tersedia</span></h6>

                    <p>
                        <a href="cart.php" class="cart-btn">
                            <span class="price">$499.08</span>
                            <img src="img/white-cart.gif" alt="Add to Cart">BELI SEKARANG
                        </a>
                    </p>
                </div>

                <div class="product col-12 col-md-6 col-lg-3">
                    <a href="product_detail.php"><img src="img/product/imac.png" alt="iMac" class="feature"></a>

                    <h3><a href="product_detail.php">iMac</a></h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <h6>Ketersediaan: <span class="instock">Stok Tersedia</span></h6>

                    <p>
                        <a href="cart.php" class="cart-btn">
                            <span class="price">$499.08</span>
                            <img src="img/white-cart.gif" alt="Add to Cart">BELI SEKARANG
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('inc/footer.php'); ?>
    <?php include('inc/javascript.php'); ?>

    
</body>

</html>
