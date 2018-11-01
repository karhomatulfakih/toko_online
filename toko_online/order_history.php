<?php $page = "DAFTAR PESANAN"; ?>

<?php include('inc/header.php'); ?>

<!-- BAGIAN ISI -->
<div class="main-content">
    <div class="container">
        <hr>

        <h2>Pembelian Produk</h2>

        <hr>
        <div class="row">
            <div class="col-12 col-sm-3">

                <div class="categories-menu">
                    <h4>KATEGORI</h4>
                    <ul>
                        <li><a href="product.php">Laptop</a></li>
                        <li><a href="product.php">Desktop PC</a></li>
                        <li><a href="product.php">Smartphone</a></li>
                        <li><a href="product.php">Tablet</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-sm-9">
                <div class="order-history">
                    <h3>Daftar Pesanan</h3>
                    <div class="table-responsive-md">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>ID Pemesanan</th>
                                <th>Tanggal</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>1.</td>
                                <td><a href="order_detail.php">23232323</a></td>
                                <td>04 November 2014</td>
                                <td>$400</td>
                                <td class="text-success">Finalized</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td><a href="order_detail.php">23232323</a></td>
                                <td>05 November 2014</td>
                                <td>$600</td>
                                <td class="text-warning">Pending</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td><a href="order_detail.php">23232323</a></td>
                                <td>06 November 2014</td>
                                <td>$100</td>
                                <td class="text-danger">Aborted</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- BAGIAN ISI -->

<?php include('inc/footer.php'); ?>

<?php include('inc/javascript.php'); ?>
