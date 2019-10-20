<?php

include ('header.php');
//menampilkan data profil
$banyak_dosen=$pengajar->banyak_dosen();
$tampil_profil=$profil->tampil();
foreach ($tampil_profil as $data_profil) {
?>

<br>
<div class="row">
  <div class="large-12 columns" style="">
      <div class="medium-12 columns">
        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
          <ul class="orbit-container">
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
            <?php
            $tampil_banner=$banner->tampil();
            foreach ($tampil_banner as $data_banner) {

             ?>
            <li class="orbit-slide">
              <img class="orbit-image" style="height:600px;" src="images/<?php echo "$data_banner[banner]";?>" alt="Space">
            </li>
            <?php } ?>
          </ul>
        </div>
  </div>
  <hr>
    <div class="row">
      <hr>
      <div class="medium-6 columns medium-push-6">
        <img class="thumbnail" src="<?php echo "../admin_sttmibdg/assets/gambar/$data_profil[foto_ketua]"; ?>">
      </div>
      <div class="medium-6 columns medium-pull-6">

        <!--<h3><i class='step fi-crown size-36'></i> Sambutan Ketua </h3>
        <p><?php echo "$data_profil[sambutan]"; ?></p>-->
      </div>
    </div>

    <div class="row">
      <div class="medium-3 columns">
        <h3><i class='step fi-compass size-36'></i> Visi</h3>
        <p><?php echo "$data_profil[visi]"; ?></p>
      </div>
      <div class="medium-3 columns">
        <h3><i class='step fi-compass size-36'></i> Misi</h3>
        <p><?php echo "$data_profil[misi]"; ?></p>
      </div>
      <div class="medium-3 columns">
        <h3><i class='step fi-compass size-36'></i> Tujuan</h3>
        <p><?php echo "$data_profil[tujuan]"; ?></p>
      </div>
      <div class="medium-3 columns">
        <h3><i class='step fi-target size-36'></i> Sasaran</h3>
        <p><?php echo "$data_profil[sasaran]"; ?></p>
      </div>
    </div>
    <hr>
    <h3><i class='step fi-target size-36'></i> Program Studi</h3>
    <hr>
    <div class="row">
      <div class="medium-6 columns">
        <h3><i class='step fi-compass size-36'></i>Teknik Pertambangan</h3>
        <p>Teknik Pertambangan meliputi segala hal yang berhubungan dengan penambangan di darat dan di laut seperti metoda, sistem, tahap-tahap penambangan mulai dari penyelidikan umum hingga development</p>
      </div>
      <div class="medium-6 columns">
        <h3><i class='step fi-compass size-36'></i>Teknik Geologi</h3>
        <p>Program Studi Geologi Meliputi bidang kebumian a.l: mempelajari jenis dan sifat bahan termasuk keberadaan dan potensinya serta pembuatan peta geologi untuk penggunaan dalam industri dan aplikasinya</p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="medium-12 columns">
        <h3><i class='step fi-book size-36'></i> Sejarah</h3>
        <p><?php echo "$data_profil[sejarah]"; ?></p>
      </div>
    </div>

    <hr>

    <div class="row column">
      <ul class="vertical medium-horizontal menu expanded text-center">
        <li><a href="#"><div class="stat"><?php echo "$data_profil[banyak_mahasiswa]"; ?></div><span>Mahasiswa</span></a></li>
        <li><a href="#"><div class="stat"><?php echo "$banyak_dosen"; ?></div><span>Dosen</span></a></li>
        <li><a href="#"><div class="stat"><?php echo "$data_profil[banyak_staf]"; ?></div><span>Staff</span></a></li>
      </ul>
    </div>

    <hr>

    <div class="row small-up-3 medium-up-4 large-up-5">
      <?php
      include('galeri_home.php');
       ?>
    </div>
  </div>
</div>

<hr>
<?php
}//akhir menampilkan data profil
include ('footer.php');
?>
