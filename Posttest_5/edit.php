<?php
    require "db_connect.php";
    $id = $_GET['id'];
    $get = mysqli_query($conn, "SELECT * FROM film WHERE id = $id");
    $film = [];

    while ($row = mysqli_fetch_assoc($get)) {
        $film[] = $row;
    }
    $film = $film[0];

    if (isset($_POST['ubah'])) {
        $judul_film = $_POST['judul_film'];
        $genre = $_POST['genre'];
        $tgl_rilis = $_POST['tgl_rilis'];
        $studio_produksi = $_POST['studio_produksi'];
        $sinopsis = $_POST['sinopsis'];
        $trailer = $_POST['trailer'];
        $status_film = $_POST['status_film'];

        $result = mysqli_query($conn, "UPDATE film SET judul_film='$judul_film', genre='$genre', tgl_rilis='$tgl_rilis', studio_produksi='$studio_produksi', sinopsis='$sinopsis', trailer='$trailer', status_film='$status_film' WHERE id = $id");

        if ($result) {
            echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'dashboard.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Data gagal diubah!');
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
    <title>Edit Data</title>
    <link rel="stylesheet" media="screen and (min-width: 320px)" href="mobilep2.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
        <div class="sm-btn" id="sm-btn">
            <img src="sun.png" id="icon">
        </div>
            <h1>Edit Data</h1><hr><br>
            <form action="" method="post">
                <label for="judul_film">Judul Film</label>
                <input type="text" name="judul_film" value="<?php echo $film['judul_film'] ?>" class="textfield">
                <label for="genre">Genre</label>
                <input type="text" name="genre" value="<?php echo $film['genre'] ?>" class="textfield">
                <label for="tgl_rilis">Tanggal Rilis</label>
                <input type="text" name="tgl_rilis" value="<?php echo $film['tgl_rilis'] ?>" class="textfield">
                <label for="studio_produksi">Studio Produksi</label>
                <input type="text" name="studio_produksi" value="<?php echo $film['studio_produksi'] ?>" class="textfield">
                <label for="sinopsis">Sinopsis Film</label>
                <input type="text" name="sinopsis" value="<?php echo $film['sinopsis'] ?>" class="textfield">
                <label for="trailer">Trailer Film</label>
                <input type="url" name="trailer" value="<?php echo $film['trailer'] ?>" class="textfield">

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
                <input type="text" name="status_film" value="<?php echo $film['status_film'] ?>" class="textfield">
                <input type="submit" name="ubah" value="Edit Data" class="Login">
            </form>
        </div>
    </section>
</body>
<script src="script.js"></script>
</html>
