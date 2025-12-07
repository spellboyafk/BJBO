<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Paket Buah BJBO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #3a8138ff;
        }
        .card img {
            height: 180px;
            object-fit: cover;
        }
        .harga {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container mt-5 mb-5">

    <h2 class="text-center mb-4 text-white"> Paket Buah BJBO</h2>

    <div class="row g-4">

        <!-- Paket 1 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('images/paket_sehat.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-success">Paket Sehat</h5>
                    <p>Isi: Apel, Pisang, Jeruk</p>
                    <p class="harga">Rp 35.000</p>
                    <button class="btn btn-success w-100">Pesan Sekarang</button>
                </div>
            </div>
        </div>

        <!-- Paket 2 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('images/tropis.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-success">Paket Tropis</h5>
                    <p>Isi: Mangga, Nanas, Semangka</p>
                    <p class="harga">Rp 45.000</p>
                    <button class="btn btn-success w-100">Pesan Sekarang</button>
                </div>
            </div>
        </div>

        <!-- Paket 3 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('images/keluarga.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-success">Paket Keluarga</h5>
                    <p>Isi: Apel, Anggur, Jeruk, Pir</p>
                    <p class="harga">Rp 70.000</p>
                    <button class="btn btn-success w-100">Pesan Sekarang</button>
                </div>
            </div>
        </div>

        <!-- Paket 4 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('images/diet.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-success">Paket Diet</h5>
                    <p>Isi: Apel, Kiwi, Stroberi</p>
                    <p class="harga">Rp 40.000</p>
                    <button class="btn btn-success w-100">Pesan Sekarang</button>
                </div>
            </div>
        </div>

        <!-- Paket 5 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('images/anak.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-success">Paket Anak</h5>
                    <p>Isi: Pisang, Semangka, Melon</p>
                    <p class="harga">Rp 30.000</p>
                    <button class="btn btn-success w-100">Pesan Sekarang</button>
                </div>
            </div>
        </div>

        <!-- Paket 6 -->
        <div class="col-md-4">
            <div class="card shadow">
                <img src="{{ asset('images/premium.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-success">Paket Premium</h5>
                    <p>Isi: Anggur, Kiwi, Apel Fuji</p>
                    <p class="harga">Rp 90.000</p>
                    <button class="btn btn-success w-100">Pesan Sekarang</button>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
