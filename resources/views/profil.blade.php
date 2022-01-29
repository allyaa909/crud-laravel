@extends('frontend.layouts.main')

@section('content')
    
@yield('navbar2')

<section id="profil">
<div class="jumbotron jumbotron-fluid" style="margin-top: -100px;">
    <div class="container">
      <div class="row mt-5">
          <div class="col">
              <h2 class="visi">Visi Misi</h2>
          </div>
          <div class="col">
              <p class="misi">“Menghasilkan lulusan yang berahlak mulia, peduli lingkungan hidup, mandiri, tangguh dalam berwirausaha, menguasai teknologi, dan siap bersaing di industri dunia usaha dan dunia kerja (IDUKA) tingkat nasional maupun internasional pada tahun 2024.“</p>
          </div>
      </div>
      <div class="row" id="grup">
          <div class="col">
            <ul class="list-group mb-5">
                <li class="list-group-item text-center">Daftar Jurusan</li>
                <li class="list-group-item">Teknik Komputer Jaringan</li>
                <li class="list-group-item">Otomatisasi Tata Kelola Perkantoran</li>
                <li class="list-group-item">Akuntansi Keuangan Lembaga</li>
                <li class="list-group-item">Multimedia</li>
                <li class="list-group-item">Bisnis Daring Pemasaran</li>
                <li class="list-group-item">Manajemen Logistik</li>
              </ul>
          </div>
      </div>
    </div>
  </div>
</section>
  @endsection