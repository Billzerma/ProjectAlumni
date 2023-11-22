<?=$this->extend('Alumni/tamplate/header');?>

<?=$this->section('content');?>



<div class="conberita">
        <div class="landHome">
        <div class="container-berita">
            <h3 class="subtitle-Berita mt-5">Berita Terkini <i class="fa-regular fa-newspaper"></i>
            
            </div>
        </div>

        <div class="wrapBerita">


        <table class="table table-posting mt-5 shadow">
        
        <tbody>
        
            <?php foreach ($berita as $b):?>
            <tr>
            
            <td class="mar-img">
                <div class="col-md-12">
                    
                        <img src="Asset\alumniCSSJS\gambar\berita\<?= $b['sampul_berita'];?>" class="img-fluid rounded-start img-gedung" alt="...">
                </div>
            </td>

            <td class=".desk-gedung">
                <div class="col-md-12 ps-1">
                    
                    
                    <h5 class="card-text"><?= $b['judul_berita'];?></h5>
                    <p class="card-text">tanggal di posting oleh <span></span></p>
                    <p class="card-text"><?= $b['headline'];?></p>
                    <a href="/detail-berita/<?= $b['id_berita'];?>">Lihat Selengkapnya</a>
                </div>
            </td>
            </tr>
           <?php endforeach;?>
            
        </tbody>
        </table>
        </div>

</div>



<?=$this->endSection('content');?>