<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url 
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id 
$m = query("SELECT = FROM mahasiswa WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script> 
            alert('data berhasil diubah');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal diubah!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Ubah Data Mahasiswa</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <li>
      <tabel>
        Nama :
        <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>">
      </tabel>
    </li>
    <li>
      <tabel>
        NRP :
        <input type="text" name="nrp" required value="<?= $m['nrp']; ?>">
      </tabel>
    </li>
    <li>
      <tabel>
        Email :
        <input type="text" name="email" required value="<?= $m['email']; ?>">
      </tabel>
    </li>
    <li>
      <tabel>
        Jurusan :
        <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
      </tabel>
    </li>
    <li>
      <tabel>
        Gambar :
        <input type="file" name="gambar" class="gambar" onchange="previewImage()">
      </tabel>
      <img src="img/<?= $m['gambar']; ?>" width="120" style="display: block;" class="img-preview">
    </li>
    <li>
      <button type="submit" name="ubah">Ubah Data!</button>
    </li>
    </ul>
  </form>

  <script src="js/script.js"></script>
</body>

</html>