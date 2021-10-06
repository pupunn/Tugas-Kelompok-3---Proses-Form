<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Form Aplikasi</title>
  </head>
  <body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Perkiraan Biaya Pembuatan Aplikasi</h3>
                    </div>
                    <div class="card-body">
                    <form action="proses.php" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Pemesan Aplikasi</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="almt" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="almt">
                        </div>
                        <div class="mb-3">
                            <label for="hp" class="form-label">Nomor HP</label>
                            <input type="text" class="form-control" name="hp">
                        </div>
                        <div class="mb-3">
                            <label for="platform" class="form-label">Platform Aplikasi</label>
                            <select class="form-select" name="platform">
                                <option selected disabled>--Pilih Platform--</option>
                                <option value="1">Android / IoS</option>
                                <option value="2">Website</option>
                                <option value="3">Desktop</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="animasi" class="form-label">Konten Animasi</label>
                            <select class="form-select" name="animasi">
                                <option selected disabled>--Pilih Animasi--</option>
                                <option value="1">Tanpa Animasi</option>
                                <option value="2">Animasi Sederhana</option>
                                <option value="3">Animasi Kompleks</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="database" class="form-label">Jenis Database</label>
                            <select class="form-select" name="database">
                                <option selected disabled>--Pilih Database--</option>
                                <option value="1">Tanpa Database (Statis)</option>
                                <option value="2">MySql</option>
                                <option value="3">Firebird</option>
                                <option value="4">Oracle</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="data" class="form-label">Jumlah Data Yang Harus Dimasukkan</label>
                            <input type="number" class="form-control" name="data" value=0>
                        </div>
                        <div class="mb-3">
                            <label for="latihan" class="form-label">Menggunakan Paket Pelatihan Aplikasi</label>
                            <select class="form-select" name="latihan">
                                <option selected disabled>--Pilih Paket--</option>
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="perawatan" class="form-label">Menggunakan Paket Maintenance</label>
                            <select class="form-select" name="perawatan">
                                <option selected disabled>--Pilih Maintenance--</option>
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Hitung Biaya Aplikasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  </body>
</html>