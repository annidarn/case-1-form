<?php

$nama = $_POST['nama'];
$email = $_POST['email'];

$data = "$nama || $email\n";

$file = fopen('data.txt', 'a');
fwrite($file, $data);

fclose($file);

// buatkan kodenya di sini
// Menyimpan gambar yang diunggah
$nama_file = basename($_FILES["gambar"]["name"]);
$target_dir = "uploads/";
$target_file = $target_dir . $nama_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Cek apakah file sudah ada sebelumnya
if (file_exists($target_file)) {
    echo "Maaf, file gambar sudah ada.";
    $uploadOk = 0;
}

if ($uploadOk == 1) {
  move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
} else {
  echo "Maaf, terjadi kesalahan saat mengupload file.";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pengguna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* CSS untuk memindahkan tulisan ke tengah */
    .center-text {
      text-align: center;
    }

    /* CSS untuk membuat box menjadi persegi panjang */
    .form-container {
      max-width: 700px;
      margin: 70px auto;
      padding: 20px;
      border: 2px solid #ccc;
      border-radius: 20px;
      background-color: #EFEBE9;
      position: relative;
    }

    /* CSS untuk membuat box menjadi melengkung di pojoknya */
    .card {
      border-radius: 20px;
    }

    /* CSS untuk memastikan gambar berbentuk bulat dan berada di sebelah kiri */
    .card-img-top {
      border-radius: 10%;
      width: 150px;
      height: 150px;
      margin-right: 20px;
      position: absolute;
      top: 60%;
      transform: translateY(-50%);
      border: 1px solid #4E342E;
    }

    /* CSS untuk memastikan teks nama, email, dan jurusan berada di sebelah kanan */
    .user-info {
      margin-left: 200px;
    }

    /* CSS untuk garis pemisah */
    .divider {
      border-top: 1px solid #4E342E;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    /* CSS untuk box setiap elemen */
    .info-box {
      background-color: #fff;
      padding: 10px;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    /* CSS untuk latar belakang layar */
    body {
      background-color: #5D4037;
    }
    
    /* CSS untuk mengubah warna teks "Library Member" */
    .library-member-title {
      color: #4E342E;
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="form-container">
        <h4 class="center-text mb-4 library-member-title">Library Member</h4>
        <div class="divider"></div>
        <img src="<?php echo $target_file; ?>" class="card-img-top" alt="User Image">
        <div class="user-info">
          <div>
            <p class="card-title">Nama :</p>
          </div>
          <div class="info-box">
            <p class="card-text"><?php echo $nama; ?></p>
          </div>
          <div>
            <p class="card-title">Email :</p>
          </div>
          <div class="info-box">
            <p class="card-text"><?php echo $email; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>


</body>
</html>
