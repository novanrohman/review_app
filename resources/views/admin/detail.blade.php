@extends('admin.master')
@section('barang')
<div class="container-fluid">
<div class="container">
<div class="card mb-3">
  <center>
  {{-- <img src="{{ asset('img/'.$detail->gambar) }}" style="width: 240px;" class="card-img-top" alt="..."> --}}
  </center>
  
  <div class="card-body">
    <h5 class="card-title"> Nama Barang : {{ $detail->nmBarang }}</h5>
    <p class="card-text">Harga : {{ $detail->harga }}</p>
    <p class="card-text">Size : {{ $detail->size }}</p>
    <p class="card-text">review : {{ $detail->reviewBarang }}</p>
    <p class="card-text"><small class="text-muted">{{ $detail->tanggalPublish }}</small></p>
    <a href="{{route('barang.view')}}" class="btn btn-danger">back</a>
  </div>
</div>
</div>

</div>

@endsection