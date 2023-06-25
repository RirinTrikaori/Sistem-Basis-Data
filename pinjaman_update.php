<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $no_peminjaman = $_POST ['no_peminjaman'];
    $tanggal_meminjam = $_POST ['tanggal_meminjam'];
    $tanggal_kembali = $_POST ['tanggal_kembali'];
    $kode_buku = $_POST ['kode_buku'];

    $query = "UPDATE pinjaman SET no_peminjaman='$no_peminjaman', tanggal_meminjam='$tanggal_meminjam', tanggal_kembali='$tanggal_kembali', kode_buku='$kode_buku' WHERE no_peminjaman='$id'";

    if ($koneksi->query($query) === TRUE) {
        echo "Data anggota berhasil diperbarui.";
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }

    $koneksi->close();

    Header("location:pinjaman_tampil.php");
}
?>
