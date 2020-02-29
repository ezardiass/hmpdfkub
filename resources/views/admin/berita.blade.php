@extends('layouts.admin')

@section('body')
<link rel="stylesheet" href="{{asset("css/admin-page.css")}}">
<main>
    <section id="admin-page">
        <div class="container">
            <div class="admin-wrapper">
                <div class="admin-header">
                    <div class="center">
                        <span class="header">
                            Berita
                        </span>
                    </div>
                </div>

                <div class="admin-content">
                    <div id="right">
                        <button class="btn btn-success" data-toggle="modal" data-target="#tambah">
                            Tambah
                        </button>
                    </div>

                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col" class="center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @if (count($news)>0)
                            @foreach ($news as $new)
                            <tr>
                                <td>{{$new->id}}</td>
                                <td><img src="{{$new->image_path}}" class="img"></td>
                                <td>{{$new->news_title}}</td>
                                <td>
                                    <?php 
                                    $temp = explode(" ",$new->news_content);
                                    $desc = "";
                                    for ($i=0; $i < 10; $i++) { 
                                    $desc .= $temp[$i] . " ";    
                                    }
                                    echo $desc . "..."
                                  ?>
                                </td>
                                <td class="action-group">
                                    <a href="{{url("admin/berita/delete/")}}.{{$new->id}}" class="action delete"><i
                                            class="fas fa-times"></i></a>
                                    <a href="{{url("admin/berita/update/")}}.{{$new->id}}" class="action edit"><i
                                            class="far fa-edit"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5"><h3>News Not Found</h3></td>
                            </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Modal --}}
        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModal">Tambahkan Berita</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <form action="{{url("admin/berita/tambah")}}" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="inputJudul">Judul</label>
                                <input type="text" class="form-control" id="inputJudul" name="news_title">
                            </div>

                            <div class="form-group">
                                <label for="inputDeskripsi">Deskripsi</label>
                                <textarea type="text" class="form-control" id="inputDeskripsi"
                                    name="news_content"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputFile">Upload File</label>
                                <input type="file" id="inputFile" name="image">
                            </div>

                        </div>

                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Tambahkan">
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
</main>
@endsection
