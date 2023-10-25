<?php
require "../actions/db_connect.php";
    $judul_film = $_POST['judul_film'];
    $genre = $_POST['genre'];
    $tgl_rilis = $_POST['tgl_rilis'];
    $studio_produksi = $_POST['studio_produksi'];
    $sinopsis = $_POST['sinopsis'];
    $trailer = $_POST['trailer'];
    $status_film = $_POST['status_film'];
    $gambar_lama = $_POST['gambar_lama']; // Simpan nama gambar yang lama

$gambar = $gambar_lama; // Default menggunakan gambar lama

if ($_FILES['gambar']['error'] == 0) {
    // File gambar baru diunggah
    $gambar = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], 'path/ke/folder/' . $gambar);
}
$result = mysqli_query($conn, "UPDATE film SET judul_film='$judul_film', genre='$genre', tgl_rilis='$tgl_rilis', studio_produksi='$studio_produksi', sinopsis='$sinopsis', trailer='$trailer', status_film='$status_film', gambar='$gambar' WHERE id = $id");
if ($result) {
    // Berhasil memperbarui data
    header('Location: dashboard.php');
    exit;
} else {
    // Gagal memperbarui data
    echo "Error: " . mysqli_error($conn);
}


?>