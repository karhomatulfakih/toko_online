<?php $page = "KATEGORI PRODUK"; ?>




<?php include('inc/header.php'); ?>

<?php include('inc/sidebar.php'); ?>

<section class="main">
    <h1>Manajemen Kategori Produk</h1>

    <hr>

    <?php
    if(isset($_GET['act']) AND $_GET['act']=='tambah') {
        echo "
            <h3>Tambah Data</h3>
            
            <form name='tambah' action='?act=proses_tambah' method='post'>
                <p><input type='text' name='kategori' placeholder='Kategori'></p>
                <p><input type='submit' name='proses' value='Simpan' class='btn biru'></p>
            </form>
            
            <hr>
        ";
    }
    elseif(isset($_GET['act']) AND $_GET['act']=='proses_tambah') {
    $tambah = mysql_query("INSERT INTO kategori (kategori)
                            VALUES ('$_POST[kategori]')");
                            
    if($tambah) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Data gagal ditambahkan!";
    }
    
    echo "<hr>";
}

    ?>

    
    <a href="">
        <button type="button" class="btn hijau">Tambah</button>
    </a>
    <table class="tabel">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Aksi</th>
        </thead>
        <tbody>
<?php
            $no = 0;
// record dari tabel kategori
$query = mysql_query("SELECT * FROM kategori");  

if(mysql_num_rows($query) > 0) {
        // ada record
    while($data = mysql_fetch_array($query)) {
        $no++
            echo "
                <tr>
                    <td>$no</td>
                    <td>$data[kategori]</td>
                    <td>
                        <a href='?act=edit&id=$data[id_kategori]'>
                            <button type='button' class='btn kuning'>Edit</button>
                        </a>
                        <a href='?act=hapus&id=$data[id_kategori]' OnClick=\"return confirm('Anda yakin menghapus data?');\")>
                            <button type='button' class='btn merah'>Hapus</button>
                        </a>
                    </td>
                </tr>
            ";
        }
    } else {
        // tidak ada record
    echo "
            <tr>
                <td colspan='3'>Tidak ada data.</td>
            </tr>
        ";

    }
?>
        </tbody>
    </table>

</section>

<?php include('inc/footer.php'); ?>
