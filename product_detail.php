<?php $page = "PRODUK DETAIL"; ?>

<?php include('inc/header.php'); ?>

<div class="product_detail">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 order-1 order-lg-1">
                <div class="product-image ">
                    <img src="img/product/imac.png" alt="Product">
                </div>
            </div>
            <div class="col-12 col-lg-4 order-3 order-lg-2">
                <div clas="product-details">
                    <h1>iMac</h1>
                    <p class="code">Kode Produk: <span>32321</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <hr>

                    <form action="cart.php" method="post">
                        <label for="qty">Qty:</label>
                        <input type="text" id="qty" name="qty" value="1" maxlength="2">

                        <button type="submit" class="secondary-cart-btn btn btn-info">
                            <img src="img/white-cart.gif" alt="Add to Cart" /> BELI SEKARANG
                        </button>
                    </form>
                </div>

            </div>

            <div class="col-12 col-lg-4 order-2 order-lg-3">
                <div class="price_parent">
                <div class="product-info">
                    <p class="price">$499</p>
                    <h6>Ketersediaan: <span class="instock">Stok Tersedia</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>

<?php include('inc/javascript.php'); ?>
