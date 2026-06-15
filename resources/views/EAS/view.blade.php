@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

    <h2>View Pegawai</h2>


 <form  method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Kode Pegawai</label><br>
            <input type="text" name="kodepegawai" id="kodepegawai" maxlength="9" value="{{ old('kodepegawai', $kodepegawai->kodepegawai) }} " readonly >
        </p>

        <p>
            <label>Nama Lengkap</label><br>
            <input type="text" name="namalengkap" id="namalengkap" maxlength="50" value="{{ old('namalengkap', $namalengkap->namalengkap)  }}" readonly >
        </p>

        <p>
            <label>Divisi</label><br>
            <input type="text" name="divisi" id="divisi" maxlength="5" value="{{ old('divisi', $divisi->divisi) }}" readonly>
        </p>

        <p>
            <label>Departemen</label><br>
            <input type="text" name="departemen" id="departemen" value="{{ old('departemen', $departemen->departemen) }}" readonly>
        </p>

        <a href="/eas" class="btn btn-info"> Kembali</a>
    </form>

    <script>

    </script>
@endsection
