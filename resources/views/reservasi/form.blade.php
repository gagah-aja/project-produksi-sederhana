<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Reservasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 30px 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #007BFF;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            text-align: center;
            font-weight: bold;
        }

        p[style*="color: green"] {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Form Reservasi Makanan</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/reservasi">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Jenis Makanan:</label>
        <input type="text" name="makanan" required>

        <label>Jumlah:</label>
        <input type="number" name="jumlah" min="1" required>

        <label>Tanggal Reservasi:</label>
        <input type="date" name="tanggal" required>

        <button type="submit">Kirim Reservasi</button>
    </form>
</body>
</html>
