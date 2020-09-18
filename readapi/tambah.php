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

<?php
error_reporting(0);
//buat variabel dari setiap field name form produk
$nama= mysqli_real_escape_string($conect, $_POST['nama']);    //varibel field nama
$email= mysqli_real_escape_string($conect, $_POST['email']);    //varibel field email
$nomorhp= mysqli_real_escape_string($conect, $_POST['nomorhp']);  //varibel field nomorhp
$pekerjaan= mysqli_real_escape_string($conect, $_POST['pekerjaan']);        //varibel field pekerjaan


?>
    <div class="wrap">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                <p>Tambah Data</p> <a href="../readapi/tampil.php">Kembali</a>
                    <h1 class="tulisan">TAMBAH DATA</h1>
                    <form action="../api/api_tambah.php" method="post" id="form">
                        <table border="0" class="table">
                            <tr>
                                <td><label for="">Nama</label></td>
                                <td><input type="text" class= "input" name="nama" id="nama" placeholder="Nama" aria-describedby="helpId"></td>
                            </tr>
                            <tr>
                                <td><label for="">Email</label></td>
                                <td><input type="text" class= "input" name="email" id="email" placeholder="Email" aria-describedby="helpId"></td>
                            </tr>
                            <tr>
                                <td><label for="">Nomor HP</label>
                                <td><input type="text" class= "input" name="nomorhp" id="nomorhp" placeholder="Nomor HP" aria-describedby="helpId"></td>
                            </tr>
                            <tr>
                                <td><label for="">Pekerjaan</label>
                                <td><input type="text" class= "input" name="pekerjaan" id="pekerjaan" placeholder="Pekerjaan" aria-describedby="helpId"> </td>
                            </tr>
                            <tr>
                                <td><button class="btn btn-primary" type="submit" name="simpan" id="simpan">Simpan</button>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</body>

</html>