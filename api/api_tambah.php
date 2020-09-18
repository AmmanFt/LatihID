<?php 
require_once('../config/koneksi.php');
if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['nomorhp']) && isset($_POST['pekerjaan'])) {
 $nama    = $_POST['nama'];
 $email  = $_POST['email'];
 $nomorhp    = $_POST['nomorhp'];
 $pekerjaan    = $_POST['pekerjaan'];
 $sql = $conn->prepare("INSERT INTO user (nama, email, nomorhp, pekerjaan) VALUES (?, ?, ?, ?)");
 $sql->bind_param('ssss', $nama, $email, $nomorhp, $pekerjaan);
 $sql->execute();
 if ($sql) {
  //echo json_encode(array('RESPONSE' => 'SUCCESS'));
  echo "<script>alert('Penyimpanan Data Berhasil Dilakukan!');document.location='../readapi/tampil.php'</script>";
 } else {
  echo json_encode(array('RESPONSE' => 'FAILED'));
 }
} else {
 echo "GAGAL";
}
?>