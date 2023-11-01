<?php
require "../views/koneksi.php";
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM buku where id=$id");

$buku = [];

while ($row = mysqli_fetch_assoc($result)){
    $buku[] = $row;
}

$buku = $buku[0];


if (isset($_POST['edit'])) {
    $judul = $_POST['judul'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $result = mysqli_query($conn, "UPDATE buku SET judul = '$judul', harga='$harga', stok='$stok' WHERE id = '$id' ");

    if ($result) {
        echo "
        <script>
            alert('Data berhasil Diubah!');
            document.location.href = '../views/dashboard.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah!');
            document.location.href = '../views/edit.php'
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
    <link rel="stylesheet" href="../styles/styleCRUD.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Edit Data</h1><hr><br>
            <form action="" method="post">
                <label for="judul">Judul</label>
                <input type="text" name="judul" value="<?php echo $buku['judul']?>" class="textfield">
                <label for="harga">Harga</label>
                <input type="text" name="harga" value="<?php echo $buku['harga']?>" class="textfield">
                <label for="stok">stok</label>
                <input type="text" name="stok" value="<?php echo $buku['stok']?>" class="textfield">
                <input type="submit" name="edit" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>