<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Daftar Buku</h1>
        <div class="my-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal"><i class="bi-plus-circle-fill"></i> Tambah</button>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <?php foreach ($data->getKolomTabel() as $kolom): ?>
                                <th scope="col">
                                    <?php echo $kolom ?>
                                </th>
                            <?php endforeach; ?>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0; ?>
                        <?php foreach ($data->getData() as $buku): ?>
                            <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $buku->getJudul(); ?></td>
                                <td><?php echo $buku->getPengarang(); ?></td>
                                <td><?php echo $buku->getPenerbit(); ?></td>
                                <td><?php echo $buku->getTahun(); ?></td>

                                <td>
                                    <a href="/index.php/edit?id=<?php echo $buku->getId(); ?>" class="btn btn-success"><i class="bi-pencil-square"></i> Edit</a>
                                    <button class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#hapusModal"
                                        data-bs-id=<?php echo $buku->getId(); ?>><i class="bi-trash"></i> Hapus</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Modal Tambah Buku -->
            <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="tambahModalLabel">Form Tambah Buku</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/index.php/buku/simpan" id="formtambah" method="POST">
                                <div class="mb-3">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" id="judul" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="pengarang">Pengarang</label>
                                    <input type="text" name="pengarang" id="pengarang" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="penerbit">Penerbit</label>
                                    <input type="text" name="penerbit" id="penerbit" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="tahun">Tahun</label>
                                    <input type="text" name="tahun" id="tahun" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" form="formtambah" class="btn btn-primary"><i class="bi bi-floppy"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Hapus -->
            <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="hapusModallabel">Konfirmasi Hapus</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/index.php/buku/hapus" id="formhapus" method="POST">
                                <input type="hidden" name="id_hapus" id="hidden_id">
                                <p>Apakah anda yakin ingin menghapus buku dengan ID <span id="text_id">...</span>?</p>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="formhapus" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

            <script>
                const hapusModal = document.getElementById('hapusModal')
                if (hapusModal) {
                    hapusModal.addEventListener('show.bs.modal', event => {
                        const button = event.relatedTarget
                        const id = button.getAttribute('data-bs-id')
                        const hidden_id = hapusModal.querySelector('#hidden_id')
                        const text_id = hapusModal.querySelector('#text_id')

                        hidden_id.value = id;
                        text_id.textContent = id;
                    })
                }
            </script>
</body>

</html>