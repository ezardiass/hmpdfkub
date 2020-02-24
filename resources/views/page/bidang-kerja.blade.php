@extends('layouts.apps')

@section('body')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
<link rel="stylesheet" href="{{ URL::asset('css/bidang-kerja.css') }}">
<section class="bidang-kerja">
  <div class="container">
    <div class="d-flex justify-content-center">
      <h1 class="bidang-kerja__header">bidang kerja HMPD</h1>
    </div>
    <div class="bidang-kerja__container">
      <div class="bidang-kerja__bidang-info">
        <h2 class="bidang-kerja__nama-bidang">Bidang</h2>
        <h2 class="bidang-kerja__nama-bidang">PAK</h2>
        <div class="bidang-kerja__desc-container">
          <p class="bidang-kerja__desc">
            &emsp;Bidang yang memfasilitasi dan membantu mahasiswa dalam berbagai kegiatan akademik dan keilmuan
            seperti perlombaan kedokteran, pembentukan kelompok belajar, dan lain sebagainya.
          </p>
        </div>
      </div>
      <div class="bidang-kerja__pengurus d-flex justify-content-around">
        <div class="bidang-kerja__pengurus-foto-container bidang-kerja__pengurus-foto-container--1">
        </div>
        <div class="bidang-kerja__pengurus-foto-container bidang-kerja__pengurus-foto-container--2">
        </div>
      </div>
      <div class="bidang-kerja__proker">
        <div class="bidang-kerja__proker-header">
          <h2 class="bidang-kerja__proker-heading bidang-kerja__proker-heading--1">Program</h2>
          <h2 class="bidang-kerja__proker-heading bidang-kerja__proker-heading--2">Kerja</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="bidang-kerja__proker-carousel-container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators bidang-kerja__carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="bidang-kerja__carousel-indicators-list active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bidang-kerja__carousel-indicators-list"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bidang-kerja__carousel-indicators-list"></li>
      </ol>
      <div class="carousel-inner bidang-kerja__carousel-inner">
        <div class="carousel-item active">
          <div class="d-block w-100 bidang-kerja__proker-container">
            <h3 class="bidang-kerja__proker-title">E-Learning</h3>
            <p class="bidang-kerja__proker-desc">Isi kegiatan ini adalah pemberian E-Learning yang dilakukan setiap satu
              minggu sekali dengan mempost bahan kuliah di akun Line resmi HMPD, di web HMPD, maupun media online HMPD
              yang lain. Sebelumnya ada pemberitahuan terkait akan diadakannya E-Learning beserta materi yang akan
              diberikan. Setelah itu diadakan post test di hari berikutnya. Post test terdiri dari soal-soal preklinik
              dan juga disertai soal-soal UKMPPD yang berkaitan dengan topik pada setiap minggunya. Mahasiswa cukup
              menjawab dengan menekan tombol like sesuai jawaban yang dipilih atau dapat menuliskan jawaban tersebut
              dalam kolom komentar. Kemudian setelah E-Learning selesai, maka akan diposting kembali ke setiap akun
              personal yang berteman dengan akun line resmi HMPD agar dapat mengakses rekapan bahan kuliah yang telah
              diberikan, di web resmi HMPD. Hal ini diberikan untuk membantu mahasiswa yang tertinggal E-Learning.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-block w-100 bidang-kerja__proker-container">
            <h3 class="bidang-kerja__proker-title">E-Learning</h3>
            <p class="bidang-kerja__proker-desc">Isi kegiatan ini adalah pemberian E-Learning yang dilakukan setiap satu
              minggu sekali dengan mempost bahan kuliah di akun Line resmi HMPD, di web HMPD, maupun media online HMPD
              yang lain. Sebelumnya ada pemberitahuan terkait akan diadakannya E-Learning beserta materi yang akan
              diberikan. Setelah itu diadakan post test di hari berikutnya. Post test terdiri dari soal-soal preklinik
              dan juga disertai soal-soal UKMPPD yang berkaitan dengan topik pada setiap minggunya. Mahasiswa cukup
              menjawab dengan menekan tombol like sesuai jawaban yang dipilih atau dapat menuliskan jawaban tersebut
              dalam kolom komentar. Kemudian setelah E-Learning selesai, maka akan diposting kembali ke setiap akun
              personal yang berteman dengan akun line resmi HMPD agar dapat mengakses rekapan bahan kuliah yang telah
              diberikan, di web resmi HMPD. Hal ini diberikan untuk membantu mahasiswa yang tertinggal E-Learning.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-block w-100 bidang-kerja__proker-container">
            <h3 class="bidang-kerja__proker-title">E-Learning</h3>
            <p class="bidang-kerja__proker-desc">Isi kegiatan ini adalah pemberian E-Learning yang dilakukan setiap satu
              minggu sekali dengan mempost bahan kuliah di akun Line resmi HMPD, di web HMPD, maupun media online HMPD
              yang lain. Sebelumnya ada pemberitahuan terkait akan diadakannya E-Learning beserta materi yang akan
              diberikan. Setelah itu diadakan post test di hari berikutnya. Post test terdiri dari soal-soal preklinik
              dan juga disertai soal-soal UKMPPD yang berkaitan dengan topik pada setiap minggunya. Mahasiswa cukup
              menjawab dengan menekan tombol like sesuai jawaban yang dipilih atau dapat menuliskan jawaban tersebut
              dalam kolom komentar. Kemudian setelah E-Learning selesai, maka akan diposting kembali ke setiap akun
              personal yang berteman dengan akun line resmi HMPD agar dapat mengakses rekapan bahan kuliah yang telah
              diberikan, di web resmi HMPD. Hal ini diberikan untuk membantu mahasiswa yang tertinggal E-Learning.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev bidang-kerja__proker-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bidang-kerja__carousel-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next bidang-kerja__proker-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon bidang-kerja__carousel-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
@endsection