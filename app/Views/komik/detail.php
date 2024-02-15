<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Komik</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <?php if ($komik !== null && !empty($komik)) : ?>
                        <div class="col-md-4">
                            <img src="/img/<?= $komik['sampul']; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $komik['judul']; ?></h5>
                                <p class="card-text"><b>Penulis : </b><?= $komik['penulis']; ?></p>
                                <p class="card-text"><small class="text-body-secondary"><b>Penerbit :</b><?= $komik['penerbit']; ?></small></p>
                                <a href="" class="btn btn-warning">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                                <br>
                                <a href="/komik">kembali ke daftar komik</a>
                            </div>
                        </div>
                    <?php else : ?>
                        <p>There is no data available for the comic.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>