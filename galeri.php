<?php

include ('header.php');

?>

<br>
<div class="row">
  <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">
      <div class="row small-up-2 medium-up-3 large-up-2">
        <?php
        $banyak_album=$album->hitung_album();
        if ($banyak_album==0)
        {
          echo "<i class='step fi-info size-24'></i>Belum terdapat Album & Foto !!" ;
        }
        else
        {
        $tampil_album=$album->tampil_album();
        foreach ($tampil_album as $data_album) {
          $album_id=$data_album[album_id];
          $tampil_foto_album=$album->tampil_foto_album($album_id);
          foreach ($tampil_foto_album as $data_foto){
           ?>
            <div class="column">
              <a href="isi_galeri.php?album_id=<?php echo "$data_album[album_id]&nama=$data_album[album_deskripsi]"; ?>"  ><img class="thumbnail" src="../admin_sttmibdg/assets/gambar/<?php echo "$data_foto[foto_nama]"; ?>"></a>
              <p><?php echo "$data_album[album_deskripsi]";  ?></p>
              <hr/>
            </div>
            <?php
              }//akhir menampilkan foto
            }//akhir menampilkan album
          }//akhir menghitung album ?>
          </div>
  </div>
  <?php include 'right.php'; ?>
</div>

<hr>

<?php
include ('footer.php');
?>
