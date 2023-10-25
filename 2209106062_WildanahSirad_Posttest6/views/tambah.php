<?php
require '../views/koneksi.php';

if (isset($_POST['tambah'])) {
    // $nama = $_POST['nama'];
    $judul = htmlspecialchars($_POST['judul']);
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    
    $date = date("Y-m-d H-i-sa");
    
    // upload gambar
    $img = $_FILES['gambar']['name'];
    $explode = explode(',',$img);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$date.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp,'../assets/'.$gambar_baru)){
        $result = mysqli_query($conn, "INSERT INTO buku (id, judul, harga, stok, gambar)
        VALUES('','$judul','$harga','$stok','$gambar_baru')");

        if($result){
            echo "<script>
            alert('Data berhasil ditambahkan');
            window.location='../views/dashboard.php'</script>";
        }else{
            echo "<script>
            alert('Data gagal ditambahkan');
            window.location='../views/dashboard.php'</script>";
        }
    }else{
        echo "<script>
        alert('Gambar gagal diupload')";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="../styles/styleCRUD.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Tambah Data</h1><hr><br>
            <form action="" method="post" enctype="multipart/form-data">
                <!-- <label for="nama">Nama</label>
                <input type="text" name="nama" class="textfield"> -->

                <!-- <label for="judul">Judul</label>
                <input type="text" name="judul" class="textfield"> -->

                <label for="judul">Judul</label>
                <select class="textfield" name="judul" >
                    <option value="Harry Potter and the Philosopher's Stone">Harry Potter and the Philosopher's Stone</option>
                    <option value="Harry Potter and the Chamber of Secrets">Harry Potter and the Chamber of Secrets</option>
                    <option value="Harry Potter and the Prisoner of Azkaban">Harry Potter and the Prisoner of Azkaban</option>
                    <option value="Harry Potter and the Goblet of Fire">Harry Potter and the Goblet of Fire</option>
                    <option value="Harry Potter and the Order of the Phoenix">Harry Potter and the Order of the Phoenix</option>
                    <option value="Harry Potter and the Half-Blood Prince">Harry Potter and the Half-Blood Prince</option>
                    <option value="Harry Potter and the Deathly Hallows">Harry Potter and the Deathly Hallows</option>
                </select>

                <label for="fakultas">Harga</label>
                <input type="text" name="harga" class="textfield">

                <label for="prodi">Stok</label>
                <input type="text" name="stok" class="textfield">

                <label for="gambar">Upload Gambar</label>
                <input type="file" name="gambar" class="textfield">

                <input type="submit" name="tambah" value="Tambah Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>