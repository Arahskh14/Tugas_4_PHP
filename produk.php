<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Buah-Buahan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .navigation {
            text-align: center;
            background-color: khaki;
            color: blue;
            padding: 10px 0;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }
        .product-item {
            text-align: center;
        }
        .product-item img {
            width: 100%;
            max-width: 200px;
            height: auto;
            border-radius: 8px;
        }
        .product-item p {
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            background-color: black;
            color: white;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Produk Buah-Buahan</h1>
        </div>
        <div class="product-grid">
            <div class="product-item">
                <img src="gambar/apel.jpeg" alt="apel">
                <p>Apel</p>
            </div>
            <div class="product-item">
                <img src="gambar/jeruk.jpeg" alt="Jeruk">
                <p>Jeruk</p>
            </div>
            <div class="product-item">
                <img src="gambar/pisang.jpeg" alt="Pisang">
                <p>Pisang</p>
            </div>
            <div class="product-item">
                <img src="gambar/strawbery.jpeg" alt="Strawberry">
                <p>Strawberry</p>
            </div>
            <div class="product-item">
                <img src="gambar/mangga.jpeg" alt="Mangga">
                <p>Mangga</p>
            </div>
            <div class="product-item">
                <img src="gambar/lemon.jpeg" alt="Lemon">
                <p>Lemon</p>
            </div>
        </div>
    </div>
    <div style="text-align:center; background-color:black; color:white" class="footer">
        Copyright @sarah - 2024
    </div>      
</body>
</html>
