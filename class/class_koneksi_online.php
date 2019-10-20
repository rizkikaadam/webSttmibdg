<?php
//untuk koneksi online
class koneksi
{
  public function koneksi_db(){
  $koneksi = mysqli_connect("156.67.212.118", "u8725395_admin", "sttmibdg12345", "u8725395_sttmibdg");
  return $koneksi;
  }
}

?>
