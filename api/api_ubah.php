<?php 
require_once('../config/koneksi.php');
if (isset($_POST['id'])) {
    $id                 = $_POST['id'];
    $nama               = $_POST['nama'];
    $email              = $_POST['email'];
    $nomorhp            = $_POST['nomorhp'];
    $pekerjaan          = $_POST['pekerjaan'];
    $sql = $conn->prepare("UPDATE user SET nama=?, email=?, nomorhp=?, pekerjaan=? WHERE id=?");
    $sql->bind_param('ssssd', $nama, $email, $nomorhp, $pekerjaan, $id);
    $sql->execute();
    if ($sql) {
        //echo json_encode(array('RESPONSE' => 'SUCCESS'));
        header("location:../readapi/tampil.php");
    } else {
        echo json_encode(array('RESPONSE' => 'FAILED'));
    }
} else {
    echo "GAGAL";
}

?>