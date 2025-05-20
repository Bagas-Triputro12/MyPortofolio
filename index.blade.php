<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Navbar --->
<nav class="navbar navbar-dark shadow" style="background-color:rgb(21, 113, 252);"><br>
  <div class="container">
    <span class="navbar text-white fw-bold fs-3">My Portofolio</span>
  </div>
</nav>
<!-- End Navbar -->
<!-- Header -->
<header class="bg-primary text-white text-center py-5 mb-4">
    <div class="container">
        <div class="text-center">
             <img src="{{asset('/images/WhatsApp Image 2025-05-20 at 18.37.27.jpeg')}}" class="rounded img-thumbnail" alt="..." style="width: 10rem;">
        </div><br>
        <h1 class="fw-bold">Citra Rizky Febryanti</h1>
        <p class="lead">Customer Relation at Bank Woori Saudara</p>
    </div>
</header>

<!-- Portfolio Items -->
<div class="container">
<div class="card mb-3 ">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('/images/OIP.jpg')}}" class="img-fluid rounded-start" alt="about me">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Tentang Saya</h5>
        <p class="card-text">Saya merupakan lulusan dari Universitas Islam Negri Sunan Gunung Djati Bandung mengambil jurusan Pendidikan Islam, lulus dengan nilai memuaskan yaitu 4.00.
            Saya pernah melakukan KKN salah satu Sekolah Dasar yang terletak di Kabupaten Bandung, Jawa Barat.
        </p>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Footer -->
<footer class="py-4 bg-light text-center mt-5">
    <div class="container">
        <p class="text-muted mb-0">&copy; {{ date('Y') }} Citra Rizky Febryanti</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
