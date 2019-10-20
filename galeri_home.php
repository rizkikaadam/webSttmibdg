<?php $tampil_foto_home=$album->tampil_foto_home();
foreach ($tampil_foto_home as $data) {
  echo "<div class='column'>
    <a data-open='foto-$data[foto_id]'><img src='../admin_sttmibdg/assets/gambar/$data[foto_nama]' alt='$data[foto_nama]'></a>
  </div>";
  echo "<div class='small reveal' id='foto-$data[foto_id]' data-reveal>
    <img class='thumbnail' src='images/$data[foto_nama]'>
    <button class='close-button' data-close aria-label='Close modal' type='button'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
} ?>
