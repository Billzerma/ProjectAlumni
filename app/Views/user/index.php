<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
  
        <div class="wrap-profil shadow">
        
            <div class="row m-profil">
                <h1 class="subtitle-home">My Profile</h1>
                
                
                <div class="col-md-4">
                     <div class="img-profil">
                        <img src="Asset\alumniCSSJS\gambar\galeri\info.jpg" alt="" class="img-profil">

                    </div>

                    <div class="nama-pekerjaan">
                    <h1>Hello, There</h1>
                    <h3>Akhdar Karawita S.kom</h3>
                    <p>Web developer|Fullstack web Developer</p>
                    </div>
                </div>

                
                 <div class="col-md-6">
                 <div class="summary">
                    <h3>My Summary</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem,
                         impedit omnis? Eos, beatae praesentium. Tempore ab nihil quos, 
                         quisquam vitae blanditiis expedita omnis, eum ratione tempora suscipit
                          modi eius odio. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                           Natus, accusantium? Quo aliquid ducimus officia quos tempore qui accusantium 
                           quam amet corrupti laudantium non nemo explicabo, veniam expedita minus incidunt
                            veritatis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptatem maiores
                             dolores nostrum asperiores quisquam porro rem eveniet alias sit dolorem maxime, nihil sint vitae? Cum ut veniam vero ipsa!</p>
                    </div>
                </div>
            </div>

        <div class="row">

        <div class="col-md-4 ">
                    <div class="medsos">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="">Facebook <i class="fa-brands fa-facebook "></i></a></li>
                        <li> <a href="">Instagram <i class="fa-brands fa-instagram "></i></a></li>
                        <li> <a href="">Twitter <i class="fa-brands fa-twitter "></i></a></li>
                        <li> <a href="">Email <i class="fa-solid fa-envelope "></i></a></li>
                        <li> <a href="">Share kontak <i class="fa-solid fa-address-book "></i></a></li>
                    </ul>
                    
                    </div>
            </div>
                <div class="col-md-4">

                        <div class="pendidikan">
                            <h3>Riwayat Pendidikan <i class="fa-solid fa-graduation-cap"></i></h3>
                            <ul>
                                <li>SD Internasional BSD <i class="fa-solid fa-check "></i></li>
                                <li>SMP Bina Negara <i class="fa-solid fa-check "></i></li>
                                <li>SMA Pelita Negara <i class="fa-solid fa-check "></i></li>
                                <li>S1 STIKI Malang <i class="fa-solid fa-check "></i></li>
                                <li>S2 Oxsford University <i class="fa-solid fa-check "></i></li>
                            </ul>
                            </div>               
                </div>
            
            

            <div class="col-md-3 ">
                    <div class="portofolio">
                        <h3>My Portofolio</h3>
                            <ul>
                            <li><a href="">My Drive</a></li>
                            <li><a href="">LinkIn</a></li>
                            </ul>
                    </div>
            </div>

          
        </div>

</div>
<?= $this->endSection(); ?>