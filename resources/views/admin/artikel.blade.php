@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-2 mt-2">
            <h2 class="text-center font-weight-bold">Artikel</h2>
            <a class="btn btn-primary" href="/admin/buatartikel"><i class="fas fa-plus"></i> Buat Artikel</a>
        </div>
        @foreach($artikels as $artikel)
        <div class="col-md-6 mb-4 mt-2">
            <div class="card" style="width: 30rem;">
                <img class="card-img-top" src="{{ url('foto_artikel') }}/{{ $artikel->foto_artikel }}" height="300" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $artikel->judul_artikel }}</h5>
                    <p class="card-text text-justify">
                        <strong>Deskripsi :</strong> <?php
                        echo substr_replace($artikel->deskripsi_artikel, "......", 300);
                        ?>
                    </p>
                    <a href="{{ url('/admin/editartikel') }}/{{ $artikel->id }}" class="btn btn-success btn-sm"><i class="fas fa-edit"> Ubah Data</i></a>
                    <form action="{{ url('/admin/artikel') }}/{{ $artikel->id }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger btn-sm mt-2"><i class="fa fa-trash"> Delete</i></button>
                    </form>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection