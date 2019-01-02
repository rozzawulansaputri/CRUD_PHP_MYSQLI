<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Mahasiswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</head>
<body>
    <div class="container">
        <h1><center>Form Edit Data</center></h1>
        <form action="proses_edit.php" method="post">
            <?php
                include "koneksi.php";
                $id = $_GET['id'];

                $query = mysqli_query($conn, "SELECT * FROM mahasiswa where id ='$id'") or die(mysqli_error($conn));
                $data= mysqli_fetch_array($query);
            ?>
            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="hidden" name="id" value="<?php echo $data['id']?>">
                <input type="text" class="form-control" id="npm" name="npm" value="<?php echo $data['npm']?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $data['alamat']?></textarea>
            </div>
            <div class="form-group">
                <label for="telp">No. Telp</label>
                <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $data['telp']?>">
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $data['jurusan']?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</body>
</html>