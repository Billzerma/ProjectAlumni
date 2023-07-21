<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

<style>
.table {
    width: 90%;
    /* Adjust the table width as needed */
    font-size: 14px;
    /* Adjust the font size as needed */
}

.table td,
.table th {
    padding: 0.5rem;
    /* Adjust the padding as needed */
    font-size: 14px;
    /* Adjust the font size as needed */
}
</style>

<div class="container m-tab">
    <div class="row mar-create shadow">
        <div class="col">
            <h2 class="title-table">Buat Akun</h2>
            <form action="<?= url_to('register') ?>" method="post" class="user">

                <?= csrf_field() ?>

                <div>

                    <div class="input-group flex-nowrap in-grup col-lg-7">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="email"
                            class="form-control  <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                            name="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>"
                            aria-label="Username" aria-describedby="addon-wrapping">
                    </div>


                    <div class="input-group flex-nowrap in-grup col-lg-7">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="text"
                            class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"
                            name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                    </div>

                    <div class="input-group flex-nowrap in-grup col-lg-7">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="password"
                            class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                            name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                    </div>

                    <div class="input-group flex-nowrap in-grup col-lg-7">
                        <span class="input-group-text" id="addon-wrapping">@</span>
                        <input type="password" name="pass_confirm"
                            class="form-control  <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                            placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                    </div>

                    <button type="submit" class="btn btn-primary btnReg md-10"> <?=lang('Auth.register')?>
                    </button>

                </div>
<<<<<<< HEAD
                
                <hr>
                <table class="table shadow">
                    <thead class="table-dark ">
                        <tr>
                            <th scope="col title-th">No.</th>
                            <th scope="col title-th">sampul</th>
                            <th scope="col title-th">Nama</th>
                            <th scope="col title-th">Tahun Lulus</th>
                            <th scope="col title-th">Email</th>
                            <th scope="col title-th">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;  ?>
                    <?php foreach ($profile as $p):?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="Asset\alumniCSSJS\gambar\berita\<?= $p['sampul_profile'];?>" alt="" class="sampul"></td>
                            <td><?= $p['nama'];?></td>
                            <td><?= $p['tahun_lulus'];?></td>
                            <td><?= $p['email'];?></td>
                            
                            <td>
                                <a href="" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                        
                    </tbody>
                </table>
            </div>
=======

            </form>
>>>>>>> b7f74eb5f49f53f5eac79217929de76fdc5dfc41
        </div>
    </div>

    <div class="row mar-user">
        <div class="col">

            <h2 class="mt-2 title-table">Daftar Alumni</h2>

            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari sesuai angkatan" name="keyword">
                </div>
                <button class="btn btn-outline-secondary bg-primary text-light mb-3" type="submit"
                    name="submit">Cari</button>
            </form>

        </div>

        <hr>
        <div class="table-responsive">
            <table class="table shadow">
                <thead class="table-dark ">
                    <tr>
                        <th scope="col title-th">No.</th>
                        <th scope="col title-th">sampul</th>
                        <th scope="col title-th">Nama</th>
                        <th scope="col title-th">Tahun Lulus</th>
                        <th scope="col title-th">Email</th>
                        <th scope="col title-th">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;  ?>
                    <?php foreach ($profile as $p):?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><img src="Asset\alumniCSSJS\gambar\anggota\<?= $p['sampul_profile'];?>" alt=""
                                class="sampul_profile"></td>
                        <td><?= $p['nama'];?></td>
                        <td><?= $p['tahun_lulus'];?></td>
                        <td><?= $p['email'];?></td>

                        <td>
                            <a href="hapusAlumni/<?= $p['id_profile']; ?>"
                                onclick="return confirm('Apakah anda yakin?');">
                                <i class="fa-solid fa-trash-can" style="color: #ff0000;"></i>
                            </a>
                        </td>


                    </tr>
                    <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
