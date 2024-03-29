<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<?php
require_once '../dbkoneksi.php';
?>
<?php
$sql = "SELECT DISTINCT kartu.*, pelanggan.kartu_id as is_pelanggan FROM kartu LEFT JOIN pelanggan ON kartu.id = pelanggan.kartu_id";
$rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="create.php" role="button">Tambah Kartu</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Diskon</th>
            <th>Iuran</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $row['kode'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['diskon'] ?></td>
                <td><?= $row['iuran'] ?></td>
                <td>
                    <a class="btn btn-primary" href="view.php?id=<?= $row['id'] ?>">View</a>
                    <a class="btn btn-primary" href="edit.php?idedit=<?= $row['id'] ?>">Edit</a>
                    <a class="btn btn-primary <?= $row['is_pelanggan'] ? 'disabled' : '' ?>" href="delete.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                </td>
            </tr>
        <?php
            $nomor++;
        }
        ?>
    </tbody>
</table>