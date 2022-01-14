@extends('backend.layouts.app')

@section('container')
<div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-header">Detail Lengkap</div>
    <div class="card-body text-success">
      <p class="card-text">{{ $guru->nip }}</p>
      <p class="card-text">{{ $guru->nama }}</p>
      <p class="card-text">{{ $guru->gelar }}</p>
      <p class="card-text">{{ $guru->mapel }}</p>
    </div>
  </div>
  @endsection