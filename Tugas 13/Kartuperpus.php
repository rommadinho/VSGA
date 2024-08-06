<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Kartu Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Formulir Permohonan Kartu Perpustakaan</h2>
    <form action="proseskartu.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="form-group">
            <label for="kelas_prodi">Kelas dan Prodi</label>
            <select class="form-control" id="kelas_prodi" name="kelas_prodi" required>
                <option value="">Pilih Kelas dan Prodi</option>
                <option value="Kelas 1 - Prodi TI">Kelas 1 - Prodi TI</option>
                <option value="Kelas 1 - Prodi AK">Kelas 1 - Prodi AK</option>
                <option value="Kelas 2 - Prodi TI">Kelas 2 - Prodi TI</option>
                <option value="Kelas 2 - Prodi AK">Kelas 2 - Prodi AK</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="foto">Upload Foto</label>
            <input type="file" class="form-control-file" id="foto" name="foto" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
