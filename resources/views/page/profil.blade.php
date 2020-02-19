@extends('layouts.apps')

@section('body')
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset("css/profil.css")}}">

<div style="background-color: black;  width:100vw">
    <div class="container">
        <div class="row" id="gambarLogo">
            <img src="{{asset("image/hmpd.png")}}" alt="" class="profil__logo">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h2 id="header">APA ITU HMPD?</h2>
        </div>
    </div>
    <div class="container">
        <div class="col-2">

        </div>
        <div class="col-10" id="apaItuHMPD">
            <div class="column">
                <div class="col">
                    Himpunan Mahasiswa Pendidikan Dokter didirikan pada tanggal 20 Februari 2015. Badan ini
                    memiliki fungsi sebagai wadah pengembangan kepribadian luhur, wadah pergerakan ,mahasiswa, sarana
                    kaderisasi, dan sarana informasi, komunikasi, dan
                    penguat rasa kekeluargaan antar mahasiswa Pendidikan Dokter FKUB dan memiliki salah satu tujuannya
                    yaitu terbentuknya para pemimpin yang berasal dari Program Studi Pendidikan Dokter FKUB baik dalam
                    lokal, regional, maupun nasional.
                </div>
                <br>
                <div class="col">
                    Himpunan ini akan selalu memilki harapan sebagai rumah yang akan selalu menaungi dan
                    memberikan manfaat yang luas serta menjadi penghubung yang baik bagi semua elemen yang berperan
                    penting dalam keberlangsungan program studi Pendidikan
                    Dokter FKUB. Akhirnya, HMPD adalah sebuah doa, usaha, cita-cita, maupun kebutuhan dari seluruh
                    mahasiswa Pendidikan Dokter FKUB.
                </div>
            </div>
        </div>
        <div class="col-2">
        </div>
    </div>
    <div class="container">
        <div class="row" style="margin-left: 32px; margin-bottom: -16px">
            <h2 id="headerVisiMisi">VISI</h2>
        </div>
    </div>
    <div class="container">
        <div class="row" style="margin-left: 72px;">
            <h2 id="headerVisiMisi">MISI</h2>
        </div>
    </div>
    <div class="container" style="display:flex;">
        <div class="col" id="textBoxVisi">
            <div class="column">
                <div class="col" >
                    <p>[Visi HMPD Arkananta]</p>
                </div>
                <div class="col">
                    <p>Terwujudnya HMPD FK UB sebagai himpunan yang sinergis, aktif, dan kritis yang berdampak untuk
                        masyarakat
                        dan anggota serta berprestasi di tingkat nasional maupun internasional</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container" >
        <div class="col" id="misiSemiHead">
            <p>[Misi HMPD Arkananta]</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col" id="pemisahMisi">
                <div class="row" id="textBoxMisi">
                    <p>1. Memfasilitasi mahasiswa prodi kedokteran untuk mengembangkan kemampuan akademik demi
                        terwujudnya prodi kedokteran yang berprestasi baik di tingkat nasional maupun internasional</p>
                    <p>2. Memberikan arah gerak dan kajian isu yang berdampak guna mencerdaskan dan memberi wawasan bagi
                        pengurus dan anggota HMPD FK UB</p>
                    <p>3. Melakukan pengkaderan yang tepat untuk mengembangkan sumber daya mahasiswa yang unggul dan
                        menyalurkan minat bakat pengurus dan anggota HMPD FK UB</p>
                    <p>4. Melakukan branding yang optimal melalui media sosial dan mengembangkan kemampuan pengurus dan
                        anggota HMPD FK UB dalam bidang multimedia</p>
                    <p>5. Berkontribusi dalam pengembangan masyarakat melalui pembinaan dan pengabdian yang berdampak
                        dan berkelanjutan
                    </p>
                </div>
            </div>
            <div class="col" id="pemisahMisi">
                <div class="row" id="textBoxMisi">
                    <p>6. Meningkatkan kesejahteraan mahasiswa, kestabilan finansial dan relasi eksternal HMPD FK UB</p>
                    <p>7. Memaksimalkan fungsi senat dan presidium dokter muda untuk menyalurkan aspirasi anggota HMPD
                        FK UB
                    </p>
                    <p>8. Melaksanakan pengkaderan anggota HMPD FK UB ke ISMKI secara sistematis</p>
                    <p>9. Mewujudkan grima HMPD FK UB menjadi tempat yang terbuka bagi seluruh anggota HMPD FKUB untuk
                        menciptakan iklim kekeluargaan</p>
                    <p>10. Memaksimalkan fungsi MPH sebagai majelis yang secara aktif memberikan saran dan evaluasi yang
                        konstruktif
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h2 id="header" style="margin-top: 4vh;">STRUKTUR PENGURUS</h2>
        </div>
    </div>
    <div class="container">
        <div class="row" id="gambarLogo">
            <img src="{{asset("image/pohon.png")}}" alt="" class="profil__pohon">
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
@endsection
