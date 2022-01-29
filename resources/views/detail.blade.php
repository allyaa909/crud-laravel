@extends('backend.layouts.app')

@section('container')


 
<div class="card mx-auto" style="width: 1000px; margin-top: 50px; margin-bottom: 200px;">
         @php
        $image = DB::table('guru')->where('id', $guru->id)->first();
         $images = explode('|', $image->image);   
        @endphp
        <table>
        <tr>
        @foreach ($images as $item)
        <td>
            <img src="/storage/post-images/{{ $item }}">
          </td>
        @endforeach 
      </tr>
    </table>
        <div class="card-body">
          <h5 class="card-title">Tentang Saya</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, repellat.</p>
        </div>
        <ul class="list-group">
          <li class="list-group-item">Nip    : {{ $guru->nip }}</li>
          <li class="list-group-item">Nama   : {{ $guru->nama }}</li>
          <li class="list-group-item">Gelar  : {{ $guru->gelar }}</li>
          <li class="list-group-item">Mapel  : {{ $guru->mapel }}</li>
        </ul>
        <div class="card-body">
          <a href="/guru"><button type="button" class="btn btn-primary">Kembali</button></a>
        </div>
      </div>
  @endsection

  