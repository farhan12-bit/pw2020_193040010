<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script> 
            alert('data berhasil ditambah');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST" enctype="multipart/form-data">
    <ul>
      <li>
        <tabel>
          Nama :
          <input type="text" name="nama" autofocus required>
        </tabel>
      </li>
      <li>
        <tabel>
          NRP :
          <input type="text" name="nrp" required>
        </tabel>
      </li>
      <li>
        <tabel>
          Email :
          <input type="text" name="email" required>
        </tabel>
      </li>
      <li>
        <tabel>
          Jurusan :
          <input type="text" name="jurusan" required>
        </tabel>
      </li>
      <li>
        <tabel>
          Gambar :
          <input type="file" name="gambar" class="gambar" onchange="previewImage()">
        </tabel>
        <img src="img/nopoto.jpg" width="120" style="display: block;" class="img-preview">
      </li>
      <li>
        <button type="submit" name="tambah">Tambah Data!</button>
      </li>
    </ul>
  </form>

  <script src="js/script.js"></script>
</body>

</html>