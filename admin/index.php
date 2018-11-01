<?php $page = "BERANDA"; ?>

<?php include('inc/header.php'); ?>

<?php include('inc/sidebar.php'); ?>

<section class="main">
    <h1>Selamat datang, <?php echo $_SESSION['nama']; ?></h1>
    
    <?php
    
        $query_pesanan = mysql_num_rows(mysql_query("SELECT id_pesanan FROM pesanan WHERE status = 2"));
        
    ?>
    
    <p>Hari ini ada <a href="order.php"><?php echo $query_pesanan; ?></a> pesanan yang belum diproses.</p>
</section>

<?php include('inc/footer.php'); ?>
