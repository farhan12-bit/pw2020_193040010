<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script> 
            alert('data berhasil ditambah');
            document.location.href = 'latihan3.php';
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
  <form action="" method="POST"></form>
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
        <input type="text" name="gambar" required>
      </tabel>
    </li>
    <li>
      <button type="submit" name="tambah">Tambah Data!</button>
    </li>
  </ul>

</body>

</html>