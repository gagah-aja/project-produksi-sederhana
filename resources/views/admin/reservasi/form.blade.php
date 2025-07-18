<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Reservasi</title>
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
            background-color: #25D366;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #1ebe5d;
        }

        p {
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Reservasi Makanan</h1>

    <form onsubmit="kirimWhatsApp(event)">
        <label>Nama:</label>
        <input type="text" id="nama" required>

        <label>Jenis Makanan:</label>
        <input type="text" id="makanan" required>

        <label>Jumlah:</label>
        <input type="number" id="jumlah" min="1" required>

        <label>Tanggal Reservasi:</label>
        <input type="date" id="tanggal" required>

        <button type="submit">Kirim via WhatsApp</button>
    </form>

    <script>
        function kirimWhatsApp(event) {
            event.preventDefault();

            const nama = document.getElementById("nama").value;
            const makanan = document.getElementById("makanan").value;
            const jumlah = document.getElementById("jumlah").value;
            const tanggal = document.getElementById("tanggal").value;

            const nomorWA = "6283172177445"; // Ganti dengan nomor admin tanpa tanda +, misal: 62812xxxxxxx

            const pesan = `Halo, saya ingin reservasi makanan:\n\n` +
                          `Nama: ${nama}\n` +
                          `Makanan: ${makanan}\n` +
                          `Jumlah: ${jumlah}\n` +
                          `Tanggal: ${tanggal}\n`;

            const url = `https://wa.me/${nomorWA}?text=${encodeURIComponent(pesan)}`;
            window.open(url, "_blank");
        }
    </script>
</body>
</html>
