<head>
    <title>AniMine</title>
    <link rel="shortcut icon" type="image/jpg" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/da908870-662b-4ce0-bcfd-6f4d5a6f7eca/dddvq84-55e730a8-5ff8-4c7c-8ae0-62a20810c34e.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2RhOTA4ODcwLTY2MmItNGNlMC1iY2ZkLTZmNGQ1YTZmN2VjYVwvZGRkdnE4NC01NWU3MzBhOC01ZmY4LTRjN2MtOGFlMC02MmEyMDgxMGMzNGUucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.vtlzKmZrQsZGdtMfO28EgVvtGd5Zz4L-OuEt1hvkcsY">
</head>
<style>
    
    body 
        {
            background-image: url('https://images.alphacoders.com/761/thumbbig-761506.webp');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        h1{
    color: white;
    font-family: arial;
    font-size: 50px;
    text-align: center;
    text-shadow: 2px 1px 5px lightblue;
}
        
</style>
<body>
<h1>Hasil Search</h1>
<?php
    $kolom=$_POST['kolom'];
    $cari=$_POST['cari'];
    $link = mysqli_connect("localhost","root","","db_animine");
    $hasil=mysqli_query($link,"select * from anime where $kolom like '%$cari%'");
    $jumlah=mysqli_num_rows($hasil);
    echo "<br>";
    echo "Ditemukan: $jumlah";
    echo "<br>";
    while ($baris=mysqli_fetch_array($hasil))
    {
        echo "judul_buku : ";
        echo $baris[1];
        echo "<br>";
        echo "penulis : ";
        echo $baris[2];
        echo "<br>";
        echo "jenis_buku : ";
        echo $baris[3];
    }
?>
</body>