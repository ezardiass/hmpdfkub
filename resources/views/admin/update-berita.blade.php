@extends('layouts.admin')

@section('body')
<link rel="stylesheet" href="{{asset("css/update.css")}}">
<section id="update">
    <div class="header">
        Update Berita
    </div>
    <div class="container">
        <form action="{{url("admin/berita/update/send/")}}{{$news->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputJudul">Judul</label>
                <input type="text" class="form-control" id="inputJudul" name="news_title" value="{{$news->news_title}}">
            </div>

            <div class="form-group">
                <label for="inputDeskripsi">Deskripsi</label>
                <textarea type="text" class="form-control" id="inputDeskripsi"
                    name="news_content">{{$news->news_description}}</textarea>
            </div>

            <div class="form-group">
                <label for="inputFile">Upload File</label>
                <input type="file" id="inputFile" name="image">
            </div>
            <input type="submit" class="btn btn-primary" value="Rubah">
        </form>
    </div>
</section>

@endsection
