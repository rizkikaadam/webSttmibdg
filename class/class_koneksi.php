<?php
class koneksi
{
  public function koneksi_db(){
  $koneksi = mysqli_connect("localhost", "root", "", "u3028214_sttmibdg");
  //$koneksi = mysqli_connect("202.150.213.164", "u3028214_sttmibd", "sttmibdg12345", "u3028214_sttmibdg");
  return $koneksi;
  }
}

?>
