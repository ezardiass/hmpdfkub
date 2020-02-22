@extends('layouts.admin')

@section('body')
<link rel="stylesheet" href="{{asset("css/admin-galeri.css")}}">
    <main>
        <div class="container">
            <div class="dashboard">
                <div class="headjudul">
                    <h1><span class="badge badge-pill badge-success">Dashboard</span></h1>
                </div>
                <div class="row">
                    <div class="col-9" id="daftargambar">
                        <h2>Daftar Gambar</h2>
                    </div>
                    <div class="col" id="tombol">
                        <button type="button" class="btn btn-success">Tambah +</button>    
                    </div>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col" >Gambar</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td><img src="{{asset("images/dummy_galeri-1.jpg")}}" alt="" class="gambar"></td>
                        <td >Lomba</td>
                        <td>
                            <button type="button" class="btn btn-link" id="silang"><i class="fas fa-times"></i></button>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td><img src="{{asset("images/dummy_galeri-2.jpg")}}" alt="" class="gambar"></td>
                        <td>Upacara</td>
                        <td>
                            <button type="button" class="btn btn-link"id="silang"><i class="fas fa-times"></i></button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                    </tr>
                   </table>
                </div>
            </div>
        </div>
    </main>
@endsection