<?php $page = "SIGN UP"; ?>

<?php include('inc/header.php'); ?>

<!-- BAGIAN ISI -->
<div class="main-content sign_up">
    <div class="container">

        <hr>
        <div class="new-account">
            <h2>Buat Akun Baru</h2>

            <form action="sign_up.php" method="post">

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
                    <label for="lastname">
                        <span class="required-field">*</span> ALAMAT:
                    </label>
                    <input type="text" id="address" name="address" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">
                        <span class="required-field">*</span> EMAIL:
                    </label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">
                        <span class="required-field">*</span> PASSWORD:
                    </label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">
                        <span class="required-field">*</span> KONFIRMASI PASSWORD:
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="telephone">
                        <span class="required-field">*</span> TELEPON:
                    </label>
                    <input type="text" id="telephone" name="telephone" class="form-control" required>
                </div>

                <div class="form-group"><span class="required-field">*</span> wajib diisi.
                </div>

                <hr>

                <button type="submit" class="secondary-cart-btn btn btn-info">BUAT AKUN</button>
            </form>
        </div>
    </div>

</div>
<!-- BAGIAN ISI -->

<?php include('inc/footer.php'); ?>

<?php include('inc/javascript.php'); ?>
