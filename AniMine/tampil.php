<!DOCTYPE html>
<html>
    <head>
    <title>View Watch List</title>
    <link rel="shortcut icon" type="image/jpg" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/da908870-662b-4ce0-bcfd-6f4d5a6f7eca/dddvq84-55e730a8-5ff8-4c7c-8ae0-62a20810c34e.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2RhOTA4ODcwLTY2MmItNGNlMC1iY2ZkLTZmNGQ1YTZmN2VjYVwvZGRkdnE4NC01NWU3MzBhOC01ZmY4LTRjN2MtOGFlMC02MmEyMDgxMGMzNGUucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.vtlzKmZrQsZGdtMfO28EgVvtGd5Zz4L-OuEt1hvkcsY">
        <style>
          body {background-image: url('https://images.alphacoders.com/933/thumb-1920-933601.jpg');
            background-repeat: repeat;
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


p{
    text-indent: 30px;
    line-height: 1.5;
    font-size: 16px;
    color: royalblue;
    font-family: verdana; }
        </style>
</head>
<body>
    <h1>View Anime</h1>
<?php
include 'koneksi.php';
$getanime = $conn->query("SELECT * FROM anime");
while($fetchProduct = $getanime->fetch_assoc()) {
?>

<table style="display:inline-table;width:200px">
    <tr>
        <td><img style="width:100%" src="<?=$fetchProduct["cover_anime"]?>"></td>
    </tr>
    <tr>
        <td>
            <strong><?=$fetchProduct["judul_anime"]?></br>
            <?=$fetchProduct["pengarang"]?></br>
            <?=$fetchProduct["studio"]?></strong>
        </td>
    </tr>
    <tr>
        <td>
            <a href="proses_update_data_anime.php?id=<?=$fetchProduct["id_anime"]?>"><button>Update</button>
            <a href="delete.php?id=<?=$fetchProduct["id_anime"]?>"><button>Delete</button>
        </td>
    </tr>

<?php
    }
?>
<body>
</html>