<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .guestbook-form {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .guestbook-form h2 {
            color: #333333;
            text-align: center;
            margin-bottom: 20px;
        }
        .guestbook-form label {
            display: block;
            margin-bottom: 10px;
        }
        .guestbook-form input[type="text"],
        .guestbook-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }
        .guestbook-form textarea {
            height: 100px;
        }
        .guestbook-form input[type="submit"] {
            background-color: blue;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .guestbook-form input[type="submit"]:hover {
            background-color: darkblue;
        }
        .comment {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .comment p {
            color: #333333;
            line-height: 1.6;
        }
        .comment .author {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .comment .date {
            font-size: 12px;
            color: #666666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="guestbook-form">
            <h2>Tinggalkan Pesan</h2>
            <form action="proses_pesan.php" method="POST">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="message">Pesan:</label>
                <textarea name="message" id="message" required></textarea><br>
                <input type="submit" value="Kirim Pesan">
            </form>
        </div>
        <div class="comment">
            <p class="author">Sarah Khoirunnisa</p>
            <p class="date">12 April 2003</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod felis ac malesuada aliquet.</p>
        </div>
    </div>
    <div style="text-align:center; background-color:black; color:white" class="footer">
        Copyright @sarah - 2024
    </div>    
</body>
</html>
