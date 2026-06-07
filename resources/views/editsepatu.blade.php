<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="mb-4">
        <h2>
            <a href="https://www.malasngoding.com" class="text-decoration-none">
                www.malasngoding.com
            </a>
        </h2>
        <h3>Edit Sepatu</h3>
    </div>

    <a href="/sepatu" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($sepatu as $p)

    <div class="card">
        <div class="card-header">
            Form Edit Data Sepatu
        </div>

        <div class="card-body">
            <form action="/sepatuupdate" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $p->kodesepatu }}">

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="merk"
                            id="merk"
                            class="form-control"
                            required
                            value="{{ $p->merksepatu }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stock" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="stock"
                            id="stock"
                            class="form-control"
                            required
                            value="{{ $p->stocksepatu }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                        <div class="col-sm-10">
                            <select name="tersedia" id="tersedia" class="form-control">
                                <option value="Y" value="{{ $p->tersedia }}">Ya</option>
                                <option value="N" value="{{ $p->tersedia }}">Tidak</option>
                            </select>
                        </div>
                    </div>


                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

    @endforeach

</div>

<!-- Bootstrap JS Optional -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
