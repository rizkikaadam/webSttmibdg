<?php

include ('header.php');

?>

<br>
<div class="row">
  <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">
    <?php
    $nama_album=$_GET[nama];
    echo "<h4>$nama_album</h4>";
    ?>
    <hr/>
        <?php
        $banyak_album=$album->hitung_album();
        if ($banyak_album==0)
        {
          echo "<i class='step fi-info size-24'></i>Belum terdapat Album & Foto !!" ;
        }
        else
        {
        $album_id=$_GET['album_id'];
        $tampil_foto=$album->tampil_foto($album_id);
        foreach ($tampil_foto as $data_foto) {
           ?>
               <a data-open='foto-<?php echo "$data_foto[foto_id]";?>'><img class="thumbnail" width="300px" style="float:left;margin:10px;" src="../admin_sttmibdg/assets/gambar/<?php echo "$data_foto[foto_nama]"; ?>"></a>

  <div class="small reveal" id="foto-<?php echo "$data_foto[foto_id]";?>" data-reveal>
    <img class="thumbnail" src="../admin_sttmibdg/assets/gambar/<?php echo "$data_foto[foto_nama]"; ?>">
    <button class="close-button" data-close aria-label="Close modal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <?php
  }//akhir menampilkan album
}//akhir menghitung album ?>

</div>
  <?php include 'right.php'; ?>
<hr>

<?php
include ('footer.php');
?>
