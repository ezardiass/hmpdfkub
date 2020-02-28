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
                            Galeri
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
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td><img src="{{asset("images/dummy_galeri-1.jpg")}}" class="img"></td>
                                <td>Pengmas</td>
                                <td>
                                    <a href="" class="action delete"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>


                            <tr>
                                <td>1</td>
                                <td><img src="{{asset("images/dummy_galeri-1.jpg")}}" class="img"></td>
                                <td>Pengmas</td>
                                <td>
                                    <a href="" class="action delete"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td><img src="{{asset("images/dummy_galeri-1.jpg")}}" class="img"></td>
                                <td>Pengmas</td>
                                <td>
                                    <a href="" class="action delete"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="addModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addModal">Tambahkan Galeri</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="inputJudul">Deskripsi</label>
                                <input type="text" class="form-control" id="inputJudul" name="judul">
                            </div>

                            <div class="form-group">
                                <label for="inputFile">Upload File</label>
                                <input type="file" id="inputFile" name="file">
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
