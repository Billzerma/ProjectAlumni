
<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

    <div class="container m-tab">
   
        <div class="row">
            <div class="col">
                <a href="/anggota/create" class="btn btn-primary mt-3">Tambah Akun <i class="fa-solid fa-user-plus"></i></a>
                <h2 class="mt-2 title-table">Daftar Alumni</h2>
                <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
                <?php endif; ?>
                <hr>
                <table class="table shadow">
                    <thead class="table-dark ">
                        <tr>
                            <th scope="col title-th">No.</th>
                            <th scope="col title-th">Foto</th>
                            <th scope="col title-th">Nama</th>
                            <th scope="col title-th">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;  ?>
                        <?php foreach($anggota as $a) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/Asset/alumniCSSJS/gambar/Anggota/<?= $a['sampul']; ?>" alt="" class="sampul">
                            </td>
                            <td><?= $a['nama']; ?></td>
                            <td>
                                <a href="/anggota/<?= $a['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>