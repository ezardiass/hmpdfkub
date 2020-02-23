@extends('layouts.apps')

@section('body')
    {{-- Isi sini gan --}}
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita</title>
    <link rel="stylesheet" href="{{asset("css/berita.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
</head>

<body>
<!-- // test -->
    <div class="container">
        <header class="jumbo-tron-slider middle">
            <div class="slides">
                <input type="radio" name="r" id="r1" checked>
                <input type="radio" name="r" id="r2">
                <input type="radio" name="r" id="r3">
                <input type="radio" name="r" id="r4">
                <div class="slide-content s1">
                    <div class="slide-content-img">
                        <a href="#">
                            <img src="{{URL::asset('/images/dummy_galeri-1.jpg')}}" alt=""  >
                        </a>
                    </div>
                    <div class="slide-content-content">
                        <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                        <h2>News Title Is Here, you can check this</h2>
                        <p>Lorem ipsum slebew slebew dolor sit amet, consectetur adipiscing elit. Vestibulum arcu
                            urna,
                            lobortis a
                            vestibulum
                            nec, gravida quis erat. Aenean vitae semper leo, ut cursus eros. get dapibus luctus.
                            eleifend in ut justo</p>
                    </div>
                </div>
                <div class="slide-content">
                    <div class="slide-content-img">
                        <img src="{{URL::asset('/images/dummy_galeri-2.jpg')}}" alt="">
                    </div>
                    <div class="slide-content-content">
                        <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                        <h2>News Title Is Here, you can check this (2/4)</h2>
                        <p>Lorem ipsum slebew slebew dolor sit amet, consectetur adipiscing elit. Vestibulum arcu urna,
                            lobortis a
                            vestibulum
                            nec, gravida quis erat. Aenean vitae semper leo, ut cursus eros. get dapibus luctus.
                            eleifend in ut justo</p>
                    </div>
                </div>
                <div class="slide-content">
                    <div class="slide-content-img">
                        <img src="{{URL::asset('/images/dummy_galeri-4.jpg')}}" alt="">
                    </div>
                    <div class="slide-content-content">
                        <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                        <h2>News Title Is Here, you can check this (3/4)</h2>
                        <p>Lorem ipsum slebew slebew dolor sit amet, consectetur adipiscing elit. Vestibulum arcu urna,
                            lobortis a
                            vestibulum
                            nec, gravida quis erat. Aenean vitae semper leo, ut cursus eros. get dapibus luctus.
                            eleifend in ut justo</p>
                    </div>
                </div>
                <div class="slide-content">
                    <div class="slide-content-img">
                        <img src="{{URL::asset('/images/dummy_galeri-3.jpg')}}" alt="">
                    </div>
                    <div class="slide-content-content">
                        <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                        <h2>News Title Is Here, you can check this (4/4), Last.</h2>
                        <p>Lorem ipsum slebew slebew dolor sit amet, consectetur adipiscing elit. Vestibulum arcu urna,
                            lobortis a
                            vestibulum
                            nec, gravida quis erat. Aenean vitae semper leo, ut cursus eros. get dapibus luctus.
                            eleifend in ut justo</p>
                    </div>
                </div>
            </div>
            <div class="controls">
                <label for="r1" class="bar"></label>
                <label for="r2" class="bar"></label>
                <label for="r3" class="bar"></label>
                <label for="r4" class="bar"></label>
            </div>
        </header>
        <section class="news-grid">
            <div>
                <img src="{{URL::asset('/images/dummy_galeri-2.jpg')}}" alt="">
                <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                <h3>News Headline Tag Here</h3>
                <p>
                    This will be our news line here
                </p>
                <a href="#">Learn More <i class="fas fa-chevron-right">
                    </i></a>
            </div>
            <div>
                <img src="{{URL::asset('/images/dummy_galeri-4.jpg')}}" alt="">
                <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                <h3>News Long Headline Tag will be Here and Look like this</h3>
                <p>
                    This will be our news line here
                </p>
                <a href="#">Learn More <i class="fas fa-chevron-right">
                    </i></a>
            </div>
            <div>
                <img src="{{URL::asset('/images/dummy_galeri-3.jpg')}}" alt="">
                <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                <h3>News Headline Tag Here</h3>
                <p>
                    This will be our news line here
                </p>
                <a href="#">Learn More <i class="fas fa-chevron-right">
                    </i></a>
            </div>
            <div>
                <img src="{{URL::asset('/images/dummy_galeri-3.jpg')}}" alt="">
                <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                <h3>News Long Headline Tag will be Here and Look like this</h3>
                <p>
                    This will be our news line here
                </p>
                <a href="#">Learn More <i class="fas fa-chevron-right">
                    </i></a>
            </div>
            <div>
                <img src="{{URL::asset('/images/dummy_galeri-1.jpg')}}" alt="">
                <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                <h3>News Headline Tag Here</h3>
                <p>
                    This will be our one and only thing that we really needed here, in our heart..
                </p>
                <a href="#">Learn More <i class="fas fa-chevron-right">
                    </i></a>
            </div>
            <div>
                <img src="{{URL::asset('/images/dummy_galeri-3.jpg')}}" alt="">
                <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                <h3>News Headline Tag Here</h3>
                <p>
                    This will be our news line here
                </p>
                <a href="#">Learn More <i class="fas fa-chevron-right">
                    </i></a>
            </div>
            <div>
                <img src="{{URL::asset('/images/dummy_galeri-4.jpg')}}" alt="">
                <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                <h3>News Headlineeeeeeeeeeee</h3>
                <p>
                    This will be our CHANCE TO WIN THE GAME
                </p>
                <a href="#">PLAY MORE <i class="fas fa-exclamation">
                    </i></a>
            </div>
            <div>
                <img src="{{URL::asset('/images/dummy_galeri-2.jpg')}}" alt="">
                <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                <h3>News Long Headline Tag will be Here and Look like this</h3>
                <p>
                    This will be our news line here
                </p>
                <a href="#">Learn More <i class="fas fa-chevron-right">
                    </i></a>
            </div>
            <div>
                <img src="{{URL::asset('/images/dummy_galeri-1.jpg')}}" alt="">
                <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                <h3>News Headline Tag Here</h3>
                <p>
                    This will be our news line here
                </p>
                <a href="#">Learn More <i class="fas fa-chevron-right">
                    </i></a>
            </div>
            <div>
                <img src="{{URL::asset('/images/dummy_galeri-2.jpg')}}" alt="">
                <h4 id="news-grid-timestamp">Friday, 4/20</h4>
                <h3>TETEW</h3>
                <p>
                    This will be our TETEW lorem ipesumiyati yuwono tremendes aselole
                </p>
                <a href="#">Aseloleee <i class="fas fa-chevron-right">
                    </i></a>
            </div>

        </section>
    </div>

</body>

</html>
@endsection