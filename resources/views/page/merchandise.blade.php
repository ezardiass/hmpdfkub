@extends('layouts.apps')

@section('body')
<link rel="stylesheet" href="{{asset("css/merch.css")}}">
<section id="jumbotron">
</section>

<section id="isi-merch">
    <div class="container">
        <div class="d-flex justify-content-around flex-wrap">
            {{-- Card --}}
            <div class="card" style="width: 22rem;" id="card1">
                <img src="{{asset("images/dummy_galeri-1.jpg")}}" class="card-img-top img" id="img1">
                <div class="item" id="item1">
                    <span class="item-head">Barang 1</span><br>
                    <span class="item-price">Rp. 7.000,00</span><br>
                    <span class="item-description">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque molestias hic excepturi.
                    </span>
                </div>
            </div>
            {{-- Card --}}
            <div class="card" style="width: 22rem;" id="card2">
                <img src="{{asset("images/dummy_galeri-1.jpg")}}" class="card-img-top img" id="img2">
                <div class="item" id="item2">
                    <span class="item-head">Barang 1</span><br>
                    <span class="item-price">Rp. 7.000,00</span><br>
                    <span class="item-description">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque molestias hic excepturi.
                    </span>
                </div>
            </div>
            {{-- Card --}}
            <div class="card" style="width: 22rem;" id="card3">
                <img src="{{asset("images/dummy_galeri-1.jpg")}}" class="card-img-top img" id="img3">
                <div class="item" id="item3">
                    <span class="item-head">Barang 1</span><br>
                    <span class="item-price">Rp. 7.000,00</span><br>
                    <span class="item-description">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque molestias hic excepturi.
                    </span>
                </div>
            </div>
            {{-- Card --}}
            <div class="card" style="width: 22rem;" id="card4">
                <img src="{{asset("images/dummy_galeri-1.jpg")}}" class="card-img-top img" id="img4">
                <div class="item" id="item4">
                    <span class="item-head">Barang 1</span><br>
                    <span class="item-price">Rp. 7.000,00</span><br>
                    <span class="item-description">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque molestias hic excepturi.
                    </span>
                </div>
            </div>
            {{-- Card --}}
            <div class="card" style="width: 22rem;" id="card5">
                <img src="{{asset("images/dummy_galeri-1.jpg")}}" class="card-img-top img" id="img5">
                <div class="item" id="item5">
                    <span class="item-head">Barang 1</span><br>
                    <span class="item-price">Rp. 7.000,00</span><br>
                    <span class="item-description">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque molestias hic excepturi.
                    </span>
                </div>
            </div>
            {{-- Card --}}
            <div class="card" style="width: 22rem;" id="card6">
                <img src="{{asset("images/dummy_galeri-1.jpg")}}" class="card-img-top img" id="img6">
                <div class="item" id="item6">
                    <span class="item-head">Barang 1</span><br>
                    <span class="item-price">Rp. 7.000,00</span><br>
                    <span class="item-description">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque molestias hic excepturi.
                    </span>
                </div>
            </div>
        </div>
</section>

<?php for($i=1; $i<=6; $i++){

echo "<style>";
echo "#card".$i.":hover #img".$i."{opacity: 0.2;}";
echo "#card".$i.":hover #item".$i." {opacity: 1;}";
echo "</style>";

}?>


@endsection
