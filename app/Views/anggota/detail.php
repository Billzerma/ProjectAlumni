<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-2">Detail Anggota</h2>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/Asset/alumniCSSJS/gambar/Anggota/<?= $anggota['sampul']; ?>"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $anggota['nama']; ?></h5>
                                <p class="card-text"><b>No Anggota :</b> <?= $anggota['no_anggota']; ?></p>
                                <p class="card-text"><b>No HP :</b> <?= $anggota['hp']; ?></p>

                                <a href="/anggota/edit/<?= $anggota['slug']; ?>" class="btn btn-warning">Edit</a>
                                <a href="/anggota/delete/<?= $anggota['id']; ?>" class="btn btn-danger"
                                    onclick="return confirm('Apakah anda yakin?');">Delete</a>
                                <br><br>
                                <a href="/anggota">Kembali ke daftar Anggota</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <?= $this->endSection(); ?>