<?php
function http_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
$data = http_request("http://localhost/dbrest/api/api_edit.php?id=" . $_GET["id"]);
$data = json_decode($data, TRUE);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LatihID</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <style type="text/css">
    
        </style> </head>

    <body>
        <div class="wrap">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <p> <a href="../readapi/tampil.php">Kembali</a> </p>
                        <h1>EDIT</h1>
                        <form action="../api/api_ubah.php" method="post" id="form">
                            <table border="0" class="table">
                            <tr>
                                
                                <td><label for="">ID</label></td>
                                <td><input type="text"  name="id" id="id" placeholder="ID"> </td>
                            </tr>
                            <tr>
                                <td><label for="">Nama</label></td>
                                <td><input type="text"  name="nama" id="nama" placeholder="Nama"> </td>
                            </tr>
                            <tr>
                                <td><label for="">Email</label></td>
                                <td><input type="text"  name="email" id="email" placeholder="Email"> </td>
                            </tr>
                            <tr>
                                <td><label for="">Nomor HP</label></td>
                                <td><input type="text"  name="nomorhp" id="nomorhp" placeholder="Nomor HP"> </td>
                            </tr>
                            <tr>
                                <td><label for="">Pekerjaan</label></td>
                                <td><input type="text"  name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan"> </td>
                            </tr>
                            <tr>
                                <td><button type="submit" class="btn btn-primary">Submit</button>
                            </td>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </body>

    </html>