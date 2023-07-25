<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <main>
    <div class="container">
        <div class="main mt-5">
        <center>
            <h2>Ubah Data Mahasiswa</h2>
        </center>
        <br>

        <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"SELECT * FROM peserta WHERE id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

  <form action="update.php" method="post">
  <div class="mb-3 mt-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" name="nama" value="<?php echo $d['nama']; ?>">
  </div>

  <div class="mb-3">
    <label for="universitas" class="form-label">Universitas</label>
    <input type="text" class="form-control" id="universitas" placeholder="Masukkan Nama Anda" name="universitas" value="<?php echo $d['universitas']; ?>">
  </div>

  <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan Anda" name="jurusan" value="<?php echo $d['jurusan']; ?>"> 
  </div>

  <div class="mb-3">
    <label for="whatsapp" class="form-label">WhatsApp</label>
    <input type="text" class="form-control" id="whatsapp" placeholder="Masukkan WhatsApp Anda" name="whatsapp" value="<?php echo $d['whatsapp']; ?>">
  </div>

  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" name="alamat" value="<?php echo $d['alamat']; ?>">
  </div>

  <button type="submit" class="btn btn-success">Simpan</button>
</form>

<?php 
	}
	?>
        </div>
    </div>
    </main>
</body>
</html>