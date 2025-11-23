<?php
include '../config/koneksi.php';
include '../models/RestoranModel.php';

$db = new Database();
$conn = $db->getConnection();
$model = new RestoranModel($conn);

$allPesanan = $model->getAllPesanan();
?>

<?php include 'header.php'; ?>

<h2>Laporan Pesanan</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Meja</th>
            <th>Pelanggan</th>
            <th>Item</th>
            <th>Total</th>
            <th>Status Bayar</th>
            <th>Status Pesanan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($allPesanan as $pesanan): ?>
        <tr>
            <td><?= $pesanan['id_pesanan'] ?></td>
            <td><?= $pesanan['nomor_meja'] ?></td>
            <td><?= $pesanan['nama_pelanggan'] ?></td>
            <td>
                <?php
                $items = $model->getDetailPesanan($pesanan['id_pesanan']);
                $namaMenu = array_map(fn($i)=>$i['nama_menu']."(".$i['jumlah'].")", $items);
                echo implode(", ", $namaMenu);
                ?>
            </td>
            <td>Rp <?= number_format($model->hitungTotalPesanan($pesanan['id_pesanan']),0,',','.') ?></td>
            <td><?= $model->cekStatusPembayaran($pesanan['id_pesanan']) ?></td>
            <td><?= $pesanan['status_orderan'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'footer.php'; ?>
