<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ./login/index.php");
    //exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <title>Home-Perpustakaan</title>
    <style>
        body{
            background-color: #274461;
        }
    </style>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">PERPUSTAKAAN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="siswa/index.php">Siswa <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="buku/index.php">Buku</a>
                </ul>
                <form action="./login/logout.php" method="POST" class="login-email">
                    <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log out</button>
                </form>
            </div>
        </nav>
    </div>
    <br>
    <br>

    <div class="jumbotron container">
        <h1 class="display-4">Pendidikan Indonesia</h1>
        <p class="lead">Masih banyak hal yang harus diperbaiki dalam sistem pendidikan Indonesia. Tidak hanya persoalan kualitas pendidikan yag masih rendah, tapi juga masalah akses dan partisipasi</p>
        <hr class="my-4">
        <p>UNICEF berkomitmen melakukan segala daya upaya untuk membantu anak-anak di Indonesia yang paling berisiko dan paling membutuhkan bantuan agar dapat bertahan hidup, bertumbuh kembang, dan mewujudkan potensinya, sejak mereka berada di dalam kandungan hingga menjadi individu dewasa.</p>
        <a class="btn btn-primary btn-lg" href="https://www.unicef.org/indonesia/id/what-we-do" role="button">Learn more</a>
    </div>

    <br>

    <div class="card-deck">
  <div class="card">
    <img src="IMG_20231215_173715.jpg" class="card-img-top" alt="..." >
    <div class="card-body">
      <h5 class="card-title">Tips meningkatkan minat baca</h5>
      <p class="card-text">Bacalah buku yang sesuai dengan minat atau kesukaan Anda. Jika saat ini Anda sedang rajin-rajinnya berolahraga, maka carilah buku tentang olahraga. Jika Anda menyukai sejarah, maka bacalah buku bertema sejarah. Dengan membaca sesuatu yang menarik bagi Anda, maka kita akan lebih terdorong untuk mulai membaca.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="IMG_20231215_173801.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Tips meningkatkan minat baca</h5>
      <p class="card-text">Baca di tempat yang nyaman. Carilah tempat yang tenang dan nyaman untuk membaca, seperti di kamar atau di taman. Dengan membaca di tempat yang nyaman atau favorit, Anda akan lebih mudah fokus dan terdorong untuk terus membaca lebih lama lagi.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="IMG_20231215_174150.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Tips meningkatkan minat baca</h5>
      <p class="card-text">Beri reward pada diri sendiri setelah membaca. Berikan reward pada diri kita setelah berhasil membaca buku sampai selesai. Misalnya aja pergi ke kafe atau melakukan aktivitas yang menyenangkan lainnya. Hal ini akan bikin aktivitas membaca menjadi lebih menyenangkan dan memotivasi kita menjadi lebih disiplin dalam membaca.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>


</body>

</html>