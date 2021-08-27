<?php

include('koneksi.php');

$sql = "SELECT tb_mahasiswa.mhs_nama, tb_mahasiswa_nilai.nilai FROM tb_mahasiswa_nilai LEFT JOIN tb_mahasiswa ON tb_mahasiswa_nilai.mhs_id=tb_mahasiswa.mhs_id LEFT JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id=tb_matakuliah.mk_id WHERE tb_matakuliah.mk_kode='MK303' ORDER BY tb_mahasiswa_nilai.nilai DESC LIMIT 0,1";
$result = mysqli_query($koneksi, $sql);

while ($row = mysqli_fetch_array($result)) {
  echo 'Nama : ' . $row['mhs_nama'] . '<br>';
  echo 'Nilai : ' . $row['nilai'];
}