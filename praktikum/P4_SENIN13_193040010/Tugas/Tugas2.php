<?php
$pakaian = [
    [
        "photo" => "ACEH.jpg",
        "nama pakaian" => "ulee balang",
        "bahan" => "sutra",
        "asal provinsi" => "nanggroe aceh darussalam",
        "warna" => "hitam sileuweu",
    ],
    [
        "photo" => "BALI.jpg",
        "nama pakaian" => "Safari",
        "bahan" => "Sutra",
        "asal provinsi" => "Bali",
        "warna" => "Kream",
    ],
    [
        "photo" => "BANGKA BELITUNG.jpg",
        "nama pakaian" => "Paksian",
        "bahan" => "Beludru atau Sutra",
        "asal provinsi" => "Bangka Belitung",
        "warna" => "Merah atau Ungu",
    ],
    [
        "photo" => "JAKARTA.jpg",
        "nama pakaian" => "Betawi",
        "bahan" => "Sutra",
        "asal provinsi" => "DKI Jakarta",
        "warna" => "Terang Gelap",
    ],
    [
        "photo" => "JAWA BARAT.jpg",
        "nama pakaian" => "Kebaya",
        "bahan" => "Beludru",
        "asal provinsi" => "Jawa Barat",
        "warna" => "Putih",
    ],
    [
        "photo" => "LAMPUNG.jpg",
        "nama pakaian" => "Tulang Bawang",
        "bahan" => "Tapis",
        "asal provinsi" => "Lampung",
        "warna" => "Putih Emas",
    ],
    [
        "photo" => "RIAU.jpg",
        "nama pakaian" => "Melayu",
        "bahan" => "Satin dan Sutra",
        "asal provinsi" => "Riau",
        "warna" => "Emas",
    ],
    [
        "photo" => "SUMATRA SELATAN.jpg",
        "nama pakaian" => "Aesan Gede",
        "bahan" => "Sutra",
        "asal provinsi" => "Sumatra Selatan",
        "warna" => "Merah dan Emas",
    ],
    [
        "photo" => "SUMATRA.jpg",
        "nama pakaian" => "Ulos",
        "bahan" => "Sutra",
        "asal provinsi" => "Sumatra Utara",
        "warna" => "Hitam dan Merah",
    ],
    [
        "photo" => "YOGYAKARTA.jpg",
        "nama pakaian" => "Kesatrian",
        "bahan" => "Beludru",
        "asal provinsi" => "D.I. Yogyakarta",
        "warna" => "Hitam",
    ],
];
?>

<html>
    <head>
        <title>Tugas2_193040010</title>
    </head>
    <style>
        body {
            background-color: navy;
        }
        table {
            background-color: DarkOrange;
            border : 1px solid black;
            text-align : center;
            font-size : 30px;
        }

        td{
            padding : 20px;
        }
        h3{
            text-align : center;
            font-size : 50px;
            color : white;
        }
        h5 a{
            text-decoration : none;
            color : white;
            font-size : 50px;
        }
    </style>
    <body>
        <h3>Pakaian Adat</h3>
        <table border="1px">
            <tr>
                <th>Gambar</th>
                <th>Nama Pakaian</th>
                <th>Bahan</th>
                <th>Asal Provinsi</th>
                <th>Warna</th>
            </tr>
            <?php foreach ($pakaian as $p) { ?>
            <tr>
                <td><img style="width : 250px; height : 250px;" src="../img/<?= $p['photo']; ?>"></td>
                <td><?= $p["nama pakaian"]; ?></td>
                <td><?= $p["bahan"]; ?></td>
                <td><?= $p["asal provinsi"]; ?></td>
                <td><?= $p["warna"]; ?></td>
            </tr>
            <?php } ?>
        </table>
        <h5 align="center"><a href="../../index.php">~~KEMBALI~~</a></h5>
