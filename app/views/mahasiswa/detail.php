<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?= $data['mhs']['nama']; ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?= $data['mhs']['npm']; ?>
            </h6>

            <hr>

            <p class="card-text">
                Email :
                <?= $data['mhs']['email']; ?>
            </p>
            <p class="card-text">
                Jurusan :
                <?= $data['mhs']['jurusan']; ?>
            </p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-dark btn-darken">Kembali</a>
        </div>
    </div>

</div>