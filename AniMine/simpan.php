<?php
    session_start();
    if(isset($_POST["judul_anime"])){
    include  'koneksi.php';

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
        $message    = "Studio harus di isi!";
    }else if(!isset($cover_anime["tmp_name"]) || $cover_anime["tmp_name"]==""){
        $message    = "cover anime harus dipilih!";
    }else{
        
        $filePath = "upload/".basename($cover_anime["name"]);
        move_uploaded_file($cover_anime["tmp_name"], $filePath);

        $conn->query("INSERT INTO anime VALUES (null, '".$judul_anime."' , '".$pengarang."' , '".$studio."' , '".$filePath."')");

        $message = "Watch List berhasil ditambahkan!";
    }
    $_SESSION["message"] = $message;
}

header("location:formulir.php");
exit();
?>