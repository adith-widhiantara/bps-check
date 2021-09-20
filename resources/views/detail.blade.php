@extends('base.base')

@section('base')
<div class="card">
    <div class="card-header">
        {{ $pemindahBukuan->nomor }}
    </div>
    <div class="card-body">
        {{ $pemindahBukuan->nama }}
        <hr>
        <div class="row">
            <div class="col-6">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">NPWP</th>
                            <td>{{ $pemindahBukuan->npwp }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Masuk</th>
                            <td>{{ $pemindahBukuan->tanggal_masuk_date }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Petugas</th>
                            <td>{{ $pemindahBukuan->petugas }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Jatuh Tempo</th>
                            <td>{{ $pemindahBukuan->jatuh_tempo }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Keterangan</th>
                            <td>{{ $pemindahBukuan->hari_ke_trans }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nomor Lap</th>
                            <td>{{ $pemindahBukuan->nomor_lap }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Lap</th>
                            <td>{{ $pemindahBukuan->tanggal_lap }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Nomor Bukti PBK</th>
                            <td>{{ $pemindahBukuan->nomor_bukti_pbk }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Bukti PBK</th>
                            <td>{{ $pemindahBukuan->tanggal_bukti_pbk }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
