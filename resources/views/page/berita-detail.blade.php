@extends('layouts.apps')

@section('body')

<section id="news-detail">
    <link rel="stylesheet" href="{{asset("css/berita-detail.css")}}">
    <div class="container">
        <div class="row">
            <div class="col-md-9" id="left">
                <div class="wrapper">
                    <span class="header">
                        {{$news->news_title}}
                    </span>

                    <div class="detail-image">
                        <img src="{{$news->image_path}}" class="img-fluid">
                    </div>

                    <div class="news-tag">
                        {{$news->created_at}}
                    </div>

                    <div class="isi-detail">
                        {{$news->news_content}}
                    </div>
                </div>
            </div>
            <div class="col-md-3" id="right">

                @if (count($recommendedNews)>3)
                @foreach ($recommendedNews as $news)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$news->news_title}}</h5>
                        <p class="card-text">
                            <?php 
                            $temp = explode(" ",$news->news_content);
                            $desc = "";
                            for ($i=0; $i < 4; $i++) { 
                            $desc .= $temp[$i] . " ";    
                            }
                            echo $desc . "..."
                        ?>
                        </p>
                        <a href="{{url("berita")}}/{{$new->id}}" class="card-link">Selengkapnya</a>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

{{-- <div class="container">
    <div class="news-title">
        <h1>News-title</h1>
    </div>
    <div class="news-article-layout">
        <section class="news-article">
            <img src="{{URL::asset('/images/dummy_galeri-4.jpg')}}" alt="">
<h5>Jumat, 4 September 2020</h5>
<p> Lorem ipsum slebew slebew dolor sit amet, consectetur adipiscing elit. Vestibulum arcu urna,
    lobortis a
    vestibulum
    nec, gravida quis erat. Aenean vitae semper leo, ut cursus eros. Donec a leo dolor. Ut accumsan odio
    eget dapibus luctus. Sed auctor nec arcu vel hendrerit. Nullam tellus leo, faucibus at semper
    maximus,
    rutrum ut est. Integer gravida urna a efficitur ornare. Aliquam mattis efficitur sem, nec ornare
    neque.
    Donec viverra nunc quis enim rutrum dignissim. Aenean vitae gravida nisi. Nam placerat arcu et
    sapien
    imperdiet, ac tincidunt odio fermentum. Cras sit amet suscipit leo. Quisque eu augue sed ante
    feugiat
    eleifend in ut justo. Nunc nec fringilla velit.<br>
    <br>Nullam in porta urna, sed viverra dolor. Nullam ut est convallis, molestie ex ut, pretium lorem.
    Nam
    nec
    mollis nunc. Suspendisse potenti. Sed erat neque, tempus vel molestie nec, feugiat at tortor. Morbi
    tincidunt sollicitudin condimentum. Ut in condimentum diam, eu gravida quam. Etiam tempor mollis
    nulla
    bibendum blandit. Pellentesque tortor felis, tempor tristique nisl eu, bibendum volutpat ante. Donec
    est
    nibh, lacinia ut faucibus et, eleifend vitae arcu. Nunc libero massa, placerat condimentum mattis
    eu,
    hendrerit sed mauris. Nam at venenatis quam.
    <br><br>
    Donec nisl elit, maximus vitae rhoncus ut, suscipit sed est. Donec justo ipsum, ultrices ut
    facilisis
    et, suscipit at nulla. Nam euismod arcu metus. Proin ultricies elementum augue, eu pellentesque
    neque
    maximus in. In magna diam, dignissim et elit in, convallis ornare orci. In fringilla sem lacus, et
    aliquam leo venenatis nec. Integer ultrices leo eget commodo commodo. Maecenas elit lacus, vulputate
    ac
    est ut, congue semper velit. Suspendisse vehicula non neque quis tincidunt. Quisque dignissim lectus
    ut
    volutpat commodo. Sed rutrum sem quis ante porta, nec fringilla sem sodales. Quisque euismod aliquam
    eleifend. Mauris convallis odio ante, eu sodales ligula pellentesque non. Nulla elementum bibendum
    ipsum
    eu sollicitudin. Praesent metus lectus, vulputate at vestibulum in, maximus vitae libero. Morbi sed
    odio
    facilisis, egestas diam at, facilisis erat.
    <br><br>
    Donec vehicula elit neque. Suspendisse quis eleifend elit. Donec ac nulla quis diam commodo mollis
    in at
    lectus. Nunc fringilla dictum lectus, eu blandit massa laoreet sit amet. Sed elit ex, faucibus non
    nisi
    a, dictum gravida leo. Ut vel mi vitae elit rhoncus vestibulum. Vivamus vitae fringilla tortor.
    Vestibulum auctor dolor eget congue interdum. Nulla facilisi. Sed ut egestas risus, sit amet euismod
    erat. Mauris quam tortor, venenatis eu suscipit sed, auctor sed odio. Ut orci justo, sollicitudin eu
    dui
    et, congue aliquet velit. Duis porta efficitur ultrices. Vivamus nec orci risus. Sed ut leo non
    magna
    lobortis semper.
</p>
</section>
<section class="side-news">
    <div class="side-news-grid-top">
        <a href="#">
            <div class="side-news-grid-top-div">
                <div class="top-image">
                    <img src="{{URL::asset('/images/dummy_galeri-4.jpg')}}" alt="">
                </div>
                <div class="top-content">
                    <h5>Jumat, 13 Desember 1851</h5>
                    <h4>Title</h4>
                    <p>This will adsfdsfafdfdsbe our news line smol spoiler</p>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="side-news-grid-top-div">
                <div class="top-image">
                    <img src="{{URL::asset('/images/dummy_galeri-3.jpg')}}" alt="">
                </div>
                <div class="top-content">
                    <h5>Jumat, 13 Desember 1851</h5>
                    <h4>Title</h4>
                    <p>This will be our news line smol spoiler</p>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="side-news-grid-top-div">
                <div class="top-image">
                    <img src="{{URL::asset('/images/dummy_galeri-1.jpg')}}" alt="">
                </div>
                <div class="top-content">
                    <h5>Jumat, 13 Desember 1851</h5>
                    <h4>Title</h4>
                    <p>This will be our news line smol spoiler</p>
                </div>
            </div>
        </a>
    </div>
    <hr>
    <div class="side-news-grid-bottom">
        <a href="#">
            <div>
                <h5>Jumat, 13 Desember 1851</h5>
                <h4>Title</h4>
                <p>This will be our news line smol spoiler</p>
            </div>
        </a>
        <a href="#">
            <div>
                <h5>Jumat, 13 Desember 1851</h5>
                <h4>Title</h4>
                <p>This will be our news line smol spoiler</p>
            </div>
        </a>
        <a href="#">
            <div>
                <h5>Jumat, 13 Desember 1851</h5>
                <h4>Title</h4>
                <p>This will be our news line smol spoiler</p>
            </div>
        </a>
    </div>
</section>
</div>

</div> --}}

@endsection
