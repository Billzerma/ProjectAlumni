<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <link rel="stylesheet"  type="text/css" href="<?= base_url('Asset\alumniCSSJS\style.css');?>">
    <title>Alumni</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-success navbar-dark navH shadow">
  <div class="container-fluid">
    <a class="navbar-brand title" href="#">Alumni<span>Ku</span>.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active mar" aria-current="page" href="<?= base_url('dashboard') ?>"><i class="fa-solid fa-house mar-icon"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active mar" href="#"><i class="fa-solid fa-newspaper mar-icon"></i>Berita</a>
        </li>

      
        
        <li class="nav-item ">
          <a class="nav-link active mar"  href="<?= base_url('carialumni') ?>"><i class="fa-solid fa-graduation-cap mar-icon"></i>Cari Alumni</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link active mar" href="<?= base_url('logout') ?>"><i class="fa-solid fa-right-from-bracket mar-icon"></i>Log Out</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>


<?=$this->renderSection('content');?>




<footer class="bg-primary text-white pt-4 pb-3 ftmar ">
   <div class="containe text-centre text-md-left ">
    <div class="row  text-centre text-md-left">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class=" mb-4 font-weigth-bold titleFooter">Alumni<span>Ku</span>.</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias deleniti laboriosam atque 
                ipsam magnam fuga expedita earum fugit? Ipsa minima quia nihil exercitationem inventore 
                possimus ab facilis nisi aliquid. A?</p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="mb-4 font-weigth-bold titleFooter">Product</h5>
          <p>
            <a href="" class="text-white" style="text-decoration:none;">Home</a>
          </p>
          <p>
            <a href="" class="text-white" style="text-decoration:none;">Berita</a>
          </p>
          <p>
            <a href="" class="text-white" style="text-decoration:none;">Forum</a>
          </p>
          <p>
            <a href="" class="text-white" style="text-decoration:none;">Cari Alumni</a>
          </p>

        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="mb-4 font-weigth-bold titleFooter">Contact</h5>
          <p>
          <i class="fa-solid fa-house"></i> Home
          </p>
          <p>
          <i class="fa-solid fa-envelope"></i> Email
          </p>
          <p>
          <i class="fa-solid fa-phone"></i> Phone
          </p>
          <i class="fa-solid fa-fax"></i> Faxs

        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h5 class=" mb-4 font-weigth-bold titleFooter">Alumni<span>Ku</span>.</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias deleniti laboriosam atque 
                ipsam magnam fuga expedita earum fugit? Ipsa minima quia nihil exercitationem inventore 
                possimus ab facilis nisi aliquid. A?</p>
        </div>
    </div>
        <hr class="mb-4">
       <div class="row align-items-centre poss">
          <div class="col-md-7 col-lg-8">
            <p>Copyright 2023 All rigth reserved by:
              <a href=""  style="text-decoration:none;">
              <strong class="text-warning"> Developer</strong></a>
      </p>

    </div>

    <div class="col-md-5 col-lg-4">
      <div class="text-center text-md-rigth">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fa-brands fa-facebook"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fa-brands fa-whatsapp"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fa-brands fa-instagram"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fa-brands fa-twitter"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="" class="btn-floating btn-sm text-white" style="font-size:23px;"><i class="fa-brands fa-linkedin"></i></a>
          </li>
        </ul>
      </div>

    </div>

  </div>
   
</div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ceefbd64d0.js" crossorigin="anonymous"></script>
<script src="Asset\alumniCSSJS\scrip.js"></script>
</body>
</html>
