<?php $page = "DETAIL PESANAN"; ?>

<?php include('inc/header.php'); ?>

<!-- BAGIAN ISI -->
<div class="main-content order">
    <div class="container">
        <hr>

        <h2>Pembelian Produk</h2>

        <hr>
        <div class="row">
            <div class="col-12 col-sm-3">

                <div class="categories-menu">
                    <h3>KATEGORI</h3>
                    <ul>
                        <li><a href="product.php">Laptop</a></li>
                        <li><a href="product.php">Desktop PC</a></li>
                        <li><a href="product.php">Smartphone</a></li>
                        <li><a href="product.php">Tablet</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-9">

                <div class="order-details">
                    <h2>Detail Pemesanan</h2>
                    <table class="table table-striped">
                        <tr>
                            <td>
                                <h4>Order #135</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Tanggal: 03/11/2014</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Informasi Pembeli</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Nama: Karisma Academy<br>
                                    Telepon: 0341-299-5599<br>
                                    Email: info@karismaacademy.com
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Produk</h4>
                            </td>
                        </tr>

                    </table>
                    <div class="table-responsive-md">
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Subtotal</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Nama Produk</td>
                                <td>$400</td>
                                <td>1</td>
                                <td>$400</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nama Produk</td>
                                <td>$400</td>
                                <td>2</td>
                                <td>$800</td>
                            </tr>
                            <tr class="total">
                                <td colspan="5">
                                    <p class="sub">Subtotal: $1200</p><br />
                                    <p>TOTAL: $1200</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="order-parent">
                        <a href="#" class="secondary-cart-btn btn btn-info">CETAK</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- BAGIAN ISI -->

    <?php include('inc/footer.php'); ?>

    <?php include('inc/javascript.php'); ?>
