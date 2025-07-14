<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Reservasi</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        th, td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        @media (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            th {
                position: sticky;
                top: 0;
            }

            tr {
                margin-bottom: 15px;
            }

            td {
                padding: 10px;
                text-align: right;
                position: relative;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                font-weight: bold;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <h1>Daftar Reservasi</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Makanan</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Dibuat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $r)
                <tr>
                    <td data-label="Nama">{{ $r->nama }}</td>
                    <td data-label="Makanan">{{ $r->makanan }}</td>
                    <td data-label="Jumlah">{{ $r->jumlah }}</td>
                    <td data-label="Tanggal">{{ $r->tanggal }}</td>
                    <td data-label="Dibuat">{{ $r->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
