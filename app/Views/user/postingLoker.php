<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>


<div class="wrapper mar-posting-berita">
<div class="container-input mar-posting-berita  ms-8">
    <div class="row w-75  mb-4 ">
            <h2 class="inf-berita">Posting Lowongan Perkerjaan</h2>

            
            <div class="alert alert-danger" role="alert">
            
            </div>
           

            <form action="admin/save" method="post" >
           
            <div class="col booking-input w-60">

                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="judul" class="label-in">judul</label>
                <input type="text" class="form-control " name="judul" autofocus  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value=<?= old('gedung');?>>
                
                </div>

                
                <div class="mb-3 mb-4 w-70  shadow-sm">
                <label for="deskripsi"  class="label-in">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi"  id="exampleFormControlTextarea1" rows="3" ></textarea>
                </div>

                <div class="mb-3 mb-4 w-70  shadow-sm">
                <label for="deskripsi"  class="label-in">Persyaratan</label>
                    <textarea class="form-control" name="persyaratan"  id="exampleFormControlTextarea1" rows="3" ></textarea>
                </div>

                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="contact" class="label-in">Contact person</label>
                <input type="text" class="form-control " name="contact" autofocus  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value=<?= old('gedung');?>>
                
                </div>

                <div class="form-group mb-4 w-70 shadow-sm">
                    <label for="alamat" class="label-in">Alamat</label>
                <input type="text" class="form-control " name="alamat" autofocus  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value=<?= old('gedung');?>>
                
                </div>

                <div class="mb-3 mb-4 w-70 ">
                    <div class="row">
                        <div class="col-5">
                        <img src="Asset\alumniCSSJS\gambar\slider\img-1.jpg" alt="" class="sampul-berita">
                        </div>
                        <div class="col-5">

                        <div class="custom-file mar-csf">
                        <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewImg()"  value=<?= old('sampul')?>>
                        <label class="custom-file-label" for="sampul">Pilih Cover Loker</label>
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