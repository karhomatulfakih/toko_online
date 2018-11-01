<?php $page = "SIGN IN"; ?>

<?php include('inc/header.php'); ?>

<!-- BAGIAN ISI -->
<div class="signin-form">
    <div class="container">
        <hr>
        <h2>Sign In</h2>
        <form action="sign_in.php" method="post">
            <p>
                <img src="img/email.gif" alt="Email Address">
                <input type="email" name="email" placeholder="Email Address">
            </p>
            <p>
                <img src="img/password.gif" alt="Password">
                <input type="password" name="password" placeholder="password">
            </p>

            <button type="submit" class="secondary-cart-btn btn btn-info">SIGN IN</button>
        </form>
    </div>

</div>
<!-- BAGIAN ISI -->

<?php include('inc/footer.php'); ?>

<?php include('inc/javascript.php'); ?>
