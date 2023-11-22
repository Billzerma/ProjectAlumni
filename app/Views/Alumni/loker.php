<?=$this->extend('Alumni/tamplate/header');?>

<?=$this->section('content');?>



<div class="conberita">
        <div class="landHome">
        <div class="container-berita">
            <h3 class="subtitle-Berita mt-5">Lowongan Pekerjaan <i class="fa-solid fa-briefcase"></i>
            
            </div>
        </div>

        <div class="wrapBerita">


        <table class="table table-posting mt-5 shadow">
        
        <tbody>
        <?php foreach ($loker as $l):?>
            <tr class="mar-t" >
            
            <td class="mar-img">
                <div class="col-md-12">
                        <img src="Asset\alumniCSSJS\gambar\galeri\<?= $l['sampul_loker'];?>" class="img-fluid rounded-start img-gedung" alt="...">
                </div>
            </td>

            <td class=".desk-gedung">
                <div class="col-md-12 ps-1">
                    <h5 class="card-title"><?= $l['judul_loker'];?></h5>
                    <p class="card-text">tanggal di posting oleh <span></span></p>
                    <p class="card-text"><?= $l['deskripsi_loker'];?></p>
                    <p class="card-text ful">Persyaratan: <br> <?= $l['spesifikasi'];?></p>
                
                    <p>Contact Person:
                    <?= $l['contact_person'];?>
                    </p>
                    <p>Alamat: <?= $l['alamat'];?></p>
                   
                </div>
            </td>
            </tr>
            <?php endforeach;?>
         
            
        </tbody>
        </table>
        </div>

</div>



<?=$this->endSection('content');?>