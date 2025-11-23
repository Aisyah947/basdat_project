<?php include 'header.php'; ?>

<h2>Dashboard Laporan Penjualan</h2>

<div class="dashboard-cards">
    <div class="card">
        <h3>Total Penjualan Hari Ini</h3>
        <div class="number">Rp 5.500.000</div>
    </div>
    <div class="card">
        <h3>Menu Terlaris</h3>
        <div class="number">Nasi Goreng</div>
    </div>
    <div class="card">
        <h3>Shift Terakhir</h3>
        <div class="number">Shift Malam</div>
    </div>
</div>

<h3>Daftar Penjualan</h3>
<table>
    <thead>
        <tr>
            <th>ID Penjualan</th>
            <th>Menu</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Shift</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Nasi Goreng</td>
            <td>10</td>
            <td>Rp 250.000</td>
            <td>Pagi</td>
        </tr>
    </tbody>
</table>

<?php include 'footer.php'; ?>
