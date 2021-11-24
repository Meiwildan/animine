<?php
    session_start();
    if(isset($_POST["judul_anime"])){
    include  'koneksi.php';

    $id_anime = $_POST["id"];
    $judul_anime = $_POST['judul_anime'];
    $pengarang = $_POST['pengarang'];
    $studio = $_POST['studio'];
    $cover_anime = $_FILES['cover_anime'];

    $message        = "";

    if($judul_anime==""){
        $message    = "Judul anime harus di isi!";
    }else if($pengarang==""){
        $message    = "Pengarang harus di isi!";
    }else if($studio==""){
        $message    = "studio harus di isi!";
    }else{
        
        if(isset($cover_anime["tmp_name"]) && $cover_anime["tmp_name"]!=""){
            $message    = "cover anime harus dipilih!";
        $filePath = "upload/".basename($cover_anime["name"]);
        move_uploaded_file($cover_anime["tmp_name"], $filePath);

            $conn->query("UPDATE anime SET cover_anime='".$filePath."' WHERE id_anime = ".$id_anime);
        }

       $conn->query("UPDATE anime SET judul_anime='".$judul_anime."', pengarang='".$pengarang."', studio='".$studio."' WHERE id_anime=".$id_anime);

        $message = "Watch List berhasil di Update!";
    }
    $_SESSION["message"] = $message;

    header("location:simpan.php?id=".$id_anime);
exit();
}

header("location:tampil.php");
exit();
?>