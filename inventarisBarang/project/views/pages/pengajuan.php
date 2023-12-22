<?= $this->extend('layout/template');?>

<?=$this->section('content');?>

<!-- Form Pengajuan-->
<div class="container mt-5">
      <form>
        <fieldset>
          <h3 class="text-center mb-4">Formulir Pengajuan</h3>
          <div class="mb-3">
            <label for="Nama" class="form-label">Nama Lengkap</label>
            <input class="form-control" type="text" placeholder="Write here..." aria-label="Write here..." />
          </div>
          <div class="mb-3">
            <label for="Pesan" class="form-label">Pesan</label>
            <input class="form-control" type="text" placeholder="Write here..." aria-label="Write here..." />
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- Akhir Form Pengajuan-->

      <?= $this->endSection(); ?>