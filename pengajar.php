<?php

include ('header.php');

?>

<br>
<div class="row">
  <div class="large-8 columns" style="border-right: 1px solid #E3E5E8;">
      <ul class="tabs" data-tabs id="example-tabs">
          <li class="tabs-title is-active"><a href="#panel1" aria-selected="true"><i class='step fi-torsos-male-female size-24'></i>&nbsp;&nbsp; &nbsp;&nbsp;Dosen Tetap</a></li>
          <li class="tabs-title"><a href="#panel2"><i class='step fi-torsos-male-female size-24'></i>&nbsp;&nbsp; &nbsp;&nbsp; Dosen Luar Biasa</a></li>
        </ul>

        <div class="tabs-content" data-tabs-content="example-tabs">
          <div class="tabs-panel is-active" id="panel1">
            <div class="row">
              <ul class="accordion" data-accordion>
              <?php
              $tampil_tetap=$pengajar->tampil_tetap();
              foreach ($tampil_tetap as $data) {
              ?>
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title"><i class='step fi-torso size-24'></i><?php echo "$data[dosen_nama]"; ?></a>
                  <div class="accordion-content" data-tab-content>
                      <p><img src="../admin_sttmibdg/assets/gambar/<?php echo "$data[foto]"; ?>" alt="image for article" alt="article preview image"></p>
                        <span><i class="fi-torso"> Nama : <?php echo "$data[dosen_nama]"; ?></i></span><br/>
                        <span><i class="fi-calendar"> Tanggal Lahir : <?php echo "$data[tmpt_lahir],$data[tgl_lahir]"; ?></i></span><br/>
                        <span><i class="fi-star"> Pendidikan Terakhir : <?php echo "$data[pendidikan]"; ?></i></span><br/>
                        <span><i class="fi-star"> Mengajar : <?php echo "$data[mengajar]"; ?></i></span>
                  </div>
                </li>
              <?php
              }
              ?>
              </ul>
            </div>
          </div>
          <div class="tabs-panel" id="panel2">
            <div class="row">
              <ul class="accordion" data-accordion>
                <?php
                  $tampil_lb=$pengajar->tampil_lb();
                  foreach ($tampil_lb as $data) {
                  ?>
                    <li class="accordion-item" data-accordion-item>
                      <a href="#" class="accordion-title"><i class='step fi-torso size-24'></i><?php echo "$data[dosen_nama]"; ?></a>
                      <div class="accordion-content" data-tab-content>
                          <p><img src="../admin_sttmibdg/assets/gambar/<?php echo "$data[foto]"; ?>" alt="image for article" alt="article preview image"></p>
                            <span><i class="fi-torso"> Nama : <?php echo "$data[dosen_nama]"; ?></i></span><br/>
                            <span><i class="fi-calendar"> Tanggal Lahir : <?php echo "$data[tmpt_lahir],$data[tgl_lahir]"; ?></i></span><br/>
                            <span><i class="fi-star"> Pendidikan Terakhir : <?php echo "$data[pendidikan]"; ?></i></span><br/>
                            <span><i class="fi-star"> Mengajar : <?php echo "$data[mengajar]"; ?></i></span>
                      </div>
                    </li>
                  <?php
                  }
                  ?>
              </ul>
            </div>
          </div>
        </div>
  <article>
    </article>

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
