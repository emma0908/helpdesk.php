<?php
include 'koneksi.php'; // Hubungkan ke database

// Ambil ID dari URL (menggunakan $_GET)
$id = $_GET['id'];

// Perintah SQL untuk menghapus data berdasarkan ID
$query = "DELETE FROM pengaduan WHERE id = '$id'";

if (mysqli_query($conn, $query)) {
    // Jika berhasil, lempar kembali ke halaman utama
    header("location:index.php");
} else {
    echo "Gagal menghapus data: " . mysqli_error($conn);
}