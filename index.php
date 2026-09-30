<?php

// Data produk perabotan rumah tangga
$produk = [
    [
        "nama" => "Panci Pro Cookware Stainless Steel Set",
        "kategori" => "Dapur & Memasak",
        "harga" => 1250000,
        "stok" => 5
    ],
    [
        "nama" => "Air Fryer Digital 4L",
        "kategori" => "Elektronik Dapur",
        "harga" => 850000,
        "stok" => 3
    ],
    [
        "nama" => "Sapu & Pengki Set Ergonomis",
        "kategori" => "Kebersihan",
        "harga" => 120000,
        "stok" => 12
    ],
    [
        "nama" => "Blender Serbaguna 3-in-1",
        "kategori" => "Elektronik Dapur",
        "harga" => 450000,
        "stok" => 0
    ],
    [
        "nama" => "Sofa Minimalis 2 Seater",
        "kategori" => "Mebel & Ruang Tamu",
        "harga" => 2750000,
        "stok" => 2
    ],
    [
        "nama" => "Lampu Tidur LED Estetik",
        "kategori" => "Dekorasi Kamar",
        "harga" => 180000,
        "stok" => 8
    ]
];

// Jumlah seluruh produk
$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store - Perabotan Rumah Tangga</title>

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff; /* Alice Blue / Biru Muda Lembut */
            color: #2c3e50;
        }

        /* NAVBAR */
        header {
            background-color: #3a8bcd; /* Biru Muda Cerah */
            padding: 18px 8%;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-weight: 500;
        }

        nav a:hover {
            opacity: 0.8;
        }

        /* HERO */
        .hero {
            padding: 70px 8%;
            text-align: center;
            background-color: #e6f2ff; /* Biru Sangat Muda */
            border-bottom: 1px solid #d0e3f7;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
            color: #1a5b8c;
        }

        .hero p {
            color: #557a95;
            font-size: 18px;
        }

        /* INFO */
        .info {
            text-align: center;
            padding: 30px;
        }

        .info-box {
            display: inline-block;
            background-color: white;
            padding: 20px 40px;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(58, 139, 205, 0.15);
            border-left: 5px solid #3a8bcd;
        }

        .info-box h2 {
            margin-bottom: 5px;
            color: #1a5b8c;
        }

        .info-box p {
            color: #666;
        }

        /* PRODUK */
        .container {
            width: 84%;
            max-width: 1200px;
            margin: auto;
            padding-bottom: 60px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .product-card {
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 3px 12px rgba(0,0,0,0.06);
            border: 1px solid #e1effa;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 16px rgba(58, 139, 205, 0.2);
        }

        .product-card h3 {
            margin-bottom: 10px;
            color: #1a5b8c;
        }

        .category {
            color: #789abc;
            font-size: 14px;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .price {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .normal-price {
            color: #999;
            text-decoration: line-through;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .discount {
            color: #e74c3c;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .final-price {
            color: #27ae60;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .stock {
            margin-bottom: 15px;
            font-weight: bold;
        }

        .available {
            color: #27ae60;
        }

        .empty {
            color: #e74c3c;
        }

        .buy-button {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #3a8bcd;
            color: white;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.2s;
        }

        .buy-button:hover {
            background-color: #2a73ad;
        }

        .disabled-button {
            display: block;
            width: 100%;
            text-align: center;
            background-color: #d1dbe5;
            color: #8899a6;
            padding: 12px;
            border-radius: 8px;
            cursor: not-allowed;
        }

        /* FOOTER */
        footer {
            background-color: #2b6a9e;
            color: white;
            text-align: center;
            padding: 25px;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {

            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media (max-width: 600px) {

            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 8px;
            }

            .hero h1 {
                font-size: 32px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>
</head>

<body>

    <!-- NAVBAR -->
    <header>
        <nav>
            <div class="logo">Cia Store</div>

            <div>
                <a href="#">Home</a>
                <a href="#produk">Katalog Perabotan</a>
            </div>
        </nav>
    </header>


    <!-- HERO -->
    <section class="hero">

        <h1>Selamat Datang di Cia Store</h1>

        <p>
            Lengkapi kenyamanan hunian Anda dengan perabotan dan perlengkapan rumah tangga berkualitas.
        </p>

    </section>


    <!-- INFORMASI JUMLAH PRODUK -->
    <section class="info">

        <div class="info-box">

            <h2>
                <?php echo $jumlahProduk; ?>
            </h2>

            <p>
                Pilihan Perabotan Tersedia
            </p>

        </div>

    </section>


    <!-- KATALOG PRODUK -->
    <main class="container" id="produk">

        <div class="product-grid">

            <?php foreach ($produk as $item): ?>

                <?php

                // Menentukan status stok
                if ($item["stok"] > 0) {
                    $status = "Tersedia";
                    $statusClass = "available";
                } else {
                    $status = "Stok Habis";
                    $statusClass = "empty";
                }


                // Menghitung diskon (Diskon 10% untuk produk harga Rp 1.000.000 ke atas)
                if ($item["harga"] >= 1000000) {

                    $diskon = 10;

                    $hargaDiskon =
                        $item["harga"] * $diskon / 100;

                    $hargaAkhir =
                        $item["harga"] - $hargaDiskon;

                } else {

                    $diskon = 0;

                    $hargaAkhir = $item["harga"];

                }

                ?>

                <article class="product-card">

                    <h3>
                        <?php echo $item["nama"]; ?>
                    </h3>

                    <p class="category">
                        <?php echo $item["kategori"]; ?>
                    </p>


                    <?php if ($diskon > 0): ?>

                        <p class="normal-price">
                            Rp <?php echo number_format($item["harga"], 0, ',', '.'); ?>
                        </p>

                        <p class="discount">
                            Diskon <?php echo $diskon; ?>%
                        </p>

                        <p class="final-price">
                            Rp <?php echo number_format($hargaAkhir, 0, ',', '.'); ?>
                        </p>

                    <?php else: ?>

                        <p class="price">
                            Rp <?php echo number_format($hargaAkhir, 0, ',', '.'); ?>
                        </p>

                    <?php endif; ?>


                    <p class="stock <?php echo $statusClass; ?>">

                        <?php echo $status; ?>

                        <?php if ($item["stok"] > 0): ?>

                            (<?php echo $item["stok"]; ?> stok)

                        <?php endif; ?>

                    </p>


                    <?php if ($item["stok"] > 0): ?>

                        <a href="#" class="buy-button">
                            Beli Sekarang
                        </a>

                    <?php else: ?>

                        <div class="disabled-button">
                            Tidak Tersedia
                        </div>

                    <?php endif; ?>

                </article>

            <?php endforeach; ?>

        </div>

    </main>


    <!-- FOOTER -->
    <footer>

        <p>
            &copy; 2026 Cia Store. All Rights Reserved.
        </p>

    </footer>

</body>
</html>