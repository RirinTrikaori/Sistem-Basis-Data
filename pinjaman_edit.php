<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM pinjaman WHERE no_peminjaman = '$id'";
    $result = $koneksi->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $no_peminjaman = $row['no_peminjaman'];
        $tanggal_meminjam = $row['tanggal_meminjam'];
        $tanggal_kembali = $row['tanggal_kembali'];
        $kode_buku = $row['kode_buku'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pinjaman</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>

<div class="container">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SELAMAT DATANG </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="anggota_input.php">ANGGOTA</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="biaya_sewa_input.php"> BIAYA SEWA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buku_jenis_input.php"> JENIS BUKU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kasir_input.php"> KASIR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="buku_input.php"> BUKU </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pinjaman_input.php"> PEMINJAMAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="transaksi_input.php"> TRANSAKSI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nota_input.php"> NOTA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tampil.php"> TAMPILKAN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



        <h1>Edit Pinjaman</h1>
        <form method="POST" action="pinjaman_update.php">
            <div class="form-group">
                <label for="no_peminjaman">NO PEMINJAMAN:</label>
                <input type="text" class="form-control" id="no_peminjaman" name="no_peminjaman" value="<?php echo $no_peminjaman; ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_meminjam">TANGGAL TRANSAKSI:</label>
                <input type="date" class="form-control" id="tanggal_meminjam" name="tangggal_meminjam" value="<?php echo $tanggal_meminjam; ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_kembali">TANGGAL PENGEMBALIAN:</label>
                <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="<?php echo $tanggal_kembali; ?>">
            </div>
            <div class="form-group">
                <label for="kode_buku">KODE BUKU:</label>
                <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="<?php echo $kode_buku; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
