@extends('layouts.apps')

@section('body')
<link rel="stylesheet" href="{{asset("css/home.css")}}">
<main>
    <section id="jumbotron">
    </section>

    <section id="about_us">
        <div class="container">
            <div class="d-flex justify-content-around flex-wrap">
                <div class="col-lg-6" id="about-us-left">
                    <img src="{{asset("image/about-us.svg")}}" id="about-us-image">
                </div>
                <div class="col-lg-6" id="about-us-right">
                    <span class="header">Tentang Kami</span>
                    <span class="paragraph"><br>
                        Himpunan Mahasiswa Pendidikan Dokter memiliki fungsi sebagai wadah pengembangan kepribadian
                        luhur, wadah pergerakan
                        ,mahasiswa, sarana kaderisasi, dan sarana informasi, komunikasi, dan penguat rasa kekeluargaan
                        antar mahasiswa Pendidikan Dokter FKUB dan memiliki salah satu tujuannya yaitu terbentuknya para
                        pemimpin yang berasal dari Program Studi Pendidikan Dokter FKUB baik dalam lokal, regional,
                        maupun nasional.
                    </span>
                </div>
            </div>
        </div>
    </section>

    @if (count($news)>6)
    <section id="what_new">
        <div class="container">
            <div class="mx-auto header" id="head">What's New ?</div>
            <div id="cardCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the
                                            bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the
                                            bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the
                                            bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the
                                            bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the
                                            bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top"
                                        src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the
                                            bulk of the
                                            card's content.</p>
                                        <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#cardCarousel" role="button" data-slide="prev"
                    style="left:-10vw">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#cardCarousel" role="button" data-slide="next"
                    style="right:-10vw">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div id="cardCarouselMini" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the
                                        bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the
                                        bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the
                                        bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#cardCarouselMini" role="button" data-slide="prev"
                    style="left:-10vw">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#cardCarouselMini" role="button" data-slide="next"
                    style="right:-10vw">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="mx-auto header" id="button">
                <a class="btn btn-primary isi-button">Lebih Lanjut</a>
            </div>
        </div>
    </section>
    @endif


    @if (count($event)>3)
    <section id="upcoming_event">
        <div class="container">
            <div class="mx-auto header" id="head">Upcoming Event</div>
            <div class="d-flex justify-content-around flex-wrap">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <section id="bidang_kerja">
        <div class="container">
            <div class="mx-auto header" id="head">Bidang Kerja</div>
            <div id="cardCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$bidangKerja[0]->logo_img}}" alt="Card image cap">
                                    <div class="card-body align-bottom">
                                        <h4 class="card-title">{{$bidangKerja[0]->name}}</h4>
                                        <p class="card-text">
                                            <?php 
                                            $temp = explode(" ",$bidangKerja[0]->description);
                                            $desc = "";
                                            for ($i=0; $i < 12; $i++) { 
                                            $desc .= $temp[$i] . " ";    
                                            }
                                            echo $desc . "..."
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url("/bidang-kerja/1")}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$bidangKerja[1]->logo_img}}" alt="Card image cap">
                                    <div class="card-body align-bottom">
                                        <h4 class="card-title">{{$bidangKerja[1]->name}}</h4>
                                        <p class="card-text">
                                            <?php 
                                            $temp = explode(" ",$bidangKerja[1]->description);
                                            $desc = "";
                                            for ($i=0; $i < 12; $i++) { 
                                            $desc .= $temp[$i] . " ";    
                                            }
                                            echo $desc . "..."
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url("/bidang-kerja/2")}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$bidangKerja[2]->logo_img}}" alt="Card image cap">
                                    <div class="card-body align-bottom">
                                        <h4 class="card-title">{{$bidangKerja[2]->name}}</h4>
                                        <p class="card-text">
                                            <?php 
                                            $temp = explode(" ",$bidangKerja[2]->description);
                                            $desc = "";
                                            for ($i=0; $i < 12; $i++) { 
                                            $desc .= $temp[$i] . " ";    
                                            }
                                            echo $desc . "..."
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url("/bidang-kerja/3")}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$bidangKerja[3]->logo_img}}" alt="Card image cap">
                                    <div class="card-body align-bottom">
                                        <h4 class="card-title">{{$bidangKerja[3]->name}}</h4>
                                        <p class="card-text">
                                            <?php 
                                            $temp = explode(" ",$bidangKerja[3]->description);
                                            $desc = "";
                                            for ($i=0; $i < 12; $i++) { 
                                            $desc .= $temp[$i] . " ";    
                                            }
                                            echo $desc . "..."
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url("/bidang-kerja/4")}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$bidangKerja[4]->logo_img}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$bidangKerja[4]->name}}</h4>
                                        <p class="card-text">
                                            <?php 
                                            $temp = explode(" ",$bidangKerja[4]->description);
                                            $desc = "";
                                            for ($i=0; $i < 12; $i++) { 
                                            $desc .= $temp[$i] . " ";    
                                            }
                                            echo $desc . "..."
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url("/bidang-kerja/4")}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="{{$bidangKerja[5]->logo_img}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$bidangKerja[5]->name}}</h4>
                                        <p class="card-text">
                                            <?php 
                                            $temp = explode(" ",$bidangKerja[5]->description);
                                            $desc = "";
                                            for ($i=0; $i < 12; $i++) { 
                                            $desc .= $temp[$i] . " ";    
                                            }
                                            echo $desc . "..."
                                            ?>
                                        </p>
                                        <a class="btn btn-primary" href="{{url("/bidang-kerja/6")}}">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#cardCarousel" role="button" data-slide="prev"
                    style="left:-7vw">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#cardCarousel" role="button" data-slide="next"
                    style="right:-7vw">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div id="cardCarouselMini" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the
                                        bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the
                                        bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <img class="card-img-top"
                                    src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make
                                        up
                                        the
                                        bulk of the
                                        card's content.</p>
                                    <a class="btn btn-primary">Button</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#cardCarouselMini" role="button" data-slide="prev"
                    style="left:-10vw">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#cardCarouselMini" role="button" data-slide="next"
                    style="right:-10vw">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection
