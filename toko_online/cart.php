<?php $page = "KERANJANG BELANJA"; ?>

<?php include('inc/header.php'); ?>

<!-- BAGIAN ISI -->
<div class="main-content">
    <div class="container">

        <hr>

        <div class="shopping-cart">
            <h2>Keranjang Belanja</h2>

            <form action="cart.php" method="post">
                <div class="table-responsive-md">
                    <table class="table">
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="product_detail.php" class="label"><img src="img/product/imac.png" alt="iMac" class="img-product"><span class="nm-product">iMac</span></a></td>
                            <td>$499.08</td>
                            <td>1</td>
                            <td>
                                $499.08
                                <a href="cart.php">
                                    <img src="img/remove.gif" class="remove" alt="Hapus">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="product_detail.php" class="label"><img src="img/product/iphone.png" alt="iPhone" class="img-product"><span class="nm-product">iPhone</span></a></td>
                            <td>$499.08</td>
                            <td>1</td>
                            <td>
                                $499.08
                                <a href="cart.php">
                                    <img src="img/remove.gif" class="remove" alt="Hapus">
                                </a>
                            </td>
                        </tr>
                        <tr class="total">
                            <td colspan="5">
                                <p>Total: $998.16</p>

                                <br>

                                <a href="product.php" class="tertiary-btn btn btn-light">KEMBALI BELANJA</a>
                                <a href="cart.php" class="secondary-cart-btn btn btn-info">LAKUKAN PEMBAYARAN</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- BAGIAN ISI -->

<?php include('inc/footer.php'); ?>

<?php include('inc/javascript.php'); ?>
