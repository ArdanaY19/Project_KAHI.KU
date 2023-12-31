@extends('customer.layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="row d-flex align-items-center">
                    <span class="col-md-10"><i class="fas fa-user-edit"></i> Edit Profile</span> 
                    </h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="/customer/{{auth()->user()->customer->id}}/update" method="post" enctype="multipart/form-data" name="form" onsubmit="return validateForm()">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4">{{ __('Nama') }}</label>

                                    <div class="col-md-12">
                                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{auth()->user()->customer->nama}}" autocomplete="nama" autofocus>

                                        @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="username" class="col-md-4">{{ __('Username') }}</label>

                                    <div class="col-md-12">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{auth()->user()->username}}" autocomplete="username" autofocus>

                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4">{{ __('Email') }}</label>

                                    <div class="col-md-12">
                                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{auth()->user()->email}}" autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="alamat" class="col-md-4">{{ __('Alamat') }}</label>

                                    <div class="col-md-12">
                                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{auth()->user()->customer->alamat}}" autocomplete="alamat" autofocus>

                                        @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="no_hp" class="col-md-4">{{ __('Nomor Telepon') }}</label>

                                    <div class="col-md-12">
                                        <input id="no_hp" type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{auth()->user()->customer->no_hp}}" autocomplete="no_hp" autofocus>

                                        @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tanggal_lahir" class="col-md-4">{{ __('Tanggal Lahir') }}</label>

                                    <div class="col-md-12">
                                        <input id="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{auth()->user()->customer->tanggal_lahir}}" autocomplete="tanggal_lahir" autofocus>

                                        @error('tanggal_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="foto" class="col-md-4">{{ __('Foto') }}</label>

                                    <div class="col-md-12">
                                        <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{asset('foto/'.auth()->user()->customer->foto)}}" autocomplete="foto" autofocus>
                                        @error('foto')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="/customer/{{auth()->user()->customer->id}}/profile" class="btn btn-danger">Batal</a>
                                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script type="text/javascript">
    function validateForm() {
        var a = document.forms["form"]["nama"].value;
        var b = document.forms["form"]["username"].value;
        var c = document.forms["form"]["tanggal_lahir"].value;
        var d = document.forms["form"]["email"].value;
        var e = document.forms["form"]["no_hp"].value;
        var f = document.forms["form"]["alamat"].value;
        var g = document.forms["form"]["foto"].value;
        if (a == null || a == "", b == null || b == "", c == null || c == "", d == null || d == "",
            e == null || e == "", f == null || f == "", g == null || g == "") {
            alert("Data Tidak Boleh Kosong");
            return false;
        }
    }
</script> -->

@endsection