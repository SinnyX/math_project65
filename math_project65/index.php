<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>โครงงาน เรื่อง พื้นที่รูป n เกลี่ยมด้านเท่ามุมเท่าแนบในวงกลมรัศมี r ใดๆ (Aₙ)</title>
  <link rel="icon" href="public/img/Logo.svg?v=<?php echo filemtime("assets/img/Logo.svg") ?>">
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Mitr:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" onload="this.rel='stylesheet'" />
  <link rel="preload" as="style" href="public/css/mdb.min.css?v=<?php echo filemtime("public/css/mdb.min.css"); ?>" onload="this.rel='stylesheet'" />
  <style>
    body {
      font-family: "Mitr", Times, serif;
      background-color: #e3f2fd !important;
    }

    img {
      width: 100%;
      max-width: 500px;
    }

    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }

    .bg-blue {
      background-color: #6daae9;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-blue">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><img src="public/img/Logo.svg?v=<?php echo filemtime("public/img/Logo.svg") ?>" height="40" alt="Logo" loading="lazy" /></a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="/">หน้าหลัก</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="card mt-4 mb-8">
      <div class="bg-image hover-overlay ripple mt-4" data-mdb-ripple-color="light">
        <img src="public/img/1.jpeg?v=<?php echo filemtime("public/img/1.jpeg") ?>" class="card-img-top center img-fluid"/>
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="bg-image hover-overlay ripple mt-4" data-mdb-ripple-color="light">
        <img src="public/img/2.png?v=<?php echo filemtime("public/img/2.png") ?>" class="card-img-top center img-fluid"/>
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="card-body text-center">
        <h5 class="card-title">กรอกค่า N</h5>
        <div class="form-outline">
          <input type="number" step="0.01" id="n_input" class="form-control" />
          <label class="form-label" for="typeNumber">N input</label>
        </div>
        <h5 class="card-title">กรอกค่า R</h5>
        <div class="form-outline">
          <input type="number" step="0.01" id="r_input" class="form-control" />
          <label class="form-label" for="typeNumber">R input</label>
        </div>
        <h5 class="card-title">ผลลัพธ์ Aₙ</h5>
        <div class="form-outline">
          <input type="number" id="result" class="form-control" disabled />
        </div>
        <a onclick="calFunction()" class="btn btn-primary mt-4">คำนวณ</a>
      </div>
      <div class="card-footer text-muted">คณิตศาสตร์ โรงเรียนหัวหิน - พฤศจิกายน พ.ศ.2565</div>
    </div>
  </div>

  <script type="text/javascript" src="public/js/mdb.min.js?v=<?php echo filemtime("public/js/mdb.min.js"); ?>"></script>

  <script>
    function calFunction() {
      n = document.getElementById("n_input").value;
      r = document.getElementById("r_input").value;
      n = parseFloat(n);
      r = parseFloat(r);

      let result = (n * (Math.pow(r, 2))) * (Math.sin(Math.PI / n)) * (Math.cos(Math.PI / n));
      document.getElementById("result").value = result;
    }
  </script>
</body>

</html>