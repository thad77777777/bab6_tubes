<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Web Programming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <main>
    <div class="container">
        <div class="main mt-5">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
            Tambah Data Mahasiswa
        </button>
        <br><br>
            <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="tambah_aksi.php" method="post">
  <div class="mb-3 mt-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Anda" name="nama">
  </div>

  <div class="mb-3">
    <label for="universitas" class="form-label">Universitas</label>
    <input type="text" class="form-control" id="password" placeholder="Masukkan Nama Anda" name="universitas">
  </div>

  <div class="mb-3">
    <label for="jurusan" class="form-label">Jurusan</label>
    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan Anda" name="jurusan">
  </div>

  <div class="mb-3">
    <label for="whatsapp" class="form-label">WhatsApp</label>
    <input type="text" class="form-control" id="whatsapp" placeholder="Masukkan WhatsApp Anda" name="whatsapp">
  </div>

  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" name="alamat">
  </div>

  <button type="submit" class="btn btn-success">Simpan</button>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Universitas</th>
                        <th>Jurusan</th>
                        <th>WhatsApp</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <?php 
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"SELECT * FROM peserta");
                    while($d = mysqli_fetch_array($data)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['universitas']; ?></td>
                        <td><?php echo $d['jurusan']; ?></td>
                        <td><?php echo $d['whatsapp']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td>
                            <a href="ubah.php?id=<?php echo $d['id']; ?>" class="btn btn-warning"> Ubah </a>
                            <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger"> Hapus </a>
                        </td>
                    </tr>
                </tbody>
                <?php 
		}
		?>
            </table> 
        </div>
    </div>
    </main>
</body>
</html>