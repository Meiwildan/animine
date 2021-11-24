<h1>Delete Anime</h1>
<?php
    session_start();
    if(isset($_GET["id"])){
        include 'koneksi.php';

        $conn->query("DELETE FROM anime WHERE id_anime = ".$_GET["id"]);

    }
    header("location:tampil.php");
    exit();
?>