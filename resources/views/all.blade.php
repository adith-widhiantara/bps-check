@extends('base.base')

@section('base')
<div class="card">
    <div class="card-body">
        <table id='myTable' class='table table-bordered table-striped table-hover'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>No BPS</th>
                    <th>Nama</th>
                    <th>NPWP</th>
                    <th>Tanggal Masuk</th>
                    <th>Petugas</th>
                    <th>Jatuh Tempo</th>
                    <th>Keterangan</th>
                    <th>Nomor Lap</th>
                    <th>Tanggal Lap</th>
                    <th>Nomor Bukti PBK</th>
                    <th>Tanggal Bukti PBK</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pemindahBukuanData as $pemindahBukuan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pemindahBukuan->nomor }}</td>
                    <td>{{ $pemindahBukuan->nama }}</td>
                    <td>{{ $pemindahBukuan->npwp }}</td>
                    <td>{{ $pemindahBukuan->tanggal_masuk }}</td>
                    <td>{{ $pemindahBukuan->petugas }}</td>
                    <td>{{ $pemindahBukuan->jatuh_tempo }}</td>
                    <td>{{ $pemindahBukuan->hari_ke_trans }}</td>
                    <td>{{ $pemindahBukuan->nomor_lap }}</td>
                    <td>{{ $pemindahBukuan->tanggal_lap }}</td>
                    <td>{{ $pemindahBukuan->nomor_bukti_pbk }}</td>
                    <td>{{ $pemindahBukuan->tanggal_bukti_pbk }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
