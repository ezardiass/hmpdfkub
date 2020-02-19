@extends('layouts.apps')

@section('body')
    {{-- Isi sini gan --}}
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/galeri.css') }}">
    <section class="galeri">
        <div class="jumbotron jumbotron-fluid galeri__image-container">
            <img src="{{URL::asset('/images/galeri-01.png')}}" alt="galeri banner" class="img-fluid">
        </div>
        <div class="jumbotron jumbotron-fluid galeri__custom-jumbotron">
            <div class="container galeri__custom-container">
                <div class="galeri__photo-container">
                    <div class="galeri__photo-line galeri__photo-line--1">
                        <div class="galeri__photo-image">
                            <a data-target="#modalIMG" data-toggle="modal" href="#">
                                <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-1.jpg')}}" alt="galeri image">
                            </a>
                        </div>
                        <div class="galeri__photo-image">
                            <a data-target="#modalIMG" data-toggle="modal" href="#">
                                <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-2.jpg')}}" alt="galeri image">
                            </a>
                        </div>
                        <div class="galeri__photo-image">
                            <a data-target="#modalIMG" data-toggle="modal" href="#">
                                <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-3.jpg')}}" alt="galeri image">
                            </a>
                        </div>
                    </div>
                    <div class="galeri__photo-line galeri__photo-line--2">
                        <div class="galeri__photo-image">
                            <a data-target="#modalIMG" data-toggle="modal" href="#">
                                <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-4.jpg')}}" alt="galeri image">
                            </a>
                        </div>
                        <div class="galeri__photo-image">
                            <a data-target="#modalIMG" data-toggle="modal" href="#">
                                <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-5.jpg')}}" alt="galeri image">
                            </a>
                        </div>
                        <div class="galeri__photo-image">
                            <a data-target="#modalIMG" data-toggle="modal" href="#">
                                <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-1.jpg')}}" alt="galeri image">
                            </a>
                        </div>
                    </div>
                    <div class="galeri__photo-line galeri__photo-line--3">
                        <div class="galeri__photo-image">
                            <a data-target="#modalIMG" data-toggle="modal" href="#">
                                <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-2.jpg')}}" alt="galeri image">
                            </a>
                        </div>
                        <div class="galeri__photo-image">
                            <a data-target="#modalIMG" data-toggle="modal" href="#">
                                <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-3.jpg')}}" alt="galeri image">
                            </a>
                        </div>
                        <div class="galeri__photo-image">
                            <a data-target="#modalIMG" data-toggle="modal" href="#">
                                <img class="galeri__image" src="{{URL::asset('/images/dummy_galeri-4.jpg')}}" alt="galeri image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modalIMG" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg galeri__custom-modal-dialog" role="document">
            <div class="modal-content galeri__custom-modal-content">
                <div class="modal-body mb-0 p-0 galeri__custom-modal-body">
                    <img src="{{URL::asset('/images/dummy_galeri-1.jpg')}}" alt="galeri image" id="modal-change" class="galeri__modal-image">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom_script')
    <script>
        document.querySelectorAll('.galeri__image').forEach(el => {
            el.onclick = function() {
                document.getElementById('modal-change').setAttribute("src", el.getAttribute("src"));
            }
        });
    </script>
@endsection