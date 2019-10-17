<?php foreach ($biodata->edit($data['id']) as $data) {
    $id = $data['id'];
    $agama = $data['agama'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $tgl_lahir = $data['tgl_lahir'];
}

?>
<div class="modal fade biodata-<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="/biodata/proses.php?aksi=update" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Biodata </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea type="text" name="alamat" class="form-control" required><?php echo $alamat ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" <?php if ($data['jenis_kelamin'] == "Laki-laki") {
                                                                                echo "checked";
                                                                            } ?> name="jenis_kelamin" value="Laki-laki">
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" <?php if ($data['jenis_kelamin'] == "Perempuan") {
                                                                                echo "checked";
                                                                            } ?> name="jenis_kelamin" value="Perempuan">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <select name="agama" class="form-control">
                            <option value="Islam" <?php if ($data['agama'] == "Islam") echo "selected"; ?>>Islam</option>
                            <option value="Kristen" <?php if ($data['agama'] == "Kristen") echo "selected"; ?>>Kristen</option>
                            <option value="Konghucu" <?php if ($data['agama'] == "Konghucu") echo "selected"; ?>>Konghucu</option>
                            <option value="Budha" <?php if ($data['agama'] == "Budha") echo "selected"; ?>>Budha</option>
                            <option value="Katholik" <?php if ($data['agama'] == "Katholik") echo "selected"; ?>>Katholik</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="save" class="btn btn-block btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>