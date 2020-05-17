<?php
//menghubungkan dengan file php lainnya
require 'functions.php';
//melakukan query
$apparel = query("SELECT * FROM apparel")

?>

<html>

<head>
  <title>Index</title>
</head>

<body>
  <div class="container">
    <table cellpading="10" cellspacing="0" border="1">
      <tr>
        <th>Id</th>
        <th>Nama_Apparel</th>
        <th>Bahan</th>
        <th>asal_provinsi</th>
        <th>Gambar</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach ($apparel as $apl) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><?= $apl["Nama_Apparel"]; ?></td>
          <td><?= $apl["bahan"]; ?></td>
          <td><?= $apl["asal_provinsi"]; ?></td>
          <td><img width="60px" src="img/<?= $apl["Gambar"]; ?>"></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach;  ?>
    </table>
</body>

</html>