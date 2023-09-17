<!-- Button trigger modal -->
<a href="" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#edit<?= $siswa['id_siswa']; ?>">
    <i></i>
    <span>EDIT</span>
</a>

<!-- Modal -->
<div class="modal fade" id="edit<?= $siswa['id_siswa']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: cyan;">Edit Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <div class="modal-body">
                <form action="crud.php" method="post">
                    <input type="text" class="visually-hidden" value="<?= $siswa['id_siswa']; ?>" name="id_siswa">

                    <div class="mb-3">
                        <label class="form-label">NIS</label>
                        <input type="text" class="form-control" name="editnis" value="<?= $siswa['nis']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NAMA</label>
                        <input type="text" class="form-control" name="editnama" value="<?= $siswa['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">JENIS KELAMIN</label>
                        <select class="form-select" id="basicSelect" name="editjenkel" value="<?= $siswa['jenis_kelamin']; ?>">
                            <option value="l" <?php if($siswa['jenis_kelamin']=='l'){
                                echo "selected";
                            } ?>>Laki-Laki</option>
                            <option value="p" <?php if($siswa['jenis_kelamin']=='p'){
                                echo "selected";
                            } ?>>Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">TAHUN MASUK</label>
                        <input type="text" class="form-control" name="editthn" value="<?= $siswa['tahun_masuk']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" name="editkls" value="<?= $siswa['kelas'] ?>" id="kelas">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ALAMAT</label>
                        <input type="text" class="form-control" name="editalmt" value="<?= $siswa['alamat']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">TEMPAT LAHIR</label>
                        <input type="text" class="form-control" name="edittmpt" value="<?= $siswa['tempat_lahir']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">TANGGAL LAHIR</label>
                        <input type="date" class="form-control" name="edittgl" value="<?= $siswa['tanggal_lahir']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PASSWORD</label>
                        <input type="password" class="form-control" name="editpass" value="<?= $siswa['password']; ?>">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary ml-1" name="edit">
                    <input type="text" class="visually-hidden" value="<?= $siswa['id_siswa']; ?>" name="id_siswa">
                    <span class="d-none d-sm-block">Simpan</span>
                </button>
            </div>
        </div>
        </form>
    </div>
</div>

<!-- Button trigger modal -->
<a href="" class="btn btn-danger m-2" data-bs-toggle="modal" data-bs-target="#delete<?= $siswa['id_siswa']; ?>">
    <i class="fa fa-trash3"></i>
    <span>Delete</span>
</a>
<!-- Modal -->
<div class="modal fade" id="delete<?= $siswa['id_siswa']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="crud.php" method="get">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Apakah Anda Yakin Ingin Menghapus siswa ini?</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ml-1" name="delete">
                        <input type="text" class="visually-hidden" value="<?= $siswa['id_siswa']; ?>" name="idhapus">
                        <span class="d-none d-sm-block">Hapus</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>