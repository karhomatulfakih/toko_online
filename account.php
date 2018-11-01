<?php $page = "AKUN"; ?>

<?php include('inc/header.php'); ?>

<!-- BAGIAN ISI -->
<div class="main-content">
    <div class="container">
        <hr>

        <h2>Akun</h2>

        <hr>

        <div class="row">

            <div class="categories-menu col-12 col-sm-3">
                <h3>Kategori</h3>
                <ul>
                    <li><a href="product.php">Laptop</a></li>
                    <li><a href="product.php">Desktop PC</a></li>
                    <li><a href="product.php">Smartphone</a></li>
                    <li><a href="product.php">Tablet</a></li>
                </ul>
            </div>

            <div class="personal-details col-12 col-sm-9">
                <h3>Data Pribadi</h3>

                <form action="account.php" method="post">
                    <div class="form-group">
                        <label for="firstname">
                            <span class="required-field">*</span> NAMA DEPAN:
                        </label>
                        <input type="text" id="firstname" name="firstname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">
                            <span class="required-field">*</span> NAMA BELAKANG:
                        </label>
                        <input type="text" id="lastname" name="lastname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">
                            <span class="required-field">*</span> ALAMAT:
                        </label>
                        <input type="text" id="address" name="alamat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">
                            <span class="required-field">*</span> EMAIL:
                        </label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="telephone">
                            <span class="required-field">*</span> TELEPON:
                        </label>
                        <input type="text" id="telephone" name="telepon" class="form-control" required>
                    </div>

                    <div class="form-group"><span class="required-field">*</span> wajib diisi.</div>

                    <hr>

                    <input type="submit" value="SIMPAN" class="secondary-cart-btn btn btn-info">
                </form>
            </div>
        </div>
    </div>

</div>
<!-- BAGIAN ISI -->

<?php include('inc/footer.php'); ?>

<?php include('inc/javascript.php'); ?>
