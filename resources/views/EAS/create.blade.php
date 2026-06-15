@extends('template')
@section('title', 'Kode Soal mypegawai')
@section('konten')

    <h2>Tambah Pegawai</h2>

    <form action="{{ route('eas.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>Kode Pegawai</label><br>
            <input type="text" name="kodepegawai" id="kodepegawai" maxlength="9" value="{{ old('kodepegawai') }} " >
        </p>

        <p>
            <label>Nama Lengkap</label><br>
            <input type="text" name="namalengkap" id="namalengkap" maxlength="50" value="{{ old('namalengkap')  }}" >
        </p>

        <p>
            <label>Divisi</label><br>
            <input type="text" name="divisi" id="divisi" maxlength="5" value="{{ old('divisi') }}">
        </p>

        <p>
            <label>Departemen</label><br>
            <input type="text" name="departemen" id="departemen" value="{{ old('departemen') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="/eas" class="btn btn-info"> Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let kodepegawai = document.getElementById('kodepegawai').value.trim();
            let namalengkap = document.getElementById('namalengkap').value.trim();

            if (kodepegawai === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode Pegawai wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (kodepegawai.length > 9) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Kode Pegawai maksimal 9 karakter",
                    icon: "error"
                });
                return false;
            }

            if (namalengkap === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (namalengkap.length > 50) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama maksimal 50 karakter",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
