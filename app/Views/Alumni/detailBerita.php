<?=$this->extend('Alumni/tamplate/header');?>

<?=$this->section('content');?>



<div class="container-detail-berita">
    <div class="row no-mar">
        <div class="col-3 bg-bg">
            <img src="\Asset\alumniCSSJS\gambar\berita\bg-detail.jpg" class="bg-detail-berita"alt="">
        </div>
        <div class="col-6">
            <h5 class="judul-berita"><?= $berita['judul_berita'];?></h5>
            <img src="\Asset\alumniCSSJS\gambar\berita\<?= $berita['sampul_berita'];?>" alt="">
            <p class="card-text">tanggal di posting oleh <span></span></p>
            
            <p class="card-text isi-berita"><?= $berita['isi_berita'];?></p>
            
            
        </div>





        
    </div>
</div>


















<?=$this->endSection('content');?>