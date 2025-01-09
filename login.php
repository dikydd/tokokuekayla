<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f3f4f6;
            color: #333;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background: #ffffff;
            color: #333;
            padding: 20px;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #444;
        }

        .form-section {
            margin-bottom: 20px;
        }

        .form-section label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-section input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .jmlh {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .payment-method {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 20px;
        }

        .method-card {
            flex: 1 1 calc(50% - 12px);
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 10px;
            cursor: pointer;
            background-color: #f9f9f9;
            transition: 0.3s;
        }

        .method-card:hover {
            background-color: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }

        .method-card.selected {
            background-color: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }

        button {
            width: 100%;
            padding: 15px;
            background: #4CAF50;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background: #45a049;
        }

        .mtd {
          width: 277px;
          height: 182px;
        }
    </style>
    <script>
        function selectMethod(id) {
            const cards = document.querySelectorAll('.method-card');
            cards.forEach(card => card.classList.remove('selected'));
            document.getElementById(id).classList.add('selected');
            document.getElementById('metode_pembayaran').value = id;
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Metode Pembayaran</h1>
        <form action="kayla.php" method="POST">
            <!-- Input Nama -->
            <div class="form-section">
                <label for="nama">Nama Pelanggan</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
            </div>

            <!-- Input Jumlah -->
            <div class="form-section">
                <label for="jumlah">Jumlah Pembayaran</label>
                <input class="jmlh" id="jumlah" name="jumlah" placeholder="Masukkan jumlah pembayaran" required>
            </div>

            <!-- Pilihan Metode Pembayaran -->
            <div class="form-section">
                <label>Metode Pembayaran</label>
                <div class="payment-method">
                    <div id="BRI" class="method-card" onclick="selectMethod('BRI')">
                        <img class="mtd" src="gmb/BRI.png" alt="BRI"><br>
                        BRI
                    </div>
                    <div id="Mandiri" class="method-card" onclick="selectMethod('Mandiri')">
                        <img class="mtd" src="gmb/MANDIRI.png" alt="Mandiri"><br>
                        Mandiri
                    </div>
                    <div id="DANA" class="method-card" onclick="selectMethod('DANA')">
                        <img class="mtd" src="gmb/DANA.png" alt="DANA"><br>
                        DANA
                    </div>
                    <div id="OVO" class="method-card" onclick="selectMethod('OVO')">
                        <img class="mtd" src="gmb/OVO.png" alt="OVO" ><br>
                        OVO
                    </div>
                </div>
                <input type="hidden" id="metode_pembayaran" name="metode_pembayaran" required>
            </div>

            <button type="submit">Lanjutkan Pembayaran</button>
        </form>
    </div>
</body>
</html>


