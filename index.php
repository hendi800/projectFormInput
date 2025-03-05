<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Input Nilai Mahasiswa</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <div class="container">
      <h2>Form Input Nilai Mahasiswa</h2>
      <form method="post" action="">
    <input type="text" name="nama" placeholder="Masukkan Nama" required><br><br>
    <input type="number" name="nilai" min="0" max="100" placeholder="Masukkan Nilai" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php
if (isset($_POST['submit'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $nilai = (int)$_POST['nilai'];
    $status = ($nilai >= 70) ? "Lulus" : "Tidak Lulus";

    echo "<script>
        Swal.fire({
            title: 'Hasil Penilaian',
            html: '<b>Nama:</b> $nama <br> <b>Nilai:</b> $nilai <br> <b>Status:</b> $status',
            icon: '" . ($status == "Lulus" ? "success" : "error") . "',
            confirmButtonText: 'Oke',
            confirmButtonColor: '#ff7e5f',
            timer: 5000
        });
    </script>";
}
?>
    </div>
  </body>
</html>
