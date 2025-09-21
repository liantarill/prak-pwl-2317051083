<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        body {
            font-family: "Trebuchet MS", Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 40px 20px;
            min-height: 100vh;
            background-image: url(/background.jpg);
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            max-width: 500px;
            width: 100%;
        }

        .foto {
            margin-bottom: 30px;
        }

        .foto img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid rgba(255, 255, 255, 0.3);
        }



        table {
            margin: 0 auto;
            border-spacing: 0px 15px;
            font-size: 18px;
            width: 100%;
        }

        tr {
            border-radius: 15px;
        }


        td {
            padding: 15px 20px;
        }

        td:first-child,
        td:nth-child(2),
        td:last-child {
            background: #2d343a;
            opacity: 0.9;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ecf0f1;
        }


        td:first-child {
            font-weight: bold;
            text-align: left;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        td:nth-child(2) {
            font-weight: bold;
            width: 20px;
            text-align: center;
        }

        td:last-child {
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="foto">
            <img src="/profile.jpg" alt="Foto Profil">
        </div>

        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $nama }}</td>
            </tr>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td>{{ $npm }}</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>{{ $kelas }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
