<?php
require_once '../dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM kartu WHERE id = ?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$card = $st->fetch();
?>

<form method="POST" action="proses.php">
    <div class="form-group row mt-2">
        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <div class="input-group">
                <input id="kode" name="kode" type="text" class="form-control" value="<?= $card['kode'] ?>">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="nama" class="col-4 col-form-label">Nama Kartu</label>
        <div class="col-8">
            <div class="input-group">
                <input id="nama" name="nama" type="text" class="form-control" value="<?= $card['nama'] ?>">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="stok" class="col-4 col-form-label">Diskon</label>
        <div class="col-8">
            <div class="input-group">
                <input id="tmp_lahir" name="diskon" value="<?= $card['diskon'] ?>" type="number" class="form-control">
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label for="stok" class="col-4 col-form-label">Iuran</label>
        <div class="col-8">
            <div class="input-group">
                <input id="tmp_lahir" name="iuran" value="<?= $card['iuran'] ?>" type="number" class="form-control">
            </div>
        </div>
    </div>

    <input type="hidden" value="<?= $card['id'] ?>" name="id">

    <div class="form-group row mt-2">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update" />
        </div>
    </div>
</form>