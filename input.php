<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Data Pengguna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* CSS untuk memusatkan form */
    .center {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 85vh;
      background-color: #5D4037; 
    }
    
    /* CSS untuk mengatur lebar form agar tetap responsif */
    .form-container {
      max-width: 500px;
      width: 100%;
      padding: 20px;
      border: 2px solid #ccc;
      border-radius: 20px;
      background-color: #fff;
      background-color: #EFEBE9;
    }

    /* CSS untuk tombol submit */
  .btn-primary {
    background-color: #6D4C41; 
    color: #fff;
    border: none;
    width: 100%;
  }

  /* CSS untuk hover pada tombol submit */
  .btn-primary:hover {
    background-color: #4E342E;
  }

  /* CSS untuk memindahkan tombol submit ke tengah */
  .btn-container {
      text-align: center;
    }

    /* CSS untuk mengubah warna teks "Library Member Registration" */
    .registration-title {
      color: #4E342E;
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>


<div class="center">
  <div class="container form-container">
    <h2 class="text-center registration-title">Library Member Registration</h2>
    <form action="output.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group my-3">
        <label for="gambar">Gambar:</label> <br>
        <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*" required>
      </div>
      <div class="form-group btn-container">
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
