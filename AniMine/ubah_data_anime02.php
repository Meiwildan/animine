<?php
include './koneksi.php';
$anime = $_GET["anime"];

$sql = "SELECT * FROM anime WHERE id=".$id_anime;
$result = $conn->query($sql);

$result = $result->fetch_assoc();
?>

<form action="formulir.php" method="post";>
    <input type="hidden" name="id" value="<?php echo $result['id']?>">
    <table>

<tr>
            <td>Judul Anime</td>
            <td>:</td>
            <td><input type="text" name="judul_anime" value="<?php echo $result['judul_anime']?>"></td>
</tr>
<tr>
            <td>Pengarang</td>
            <td>:</td>
            <td><input type="text" name="pengarang" value="<?php echo $result['pengarang']?>"></td>
</tr>
<tr>
            <td>Studio</td>
            <td>:</td>
            <td><input type="text" name="studio" value="<?php echo $result['studio']?>"></td>          
</tr>
<tr>
            <td>Cover Anime</td>
            <td>:</td>
            <td><input type="file" name="cover_anime"></td>
</tr>
</table>

</form>
<?php
     if(isset($_SESSION["message"])){
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
    }
?>