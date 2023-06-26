<!-- File: app/Views/anggota/edit.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Anggota</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Edit Data Anggota</h2>

        <?php echo form_open('anggota/update/'.$anggota['id'], ['method' => 'post']); ?>

        <?php if (session()->has('err')) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo session('err'); ?>
        </div>
        <?php endif; ?>

        <input type="hidden" name="slug" value="<?= $anggota['slug']; ?>">
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
            <input type="text"
                class="form-control <?php echo (isset($validation) && $validation->hasError('sampul')) ? 'is-invalid' : ''; ?>"
                id="sampul" name="sampul" value="<?php echo $anggota['sampul']; ?>">
            <?php if (isset($validation) && $validation->hasError('sampul')) : ?>
            <div class="invalid-feedback">
                <?php echo $validation->getError('sampul'); ?>
            </div>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <?php echo form_close(); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>