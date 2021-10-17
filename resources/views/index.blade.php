@extends('layouts/main')


@section('slide')

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{asset('image/slide4.jpg')}}" class="d-block " style="width: 100%; height: 500px; object-fit: cover;" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{asset('image/slide5.jpg')}}" class="d-block"  style="width: 100%; height: 500px; object-fit: cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{asset('image/slide6.jpg')}}" class="d-block"  style="width: 100%; height: 500px; object-fit: cover;" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    
@endsection
@section('container')
<div class="row">
   <div class="col-md-4">
     <div class="card mt-5 mx-auto shadow-lg p-3 mb-5" style="width: 13rem;">
        <img src="{{asset('image/car.svg')}}" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <p class="card-text"><b>Lihat Lihat Mobil Terlebih Dahulu?</b></p>
          <div class="border border-dark mx-10">
            <a class="text-decoration-none text-dark" href=""><b>Klik Disini</b></a>
          </div>
        </div>
     </div>
   </div>
   <div class="col-md-4">
    <div class="card mt-5 mx-auto shadow-lg p-3 mb-5 " style="width: 13rem; height: 330px;">
       <img src="{{asset('image/money.svg')}}" class="card-img-top" alt="...">
       <div class="card-body text-center">
         <p class="card-text mb-5"><b>Beli Mobil Dengan Cash?</b></p>
         <div class="border border-dark mx-10">
          <a class="text-decoration-none text-dark" href="/cash"><b>Klik Disini</b></a>
         </div>
       </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card mt-5 mx-auto shadow-lg p-3 mb-5" style="width: 13rem; height: 330px;">
       <img src="{{asset('image/kredit.svg')}}" class="card-img-top" alt="...">
       <div class="card-body text-center">
         <p class="card-text mb-5"><b>Lihat Paket Cicilan?</b></p>
         <div class="border border-dark mx-10">
           <a class="text-decoration-none text-dark" href=""><b>Klik Disini</b></a>
         </div>
       </div>
    </div>
  </div>
</div>

<div class="my-5">
  <h2>Produk Pilihan</h2>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="card" style="width: 20rem; height: 415px;">
      <div class="mx-5 my-5">
      <img src="{{asset('image/mobil1.png')}}" class="card-img-top" alt="...">
      </div>
      <div class="card-body">
        <p class="card-text"><b>All New Ertiga</b></p>
        <p class="card-text" style="opacity: 75%;">Mulai Dari</p>
        <p class="card-text">Rp.100,000,000</p>
        <a class="text-decoration-none " style="color: red" href="">Lihat Detail ></a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card" style="width: 20rem;">
      <div class="mx-5 my-5">
      <img src="{{asset('image/mobil2.png')}}" class="card-img-top" alt="...">
      </div>
      <div class="card-body">
        <p class="card-text"><b>All New Ertiga Sport</b></p>
        <p class="card-text" style="opacity: 75%;">Mulai Dari</p>
        <p class="card-text">Rp.100,000,000</p>
        <a class="text-decoration-none " style="color: red" href="">Lihat Detail ></a>
      </div>
    </div>
 </div>
 <div class="col-md-4">
  <div class="card" style="width: 20rem;">
    <div class="mx-5 my-5">
    <img src="{{asset('image/mobil3.png')}}" class="card-img-top" alt="...">
    </div>
    <div class="card-body">
      <p class="card-text"><b>XL7</b></p>
      <p class="card-text" style="opacity: 75%;">Mulai Dari</p>
      <p class="card-text">Rp.100,000,000</p>
      <a class="text-decoration-none " style="color: red" href="">Lihat Detail ></a>
    </div>
  </div>
 </div>
</div>
@endsection