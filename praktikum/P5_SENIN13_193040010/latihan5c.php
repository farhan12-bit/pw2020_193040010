<?php
//menghubungkan dengan file php lainnya
require 'functions.php';

//melakukan query
$apl = query("SELECT * FROM apparel")



?>

<html>

<head>
  <meta charset="UTF-8">
  <title>193040010</title>
</head>

<body>
  <div class="container">
    <?php foreach ($apparel as $apl) : ?>
      <p class="name">
        <a href="detail.php?id=<?= $apl['id'] ?>">
          <?= $apl['nama'] ?>
        </a>
      </p>

    <?php endforeach;  ?>
  </div>
</body>

</html>