<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>


<div class="wrapper mar-posting-berita">
<div class="container-input mar-posting-berita  ms-8">
    <div class="row w-75  mb-4 ">
            <h2 class="inf-berita">Posting Beritamu</h2>

            
            <?php if (session()->has('err')) : ?>
            <div class="alert alert-danger" role="alert">
            <?php echo session('err'); ?>
            </div>
            <?php endif; ?>
           

            <form action="/posting-berita/save" method="post" enctype="multipart/form-data">
           
            <div class="col booking-input w-60">

                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="judul" class="label-in">judul</label>
                <input type="text" class="form-control " name="judul_berita" autofocus  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value=<?= old('judul_berita');?>>
                
                </div>

                
                <div class="mb-3 mb-4 w-70  shadow-sm">
                <label for="deskripsi"  class="label-in">headline</label>
                    <textarea class="form-control" name="headline" value=<?= old('headline')?> id="exampleFormControlTextarea1" rows="3" ></textarea>
                </div>
                <div class="mb-3 mb-4 w-70  shadow-sm">
                <label for="deskripsi"  class="label-in">Berita</label>
                    <textarea class="form-control" name="isi_berita" value=<?= old('isi_berita')?>  id="exampleFormControlTextarea1" rows="3" ></textarea>
                </div>

                <div class="mb-3 mb-4 w-70 ">
                    <div class="row">
                        <div class="col-5">
                        <img src="Asset\alumniCSSJS\gambar\slider\img-1.jpg" alt="" class="sampul-berita">
                        </div>
                        <div class="col-5">

                        <div class="custom-file mar-csf">
                        <input type="file" class="custom-file-input" id="sampul-berita" name="sampul-berita" onchange="previewImg()" >
                        <label class="custom-file-label" for="sampul">Pilih Cover Berita</label>
                        </div>
                        </div>
                    </div>
                    
                
                </div>

            </div>

                <button type="submit" class="btn btn-success btn-simpan">Posting</button>
        </form>
        
 </div>

 </div>



























<?= $this->endSection(); ?>