@extends('template')

@section('title', 'Data Sepatu')
<!-- konten  -->

@section('konten')

    <center>

        <br />
        <br />
        <p>Cari Data Sepatu :</p>
        <form action="/sepatucari" method="GET">
            <input type="text" name="cari" placeholder="Cari Sepatu .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-secondary">
        </form>

        <br />

        <table class="table table-stripped table-hover">
            <tr>
                <th>Kode</th>
                <th>Merk Sepatu</th>
                <th>Stock</th>
                <th>Tersedia</th>
            </tr>
            @foreach ($sepatu as $p)
                <tr>
                    <td>{{ $p->kodesepatu }}</td>
                    <td>{{ $p->merksepatu }}</td>
                    <td>{{ $p->stocksepatu }}</td>
                    <td>{{ $p->tersedia }}</td>
                    <td>
                        <a href="/sepatuedit/{{ $p->kodesepatu }}" class="btn btn-warning">Edit</a>
                        |
                        <a href="/sepatuhapus/{{ $p->kodesepatu }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        <ul class="pagination" style="margin:20px 0">
            {{ $sepatu->links() }}
        </ul>

        <a href="/sepatutambah" class="btn btn-primary"> + Tambah sepatu Baru</a>

    </center>


@endsection
