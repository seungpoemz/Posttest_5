<?php
    require "../actions/db_connect.php";

    $result = mysqli_query($conn, "SELECT * FROM film");
    $film = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $film[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin</title>
    <link rel="stylesheet" media="screen and (min-width: 320px)" href="../styles/mobilep2.css">
</head>
<body>
    <div class="dashboard">
        <main class="dash-container">
            <section class="dash-nav-bar">
            <img src="../assets/logoBioskop.png" alt="">
            <div class="sm-btn" id="sm-btn">
            <img src="../assets/sun.png" id="icon">
        </div>
                <div class="dash-account">
                    <img src="" alt="">
                    <p></p>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></svg> -->
                </div>
            </section>
            <section class="dash-main">
                <h1>Selamat Datang!</h1>
                <p>Real Time : <?php date_default_timezone_set("Asia/Makassar"); echo date ("l, d-M-Y| h:i:sa e")?></p>
                <hr><br>
                <div class="leading-btn">
                    <a href="../views/add.php"><button class="add-btn">Tambah</button></a>
                    <a href="../views/index.php"><button class="add-btn">Home</button></a>
                </div><br>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul Film</th>
                            <th>Genre</th>
                            <th>Tanggal Rilis</th>
                            <th>Studio Produksi</th>
                            <th>Sinopsis</th>
                            <th>Trailer</th>
                            <th>Status Penayangan Film</th>
                            <th>Poster Film</th>
                            <th>Edit/Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach ($film as $fm) :?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $fm['judul_film']; ?></td>
                            <td><?php echo $fm['genre']; ?></td>
                            <td><?php echo $fm['tgl_rilis']; ?></td>
                            <td><?php echo $fm['studio_produksi']; ?></td>
                            <td><?php echo $fm['sinopsis']; ?></td>
                            <td onclick="playVideo('<?php echo $fm['trailer']; ?>')">Trailer</td>
                            <td><?php echo $fm['status_film']; ?></td>
                            <td> <img src="../assets/<?= $fm['gambar'] ?>" alt="ini gambar" width="150px" height="200px"></td>
                            <td class="action">
                                <a href="edit.php?id=<?php echo $fm['id']?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                                <a href="delete.php?id=<?php echo $fm['id']?>"><button class="delete-btn" onclick="confirm('Yakin ingin menghapus <?php echo $fm['judul_film']?>?')"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                            </td>
                        </tr>
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
<script src="../scripts/script.js"></script>
</html>
