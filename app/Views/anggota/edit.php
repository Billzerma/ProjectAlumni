<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>


    <div class="container">
        <h2>Edit Data Anggota</h2>
        <div class="row">
            <div class="col-md-2">
                <img src="/Asset/alumniCSSJS/gambar/Anggota/<?= $anggota['sampul']; ?>"
                    class="img-thumbnail img-preview">
            </div>
            <div class="col-md-8 form-container">
                <?php echo form_open('anggota/update/'.$anggota['id'], ['method' => 'post', 'enctype' => 'multipart/form-data']); ?>

                <?php if (session()->has('err')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo session('err'); ?>
                </div>
                <?php endif; ?>

                <input type="hidden" name="slug" value="<?= $anggota['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?= $anggota['sampul']; ?>">

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text"
                        class="form-control <?php echo (isset($validation) && $validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                        id="nama" name="nama" value="<?php echo $anggota['nama']; ?>">
                    <?php if (isset($validation) && $validation->hasError('nama')) : ?>
                    <div class="invalid-feedback">
                        <?php echo $validation->getError('nama'); ?>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="no_anggota">Nomor Anggota</label>
                    <input type="text"
                        class="form-control <?php echo (isset($validation) && $validation->hasError('no_anggota')) ? 'is-invalid' : ''; ?>"
                        id="no_anggota" name="no_anggota" value="<?php echo $anggota['no_anggota']; ?>">
                    <?php if (isset($validation) && $validation->hasError('no_anggota')) : ?>
                    <div class="invalid-feedback">
                        <?php echo $validation->getError('no_anggota'); ?>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="hp">No. HP</label>
                    <input type="text"
                        class="form-control <?php echo (isset($validation) && $validation->hasError('hp')) ? 'is-invalid' : ''; ?>"
                        id="hp" name="hp" value="<?php echo $anggota['hp']; ?>">
                    <?php if (isset($validation) && $validation->hasError('hp')) : ?>
                    <div class="invalid-feedback">
                        <?php echo $validation->getError('hp'); ?>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="sampul">Sampul</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewImg()">
                        <label class="custom-file-label" for="sampul"><?= $anggota['sampul']; ?></label>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">Simpan</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <!-- js for image preview
    <script>
    function previewImg() {
        const sampul = document.querySelector('#sampul');
        const sampulLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        sampulLabel.textContent = sampul.files[0].name;

        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);

        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
    </script> -->

    <?= $this->endSection(); ?>



