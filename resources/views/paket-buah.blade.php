<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Paket Buah | BJBO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
        }

        .container {
            width: 90%;
            margin: auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #2e7d32;
        }

        .paket-wrapper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .card-body h3 {
            margin: 0;
            color: #388e3c;
        }

        .card-body p {
            font-size: 14px;
            color: #555;
        }

        .harga {
            font-weight: bold;
            color: #d32f2f;
            margin-top: 10px;
        }

        .btn {
            display: block;
            text-align: center;
            margin-top: 15px;
            padding: 10px;
            background-color: #43a047;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .btn:hover {
            background-color: #2e7d32;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>🍉 Paket Buah BJBO</h1>

    <div class="paket-wrapper">

        <!-- Paket 1 -->
        <div class="card">
            <img src="https://source.unsplash.com/300x200/?fruit" alt="Paket Buah">
            <div class="card-body">
                <h3>Paket Sehat</h3>
                <p>Isi: Apel, Pisang, Jeruk</p>
                <div class="harga">Rp 35.000</div>
                <a href="#" class="btn">Pesan Sekarang</a>
            </div>
        </div>

        <!-- Paket 2 -->
        <div class="card">
            <img src="https://source.unsplash.com/300x200/?tropical-fruit" alt="Paket Buah">
            <div class="card-body">
                <h3>Paket Tropis</h3>
                <p>Isi: Mangga, Nanas, Semangka</p>
                <div class="harga">Rp 45.000</div>
                <a href="#" class="btn">Pesan Sekarang</a>
            </div>
        </div>

        <!-- Paket 3 -->
        <div class="card">
            <img src="https://source.unsplash.com/300x200/?fresh-fruit" alt="Paket Buah">
            <div class="card-body">
                <h3>Paket Keluarga</h3>
                <p>Isi: Apel, Anggur, Jeruk, Pir</p>
                <div class="harga">Rp 70.000</div>
                <a href="#" class="btn">Pesan Sekarang</a>
            </div>
        </div>

    </div>
</div>

</body>
</html>
