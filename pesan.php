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
        .contact-form {
            margin-top: 50px;
            text-align: center;
        }
        .contact-form input[type="text"],
        .contact-form textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        .contact-form textarea {
            height: 100px;
        }
        .contact-form input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .contact-form input[type="submit"]:hover {
            background-color: darkblue;
        }
        .footer {
            text-align: center;
            background-color: black;
            color: white;
            padding: 10px 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
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

    <div class="contact-form">
        <h2>Kirim Pesan</h2>
        <form action="proses_pesan.php" method="POST">
            <input type="text" name="nama" placeholder="Nama Anda" required><br>
            <input type="text" name="email" placeholder="Email Anda" required><br>
            <textarea name="pesan" placeholder="Pesan Anda" required></textarea><br>
            <input type="submit" value="Kirim Pesan">
        </form>
    </div>

    <div class="footer">
        <p>Copyright @dono - 2024</p>
    </div>        
</body>
</html>
