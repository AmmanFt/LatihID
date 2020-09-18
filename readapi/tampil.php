<?php

function http_request($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$data = http_request("http://localhost/LatihID/api/api_tampil.php");
$data = json_decode($data, TRUE); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LatihID</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <style type="text/css">
          body {
               margin-top: 20px;
          }
        </style>
         </head>

    <body>
        <div class="wrap">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                    <p>DATA PRODUK</p> <a href="../readapi/tambah.php">Tambah Data</a>
                    <table class="table table-bordered" border="1" cellspacing="0" cellpadding="5">
                        <tr>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Email</td>
                            <td>Nomor HP</td>
                            <td>Pekerjaan</td>
                            <td>Aksi</td>
                        </tr>
                        <?php foreach ($data as $data) { ?>
                            <tr>
                                <td>
                                    <?= $data["id"] ?>
                                </td>
                                <td>
                                    <?= $data["nama"] ?>
                                </td>
                                <td>
                                    <?= $data["email"] ?>
                                </td>
                                <td>
                                    <?= $data["nomorhp"] ?>
                                </td>
                                <td>
                                    <?= $data["pekerjaan"] ?>
                                </td>
                                <td colspan="2"> <a href="../readapi/edit.php?id=<?= $data['id'] ?>">Edit</a> <a href="../api/api_hapus.php?id=<?= $data['id'] ?>">Hapus</a> </td>
                            </tr>
                            <?php } ?>
                    </table>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            
        </div>
    </body>
    </html>