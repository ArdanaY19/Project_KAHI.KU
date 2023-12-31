@extends('petani.layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/petani/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Verifikasi Pembayaran</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <h3><i class="fas fa-user-check"></i> Verifikasi Pembayaran </h3>
                    <table class="table table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Email Customer</th>
                                <th>Alamat</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Status</th>
                                <th>Total Harga</th>
                                <th>Bukti Resi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($transaksis as $transaksi)
                            <tr class="text-center">
                                <td>{{ $no++ }}</td>
                                <td>{{ $transaksi->user->email }}</td>
                                <td class="text-capitalize">{{ $transaksi->user->customer->alamat }}</td>
                                <td>{{ date("d F Y", strtotime($transaksi->tanggal)) }}</td>
                                <td>
                                    @if($transaksi->status == 1)
                                    Belum Diverifikasi
                                    @elseif($transaksi->status == 2)
                                    Terverifikasi
                                    @else
                                    Ditolak
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($transaksi->jumlah_harga + $transaksi->kode) }}</td>
                                @if($transaksi->bukti_resi != "")
                                <td><img src="{{ url('bukti_resi') }}/{{ $transaksi->bukti_resi }}" width="100" height="100" alt="..."></td>
                                @elseif($transaksi->status == 1)
                                <td>Lakukan Verifikasi</td>
                                @elseif($transaksi->status == 3)
                                <td>Maaf Pembayaran Ditolak</td>
                                @else
                                <td>Resi Belum Diupload</td>
                                @endif
                                <td>
                                    <a href="{{ url('/petani/verifikasi') }}/{{ $transaksi->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>                             
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
