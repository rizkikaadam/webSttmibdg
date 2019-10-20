<?php

  error_reporting(0);
  //include "config.php";
  //$database=new DB_class('127.0.0.1', 'root', '', 'sttmibdg_db');

  include 'class/class_koneksi.php';

  include "class/class_pengajar.php";
  $pengajar = new pengajar();

  include "class/class_berita.php";
  $berita = new berita();

  include "class/class_artikel.php";
  $artikel = new artikel();

  include "class/class_unduh.php";
  $unduh = new unduh();

  include "class/class_info.php";
  $info = new info();

  include "class/class_profil.php";
  $profil = new profil();

  include "class/class_t_pertambangan.php";
  $t_pertambangan = new t_pertambangan();

  include "class/class_t_geologi.php";
  $t_geologi = new t_geologi();

  include "class/class_banner.php";
  $banner = new banner();

  include "class/class_agenda.php";
  $agenda = new agenda();

  include "class/class_album.php";
  $album = new album();

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEKOLAH TINGGI TEKNOLOGI MINERAL INDONESIA</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/app.css">
      <link rel="stylesheet" href="css/calendar.css">
      <!--untuk icon-->
      <link rel="stylesheet" href="css/icon/foundation-icons.css" />
      <link rel="stylesheet" href="css/icon/addtional-foundation-icons.css" />
      <!--/untuk icon-->
  </head>
  <body style="background-image: ./images/logo.png">
<header>

  <!-- Sub Navigation -->
  <div class="top-bar">
  </div>
  <!-- /Sub Navigation -->

  <!-- logo and ad break -->
  <div class="row">
    <div class="medium-2 columns">
      <img src="images/logo.png" alt="campus logo" width="100%">
    </div>
    <div class="medium-10 columns">
        <h2>SEKOLAH TINGGI<br> TEKNOLOGI MINERAL INDONESIA</h2>
    </div>
  </div>
  <!-- / logo and ad break -->

  <br>

  <div class="top-bar" >
  <div class="top-bar-left" style="margin-left: 40px;">
    <ul class="dropdown menu" data-dropdown-menu>
      <li><a href="index.php">Home</a></li>
      <li><a href="profil.php">Profil</a></li>
    <!--<li class="has-submenu">
        <a href="#">Program Studi</a>
        <ul class="submenu menu vertical" data-submenu>
          <li><a href="teknik-pertambangan.php">Teknik Pertambangan</a></li>
          <li><a href="teknik-geologi.php">Teknik Geologi</a></li>
        </ul>
      </li>-->
      <li><a href="pengajar.php">Pengajar</a></li>
      <li><a href="galeri.php">Galeri</a></li>
      <li><a href="berita.php">Berita</a></li>
      <li><a href="artikel.php">Artikel</a></li>
      <li><a href="unduh.php">Unduh</a></li>
      <li><a href="info.php">Info</a></li>
      <!--<li><a href="#">Member</a></li>-->
    </ul>
  </div>
  <div class="top-bar-right">
    <!--<ul class="menu">
      <li><input type="search" placeholder="Search"></li>
      <li><button type="button" class="button">Search</button></li>
    </ul>-->
  </div>
</div>

</header>
