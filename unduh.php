<?php

include ('header.php');

?>

<br>
<div class="row">
  <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">

      <?php
      $banyak_unduh=$unduh->hitung_unduh();
      if ($banyak_unduh==0){
        echo "<li class='accordion-item' data-accordion-item>
          <a href='#' class='accordion-title'><i class='step fi-info size-24'></i>Belum Terdapat Unduhan !!</a>
        </li>" ;
      }
      else {
        ?>
      <ul class="tabs" data-tabs id="example-tabs">
          <li class="tabs-title is-active"><a href="#panel1" aria-selected="true"><i class='step fi-torsos-male-female size-24'></i>&nbsp;&nbsp; &nbsp;&nbsp;Materi</a></li>
          <li class="tabs-title"><a href="#panel2"><i class='step fi-torsos-male-female size-24'></i>&nbsp;&nbsp; &nbsp;&nbsp; Tugas</a></li>
          <li class="tabs-title"><a href="#panel3"><i class='step fi-torsos-male-female size-24'></i>&nbsp;&nbsp; &nbsp;&nbsp; Lainnya</a></li>
        </ul>

        <div class="tabs-content" data-tabs-content="example-tabs">
          <div class="tabs-panel is-active" id="panel1">
            <div class="row">
              <ul class="accordion" data-accordion>
              <?php
              $banyak_materi=$unduh->hitung_materi();
              if ($banyak_materi==0){
                echo "<li class='accordion-item' data-accordion-item>
                  <a href='#' class='accordion-title'><i class='step fi-info size-24'></i>Belum Terdapat Unduhan Materi !!</a>
                </li>" ;
              }
              else {
              $tampil_unduh_materi=$unduh->tampil_unduh_materi();
              foreach ($tampil_unduh_materi as $data) {
              ?>
                <li class="accordion-item" data-accordion-item>
                  <a href='images/<?php echo "$data[file_unduh]"; ?>' download class="accordion-title"><i class='step fi-download size-24'></i><?php echo "$data[judul_unduh]"; ?></a>
                </li>
              <?php
              }
            }
              ?>
              </ul>
            </div>
          </div>
          <div class="tabs-panel" id="panel2">
            <div class="row">
              <ul class="accordion" data-accordion>
                <?php
                $banyak_tugas=$unduh->hitung_tugas();
                if ($banyak_tugas==0){
                  echo "<li class='accordion-item' data-accordion-item>
                    <a href='#' class='accordion-title'><i class='step fi-info size-24'></i>Belum Terdapat Unduhan Tugas !!</a>
                  </li>" ;
                }
                else {
                $tampil_unduh_tugas=$unduh->tampil_unduh_tugas();
                foreach ($tampil_unduh_tugas as $data) {
                  ?>
                    <li class="accordion-item" data-accordion-item>
                      <a href="images/<?php echo "$data[file_unduh]"; ?>" class="accordion-title"><i class='step fi-download size-24'></i><?php echo "$data[judul_unduh]"; ?></a>
                    </li>
                  <?php
                  }
                }
                  ?>
              </ul>
            </div>
          </div>
          <div class="tabs-panel" id="panel3">
            <div class="row">
              <ul class="accordion" data-accordion>
                <?php
                $banyak_lainnya=$unduh->hitung_lainnya();
                if ($banyak_lainnya==0){
                  echo "<li class='accordion-item' data-accordion-item>
                    <a href='#' class='accordion-title'><i class='step fi-info size-24'></i>Belum Terdapat Unduhan Lainnya !!</a>
                  </li>" ;
                }
                else {
                $tampil_unduh_lainnya=$unduh->tampil_unduh_lainnya();
                foreach ($tampil_unduh_lainnya as $data) {
                  ?>
                    <li class="accordion-item" data-accordion-item>
                      <a href="images/<?php echo "$data[file_unduh]"; ?>" class="accordion-title"><i class='step fi-download size-24'></i><?php echo "$data[judul_unduh]"; ?></a>
                    </li>
                  <?php
                  }
                }
                  ?>
              </ul>
            </div>
          </div>
        </div>
  <article>
    </article>

    <?php }//akhir perhitungan unduh ?>
  </div>
  <?php include 'right.php'; ?>
</div>

<hr>

<div class="row column">
  <h4 style="margin: 0;" class="text-center"><i class="step fi-photo size-36"></i>Galeri</h4>
</div>

<hr>

<div class="row small-up-3 medium-up-4 large-up-5">
  <?php
  include('galeri_home.php');
   ?>
</div>
<br/>
<hr>
<?php
include ('footer.php');
?>
