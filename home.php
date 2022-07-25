<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: login.php");
  exit;
}


?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .hero-img {
      width: 100%;
      background-image: url('hero-bg.jpg');
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .li-style {
      list-style-type: none;
      font-size: 50px;
      margin-top: 25%;
      float: left;
    }

    .hero-box {
      width: 100%;
      height: auto;
      display: flex;
      gap: 10px;
      margin: auto;
    }

    .hero-box .box {
      height: auto;
      padding: 2%;
      background-color: white;
      box-shadow: -6px 1px 8px 4px rgba(0, 0, 0, 0.1);

    }

    .hero-box .box li {
      list-style-type: none;
      margin-bottom: 5px;
      color: rgb(26, 160, 165);
      font-size: 22px;


    }

    .hero-box .box p {
      text-align: left;
    }
  </style>
  <title>Welcome - <?php $_SESSION['username'] ?></title>
</head>

<body>

  <body class="d-flex h-100 text-center  bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto">
        <?php require 'partails/nav.php' ?>

      </header>

      <section class="mt-3 hero-img">

        <div class="container justify-content-end row mt-5">
          <div class="col-md-1">
            <li class="li-style"><a class="venobox" data-type="youtube" href="https://youtu.be/u6lihZAcy4s"><i class="fa-solid fa-circle-play"></i></a></li>
          </div>
          <div class="col-md-8">
            <h1 class="text-center">One page Bootstrap <span>Website Template</span></h1>
            <h5 class="text-center">We are team of talented designer</h5>
            <button style="margin-left: 40%;" class="btn bg-primary text-white p-2 " type="submit">Get
              Started</button>
          </div>
        </div>
        <div class="container row justify-content-center mt-5 p-5 hero-box">
          <div class="col box">
            <li><i class="fa-solid fa-layer-group"></i></li>
            <h4>Loren lpsum</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, molestias.</p>
          </div>
          <div class="col box">
            <li><i class="fa-solid fa-palette fa-lg"></i></li>
            <h4>Loren lpsum</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ad omnis tempora.</p>
          </div>
          <div class="col box">
            <li><i class="fa-brands fa-magento"></i></li>
            <h4>Loren lpsum</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore alias nulla vero.</p>
          </div>
          <div class="col box">
            <li><i class="fa-solid fa-fingerprint"></i></li>
            <h4>Loren lpsum</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum ducimus eum facere!</p>
          </div>
        </div>
      </section>

      </footer>
    </div>





  </body>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>