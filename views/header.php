<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Restoran</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        body { font-family: Arial, sans-serif; margin:0; padding:0; background:#f4f4f4;}
        nav { background:#667eea; padding:1rem; color:white;}
        nav a { color:white; margin-right:1rem; text-decoration:none; font-weight:bold;}
        .container { padding:2rem; }
        .dashboard-cards { display:flex; gap:1rem; flex-wrap:wrap; }
        .card { background:white; padding:1rem; border-radius:8px; flex:1 1 200px; box-shadow:0 2px 5px rgba(0,0,0,0.1);}
        .card h3 { margin-top:0; }
        table { width:100%; border-collapse: collapse; background:white; margin-top:1rem; }
        th, td { padding:0.5rem; border:1px solid #ddd; text-align:left; }
        th { background:#667eea; color:white; }
        .btn { padding:0.3rem 0.8rem; background:#667eea; color:white; border:none; border-radius:5px; cursor:pointer; }
        .btn:hover { background:#556cd6; }
    </style>
</head>
<body>
<nav>
    <a href="index.php">Dashboard</a>
    <a href="views/Menu.php">Menu</a>
    <a href="views/Pesanan.php">Pesanan</a>
    <a href="views/Meja.php">Meja & Reservasi</a>
    <a href="views/Laporan.php">Laporan</a>
</nav>
<div class="container">
