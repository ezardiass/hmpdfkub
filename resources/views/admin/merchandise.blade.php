@extends('layouts.admin')

@section('body')
<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/admin-merch.css') }}">
<section class="admin-merch">
    <div class="container">
        <div class="admin-merch__container">
            <a class="btn admin-merch__button" href="#" role="button">Dashboard</a>
            <div class="admin-merch__title-container d-flex justify-content-between align-items-center">
                <h1 class="admin-merch__title">Daftar Merch</h1>
                <button class="btn admin-merch__button">Tambah +</button>
            </div>
            <div class="admin-merch__table-container">
                <table class="table">
                    <thead class="thead-dark admin-merch__thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Harga</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <div class="admin-merch__table-image-container">
                                    <img src="{{ URL::asset('images/topi.jpg') }}" alt="merch item" class="admin-merch__table-image">
                                </div>
                            </td>
                            <td>Topi</td>
                            <td>Rp. 100.000</td>
                            <td>
                                <div class="admin-merch__table-button-container">
                                    <a class="admin-merch__table-button" data-toggle="modal" data-target="#adminDelete"><img src="{{ URL::asset('image/admin-icons/close.svg') }}" alt="close" class="admin-merch__table-icon"></a>
                                    <a class="admin-merch__table-button" data-toggle="modal" data-target="#adminEdit"><img src="{{ URL::asset('image/admin-icons/edit.svg') }}" alt="edit" class="admin-merch__table-icon"></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <div class="admin-merch__table-image-container">
                                    <img src="{{ URL::asset('images/baju.jpg') }}" alt="merch item" class="admin-merch__table-image">
                                </div>
                            </td>
                            <td>Baju</td>
                            <td>Rp. 120.000</td>
                            <td>
                                <div class="admin-merch__table-button-container"> 
                                    <a class="admin-merch__table-button" data-toggle="modal" data-target="#adminDelete"><img src="{{ URL::asset('image/admin-icons/close.svg') }}" alt="close" class="admin-merch__table-icon"></a>
                                    <a class="admin-merch__table-button" data-toggle="modal" data-target="#adminEdit"><img src="{{ URL::asset('image/admin-icons/edit.svg') }}" alt="edit" class="admin-merch__table-icon"></a>    
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="adminDelete" tabindex="-1" role="dialog" aria-labelledby="adminDeleteLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title admin-merch__modal-title" id="adminDeleteLabel">Hapus Merch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="admin-merch__modal-isi"></p>
    </div>
    <div class="modal-footer admin-merch__modal">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger">Delete</button>
    </div>
</div>
</div>
</div>

<div class="modal fade" id="adminEdit" tabindex="-1" role="dialog" aria-labelledby="adminEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title admin-merch__modal-title" id="adminEditLabel">Edit merch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="admin-merch__modal-isi"></p>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Edit</button>
      </div>
    </div>
  </div>
</div>
@endsection
  