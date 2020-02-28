@extends('layouts.apps')

@section('body')

<link rel="stylesheet" href="{{asset("css/berita.css")}}">
<section id="news-carousel">
    <div id="jumbotron-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#jumbotron-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#jumbotron-carousel" data-slide-to="1"></li>
            <li data-target="#jumbotron-carousel" data-slide-to="2"></li>
            <li data-target="#jumbotron-carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-news-item">
                    <div class="d-flex justify-content-around flex-wrap">
                        <div class="col" id="image-wrapper">
                            <img src="{{asset("images/dummy_galeri-1.jpg")}}" class="carousel-image">
                        </div>
                        <div class="col">
                            <div class="carousel header">
                                <h1>News title</h1>
                                <h3>Subhead</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sed
                                    inventore
                                    explicabo quidem quos! Ipsa omnis illum odio repudiandae impedit ut nulla
                                    debitis,
                                    quo suscipit accusamus quos aut voluptatum eveniet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-news-item">
                    <div class="d-flex justify-content-around flex-wrap">
                        <div class="col" id="image-wrapper">
                            <img src="{{asset("images/dummy_galeri-1.jpg")}}" class="carousel-image">
                        </div>
                        <div class="col">
                            <div class="carousel header">
                                <h1>News title</h1>
                                <h3>Subhead</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sed
                                    inventore
                                    explicabo quidem quos! Ipsa omnis illum odio repudiandae impedit ut nulla
                                    debitis,
                                    quo suscipit accusamus quos aut voluptatum eveniet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-news-item">
                    <div class="d-flex justify-content-around flex-wrap">
                        <div class="col" id="image-wrapper">
                            <img src="{{asset("images/dummy_galeri-1.jpg")}}" class="carousel-image">
                        </div>
                        <div class="col">
                            <div class="carousel header">
                                <h1>News title</h1>
                                <h3>Subhead</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sed
                                    inventore
                                    explicabo quidem quos! Ipsa omnis illum odio repudiandae impedit ut nulla
                                    debitis,
                                    quo suscipit accusamus quos aut voluptatum eveniet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-news-item">
                    <div class="d-flex justify-content-around flex-wrap">
                        <div class="col" id="image-wrapper">
                            <img src="{{asset("images/dummy_galeri-1.jpg")}}" class="carousel-image">
                        </div>
                        <div class="col">
                            <div class="carousel header">
                                <h1>News title</h1>
                                <h3>Subhead</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sed
                                    inventore
                                    explicabo quidem quos! Ipsa omnis illum odio repudiandae impedit ut nulla
                                    debitis,
                                    quo suscipit accusamus quos aut voluptatum eveniet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="news-grid">
    <div class="container">
        <div class="news-header">
            <h1><span class="header">News</span></h1>
        </div>
        {{-- <div class="row">
            <div class="col-lg-10" id="left"> --}}
                <div class="d-flex justify-content-around flex-wrap">
                    <div class="card">
                        <img src="{{asset("images/dummy_galeri-3.jpg")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset("images/dummy_galeri-3.jpg")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset("images/dummy_galeri-3.jpg")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset("images/dummy_galeri-3.jpg")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset("images/dummy_galeri-3.jpg")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset("images/dummy_galeri-3.jpg")}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-2" id="right">
                <div class="d-flex justify-content-around flex-wrap">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text </p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text </p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text </p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection
