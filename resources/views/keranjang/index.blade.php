@extends('template')

@section('title', 'Data Keranjang')
<!-- konten  -->

@section('konten')

    <center>

        <br />
        <br />
        <p>Data Belanja :</p>
        <br />

        <table class="table table-stripped table-hover">
            <tr>
                <th>Kode Belanja</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            @foreach ($belanja as $p)
                <tr>
                    <td>{{ $p->ID }}</td>
                    <td>{{ $p->kodebarang }}</td>
                    <td>{{ $p->jumlah }}</td>
                    <td>{{ $p->harga }}</td>
                    <td>{{ $p->harga*$p->jumlah }}</td>
                    <td>
                        <a href="/belanjatambah" class="btn btn-warning">Beli</a>
                        |
                        <a href="/belanjahapus/{{ $p->ID }}" class="btn btn-danger">Batal</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </center>


@endsection
