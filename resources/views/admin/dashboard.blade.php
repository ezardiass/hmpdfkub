@extends('layouts.admin')

@section('body')
<link rel="stylesheet" href="{{asset("css/dashboard.css")}}">
<div class="container" style="margin-top:72px">
    <div class="header">
        <h2 class="judul">DASHBOARD</h2>
    </div>
    <div class="d-flex justify-content-around flex-wrap">
        <div class="card">
            <a href="{{url('/admin/berita')}}">
                <img src="{{asset("images/win.jpg")}}" class="card-img-top">
                <div class="card-body">
                    <div class="center">
                        <h5 class="card-title">Berita</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="{{url('/admin/event')}}">
                <img src="{{asset("images/event.jpg")}}" class="card-img-top">
                <div class="card-body">
                    <div class="center">
                        <h5 class="card-title">Event</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="{{url('/admin/merchandise')}}">
                <img src="{{asset("images/keychain.jpg")}}" class="card-img-top">
                <div class="card-body">
                    <div class="center">
                        <h5 class="card-title">Merchandise</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="{{url('/admin/proker')}}">
                <img src="{{asset("images/proker.jpg")}}" class="card-img-top">
                <div class="card-body">
                    <div class="center">
                        <h5 class="card-title">Proker</h5>
                    </div>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="{{url('/admin/galeri')}}">
                <img src="{{asset("images/gallery.jpg")}}" class="card-img-top">
                <div class="card-body">
                    <div class="center">
                        <h5 class="card-title">Galeri</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
