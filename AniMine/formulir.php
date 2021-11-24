<!DOCTYPE html>
<html>
<head>
<title>List Anime</title>
    <link rel="shortcut icon" type="image/jpg" href="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/da908870-662b-4ce0-bcfd-6f4d5a6f7eca/dddvq84-55e730a8-5ff8-4c7c-8ae0-62a20810c34e.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2RhOTA4ODcwLTY2MmItNGNlMC1iY2ZkLTZmNGQ1YTZmN2VjYVwvZGRkdnE4NC01NWU3MzBhOC01ZmY4LTRjN2MtOGFlMC02MmEyMDgxMGMzNGUucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.vtlzKmZrQsZGdtMfO28EgVvtGd5Zz4L-OuEt1hvkcsY">
</head>
<body >
   
        <style type="text/css">
        div
    
        {
            background: white;
            background-repeat: repeat;
            background-attachment: fixed;
            background-size: cover;
        
              width: 800px;
              height: 300px;
              border: 3px solid black;
              box-shadow: 3px 2px 6px red;
              padding: 30px;
              margin: auto;
              align-content: center;
        }
        
        label 
        {
            width: 120px;
            display: inline-block;
            margin: 8px
        }
        h1{
    color: black;
    font-family: arial;
    font-size: 50px;
    text-align: center;
    text-shadow: 2px 1px 5px red;
}


p{
    text-indent: 30px;
    line-height: 1.5;
    font-size: 16px;
    color: royalblue;
    font-family: verdana; }
body{
    background-image: url('https://images2.alphacoders.com/106/thumb-1920-1065611.png');
    background-repeat: repeat;
    background-attachment: fixed;
    background-size: cover;
}

        </style>

        <h1 style="text-align: center;">List Anime</h1>
        <div class="center">
            
    
<?php
    session_start();
?>

<form action="simpan.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Judul Anime</td>
            <td>:</td>
            <td><input type="text" name="judul_anime"></td>
         </tr>
        <tr>
            <td>Nama Pengarang</td>
            <td>:</td>
             <td><input type="text" name="pengarang"></td>
          </tr>
         <tr>
             <td>Studio</td>
                <td>:</td>
                <td><input type="text" name="studio"></td>
            </tr>
            <tr>
             <td>Cover Anime</td>
                <td>:</td>
                <td><input type="file" name="cover_anime"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button>Simpan Anime</button></td>
            </tr>
    </table>
    
</form>
</html>
<?php
     if(isset($_SESSION["message"])){
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
    }
?>

    