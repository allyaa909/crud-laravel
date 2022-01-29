@extends('frontend.layouts.main')

@section('content')

<div class="jumbotron jumbotron-fluid" id="jum">
    <div class="container text-center">
        <h1> A <span>GOOD EDUCATION</span><br> IS A FOUNDATION FOR A <span>BETTER FUTURE</span></h1>
    </div>
  </div>

  <div class="container">
<div class="elemen shadow p-3 mb-5 bg-white rounded">
    <div class="row">
      <div class="col-sm text-center">
          <img src="../img/img1.png" width="150px" height="100px" alt="">
        <h5>Learning and Fun</h5>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>
      <div class="col-sm text-center">
        <img src="../img/img2.png" width="150px" height="100px" alt="">
        <h5>Beautifull Education</h5>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>
      <div class="col-sm text-center">
        <img src="../img/img3.png" width="150px" height="100px" alt="">
        <h5>Qualified Teachers</h5>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>
    </div>
  </div>
</div>
    
{{-- <div class="container">
      <div class="row mb-4">
          <div class="col text-center">
              <h2>Sejarah SMKN 11 Bandung</h2>
          </div>
      </div>
      <div class="row justify-content-center"  style="margin-bottom: 100px; ">
          <div class="col text-justify mr-5" style="font-family: 'Poppins', sans-serif;">
              <p>Keberadaan SMK Negeri 11 Bandung, diawali dengan berdirinya SMEA Cimahi sebagai Filial SMEA Negeri 1 Negeri Bandung pada tahun 1968, dengan menempati SMP Negeri 2 Cimahi, kemudian pindah menempati SD Utama Leuwi Gajah sampai dengan tahun 1969. Awal tahun 1970 sempat pindah menempati SMP Negeri 1 Cimahi sampai tanggal 1 April 1970. Sejak tanggal 1 April 1970 tersebut SMEA Cimahi mengawali sejarah baru menempati bangunan, yang semula diperuntukkan untuk Sekolah Teknik, berlokasi di jalan Budi Cilember. Tanggal 30 Juli 1980, dengan SK Mendikbud no 0207/0/1980, melepas status filialnya menjadi SMEA Negeri Cimahi. Pada tanggal 7 April 1987 dengan SK Mendikbud RI (nomenklatur SMK), nomor 036/0/1987 berubah nama menjadi SMK Negeri 11. Juni 2003, SMKN 11 membuka program keahlian Rekayasa Perangkat Lunak, merupakan program re-engenering Dikmenjur. </p>
          </div>
          
          <div class="coltext-justify">
              <img src="../img/cs1.jpg" width="700px" height="600px">
          </div>
  </div>
</div> --}}


  <div class="container mb-5">
  {{-- <div class="card mb-3 text-center" style="max-width: 1000px;"> --}}
      <div class="row no-gutters">
      <div class="col-md-8">
          <div class="card-body" style="margin-top: 50px;">
            <h5 class="judul" style="font-family: 'Viga', sans-serif; font-size : 40px;">Sejarah SMKN 11 Bandung</h5>
            <p class="card-text mt-4">Keberadaan SMK Negeri 11 Bandung, diawali dengan berdirinya SMEA Cimahi sebagai Filial SMEA Negeri 1 Negeri Bandung pada tahun 1968, dengan menempati SMP Negeri 2 Cimahi, kemudian pindah menempati SD Utama Leuwi Gajah sampai dengan tahun 1969. Awal tahun 1970 sempat pindah menempati SMP Negeri 1 Cimahi sampai tanggal 1 April 1970. Sejak tanggal 1 April 1970 tersebut SMEA Cimahi mengawali sejarah baru menempati bangunan, yang semula diperuntukkan untuk Sekolah Teknik, berlokasi di jalan Budi Cilember.</p>
            <p>Tanggal 30 Juli 1980, dengan SK Mendikbud no 0207/0/1980, melepas status filialnya menjadi SMEA Negeri Cimahi. Pada tanggal 7 April 1987 dengan SK Mendikbud RI (nomenklatur SMK), nomor 036/0/1987 berubah nama menjadi SMK Negeri 11. Juni 2003, SMKN 11 membuka program keahlian Rekayasa Perangkat Lunak, merupakan program re-engenering Dikmenjur.</p>
            <button type="button" class="btn btn-outline-secondary">Learn More</button>
          </div>
        </div>
      
        <div class="col-md-4">
          <img src="../img/img10.jpg" style="margin-top: 50px;" alt="...">
        </div>
        
      </div>
    {{-- </div> --}}
  </div>

  <div class="ekstrakulikuler mb-5" style="background-color: rgb(238, 238, 238); padding-top: 30px; padding-bottom : 30px;">
  <div class="jdl mb-5">
    <h3 class= "text-center" style="font-family: 'Viga', sans-serif; font-size : 40px;">JURUSAN</h3>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
  </div>
    <div class="container">
    <div class="row">
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../img/img11.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">AKUNTANSI & KEUANGAN LEMBAGA</h5>
            <p class="card-text">Some quick example text to build on the card title and make up</p>
            <button type="button" class="btn btn-outline-secondary">Read More</button>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../img/bdp.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">PEMASARAN</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <button type="button" class="btn btn-outline-secondary">Read More</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="../img/rpl.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">MANAJEMEN PERKANTORAN & LAYANAN BISNIS</h5>
            <p class="card-text">Some quick example text to build on the card title and</p>
            <button type="button" class="btn btn-outline-secondary">Read More</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection