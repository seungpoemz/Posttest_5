<?php
    require "../actions/db_connect.php";
    $id = $_GET['id'];
    $get = mysqli_query($conn, "DELETE FROM film WHERE id = $id");
    $film = [];

    if ($result) {
        echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'dashboard.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'dashboard.php';
        </script>";
    }
?>
