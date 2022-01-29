@extends('backend.layouts.app')

@section('container')
<div class="container">
    <div class="card" style="margin-bottom: 500px; margin-top: 100px;">
        <div class="card-body">
            <table class="table">
                <div class="text text-center">
                  <p style="font-size: 25px; font-weight: bold; float : left;">Data Guru Smkn 11 Bandung</p>
                    <a href="/guru/tambah" class="btn btn-primary float-right">Input Guru Baru</a>
                </div>
                <tr>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Gelar</th>
                    <th>Mapel</th>
                </tr>
               
                @foreach ($guru as $g)
                    <tr>
                        <td>{{ $g ->nip }}</td>
                        <td>{{ $g ->nama }}</td>
                        <td>{{ $g ->gelar }}</td>
                        <td>{{ $g ->mapel }}</td>  
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection