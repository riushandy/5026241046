@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

    <h2>Kode Soal mypegawai</h2>


    <a href="/eastambah" class="btn btn-warning">Tambah Data</a>
    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>

        @forelse($eas as $row)
            <tr>
                <td>{{ $row->kodepegawai }}</td>
                <td>{{ $row->namalengkap }}</td>
                <td>{{ $row->divisi }}</td>
                <td>{{ $row->departemen }}</td>
                <td>
                    <a href="{{ route('eas.view', $row->kodepegawai) }}" class="btn btn-warning">View</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data pegwai.</td>
            </tr>
        @endforelse
    </table>
@endsection
