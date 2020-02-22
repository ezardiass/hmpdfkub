@extends('layouts.admin')

@section('body')
<link rel="stylesheet" href="{{asset("css/dashboard.css")}}">
    <div class="container" style="margin-top:72px">
        <div >
            <h2 class="judul">DASHBOARD</h2>
        </div>
        <div class="row">
            <div class="col-4" id="content-col">
                <div class="content-isi">
                <img src="{{asset("images/win.jpg")}}" alt="" class="foto">
                <h4 class="sub-judul">BERITA</h4>
                </div>
            </div>
            <div class="col-4" id="content-col">
                <div class="content-isi">
                <img src="{{asset("images/event.jpg")}}" alt="" class="foto">
                <h4 class="sub-judul">EVENT</h4>
                </div>
            </div>
            <div class="col-4" id="content-col">
                <div class="content-isi">
                <img src="{{asset("images/keychain.jpg")}}" alt="" class="foto">
                <h4 class="sub-judul">MERCH</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4" id="content-col">
                <div class="content-isi">
                <img src="{{asset("images/proker.jpg")}}" alt="" class="foto">
                <h4 class="sub-judul">PROKER</h4>
                </div>
            </div>
            <div class="col-4" id="content-col">
                <div class="content-isi">
                <img src="{{asset("images/gallery.jpg")}}" alt="" class="foto">
                <h4 class="sub-judul">GALERI</h4>
                </div>
            </div>
            <div class="col-4" id="content-col">
                <div >
                <img src="{{asset("images/")}}" alt="" class="foto">
                </div>
            </div>
        </div>
    </div>
@endsection