<?php
    require "db_connect.php";
    if (isset($_POST['tambah'])) {
        $judul_film = $_POST['judul_film'];
        $genre = $_POST['genre'];
        $tgl_rilis = $_POST['tgl_rilis'];
        $studio_produksi = $_POST['studio_produksi'];
        $sinopsis = $_POST['sinopsis'];
        $trailer = $_POST['trailer'];
        $status_film = $_POST['status_film'];

        $result = mysqli_query($conn, "INSERT INTO film VALUES ('', '$judul_film', '$genre', '$tgl_rilis', '$studio_produksi', '$sinopsis', '$trailer', '$status_film')");

        if ($result) {
            echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'dashboard.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'dashboard.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" media="screen and (min-width: 320px)" href="mobilep2.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
        <div class="sm-btn" id="sm-btn">
            <img src="sun.png" id="icon">
        </div>
            <h1>Tambah Data</h1><hr><br>
            <form action="" method="post">
                <label for="judul_film">Judul Film</label>
                <input type="text" name="judul_film" class="textfield">
                <label for="genre">Genre Film</label>
                <input type="text" name="genre" class="textfield">
                <label for="tgl_rilis">Tanggal Rilis</label>
                <input type="text" name="tgl_rilis" class="textfield">
                <label for="studio_produksi">Studio Produksi</label>
                <input type="text" name="studio_produksi" class="textfield">
                <label for="sinopsis">Sinopsis Film</label>
                <input type="text" name="sinopsis" class="textfield">
                <label for="trailer">Trailer Film</label>
                
                <input type="url" name="trailer" class="textfield" placeholder="Masukkan URL Trailer Film">

                <!-- Tampilkan tautan di samping input -->
                <a href="#" id="previewLink" target="_blank">Preview Trailer</a>

                <script>
                document.querySelector('input[name="trailer"]').addEventListener('input', function() {
                    // Ambil nilai dari input trailer
                    var trailerUrl = this.value;

                    // Setel tautan pratinjau dengan nilai trailerUrl
                    document.getElementById('previewLink').href = trailerUrl;

                    // Atur teks pratinjau agar sesuai dengan URL atau memberi tahu jika URL kosong
                    document.getElementById('previewLink').innerText = trailerUrl ? 'Preview Trailer' : 'Tidak ada URL';
                });
                </script>

                <label for="status_film">Status Penayangan Film</label>
                <input type="text" name="status_film" class="textfield">
                <input type="submit" name="tambah" value="Tambah Data" class="Login">
            </form>
        </div>
    </section>
</body>
<script src="script.js"></script>
</html>
