<!DOCTYPE html>
<html lang="id">
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kayla.css">
    <title>Kue Kayla</title>
</head>
<body class="bd1">
    <header>
        <img src="gmb/logo.png" alt="Logo">
        <span>KUE KAYLA</span>
    </header>
    <div class="menu-section">
        <h2>MENU</h2><br>
        <span class="slg" style="padding: 20px;font-size: 40px;font-weight: bold;">SERBA 12K</span>
        <div class="menu-grid">
            <?php
            $menu = [
                ["Lemper Abon", "gmb/lmp-509167547.webp"],
                ["Klepon", "gmb/klepon.jpg"],
                ["Pastel Sayur", "gmb/pastel.jpg"],
                ["Combro", "gmb/combro.jpg"],
                ["Roti Goreng", "gmb/Roti Goreng.jpg"],
                ["Donat Goreng", "gmb/donat.jpg"],
                ["Kue Lapis", "gmb/kue lapis.jpeg"],
                ["Nagasari", "gmb/Nagasari.jpg"],
                ["Sagu Mutiara", "gmb/sagu mutiara.jpg"],
                ["Kue Bugis", "gmb/kue bugis.jpg"],
                ["Arem Arem", "gmb/arem arem.jpg"],
                ["Putu Ayu", "gmb/putu ayu.webp"],
                ["Nona Manis", "gmb/nona manis.webp"], // Item baru
                ["Dadar Gulung", "gmb/dadar gulung.jpg"], // Item baru
                ["Pie Buah Mini", "gmb/pie buah.jpg"], // Item baru
                ["Surabi", "gmb/surabi.jpg"] // Item baru
            ];

            foreach ($menu as $item) {
                echo "<div class='menu-item'>
                        <img src='{$item[1]}' alt='{$item[0]}'>
                        <h3>{$item[0]}</h3>
                        <select>
                            <option value='0'>0</option>
                            <option value='1'>1 Lusin</option>
                            <option value='2'>2 Lusin</option>
                            <option value='3'>3 Lusin</option>
                            <option value='4'>4 Lusin</option>
                            <option value='5'>5 Lusin</option>
                        </select>
                    </div>";
            }
            ?>
        </div>
    </div>

    <div class="menu-favorit">
        <p>MENU FAVORIT</p>
        <div class="container">
            <div class="item">
                <img src="gmb/ss.jpg" alt="Kue Sus">
                <h2>Kue Sus dengan Kream yang Lembut</h2>
                <p>Nikmati kue sus yang lembut dan manis dengan harga yang murah meriah</p>
                <select>
                    <option value="0">0</option>
                    <option value="1">1 Lusin</option>
                    <option value="2">2 Lusin</option>
                    <option value="3">3 Lusin</option>
                    <option value="4">4 Lusin</option>
                    <option value="5">5 Lusin</option>
                    <option value="6">6 Lusin</option>
                </select>
            </div>
            <div class="item">
                <img src="gmb/bolu kukus.webp" alt="Bolu Kukus">
                <h2>Bolu Kukus dengan Berbagai Varian Warna</h2>
                <p>Bolu Kukus beragam warna cocok untuk berbagai acara</p>
                <select>
                    <option value="0">0</option>
                    <option value="1">1 Lusin</option>
                    <option value="2">2 Lusin</option>
                    <option value="3">3 Lusin</option>
                    <option value="4">4 Lusin</option>
                    <option value="5">5 Lusin</option>
                    <option value="6">6 Lusin</option>
                </select>
            </div>
            <div class="item">
                <img src="gmb/risol.jpg" alt="Risol">
                <h2>Risol renyah dengan Mayonaise yang gurih</h2>
                <p>Nikmati gurihnya Risol Mayonaise dengan isi yang melimpah, cocok untuk camilan</p>
                <select>
                    <option value="0">0</option>
                    <option value="1">1 Lusin</option>
                    <option value="2">2 Lusin</option>
                    <option value="3">3 Lusin</option>
                    <option value="4">4 Lusin</option>
                    <option value="5">5 Lusin</option>
                    <option value="6">6 Lusin</option>
                </select>
            </div>
        </div>
    </div>

    <div class="pesan-section">
        <button onclick="showLoginPopup()">Pesan</button>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="login-popup" id="loginPopup">
        <span class="close-btn" onclick="closeLoginPopup()">&times;</span>
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
    </div>

    <script>
        function showLoginPopup() {
            document.getElementById('loginPopup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function closeLoginPopup() {
            document.getElementById('loginPopup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
    <style>
        
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


<hr>
<body>
    <div class="main1">
        <p class="tk">TENTANG KAMI</p>
        <h1>JAJANAN HEMAT RASA NIKMAT</h1>
        <p class="text1">Toko ini bernama <span>Kue Kayla</span>,  berdiri sejak tahun <b>2007</b> dan sekarang sudah berjalan lebih dari <b>16 tahun</b>.Didirikan oleh <b>Ibu Yanti</b> dan anaknya <b>Dhea</b>. Toko ini terletak di <i>"jalan Pagar Alam, Tj. Karang Barat, kota Bandar Lampung"</i>. Toko ini juga sebelumnya memiliki cabang di jalan PU, Kedaton, kota Bandar Lampung.</p>
			
			<p class="text1">Toko ini menjajakan berbagai macam kue tradisional dari berbagai daerah. Tentunnya kue-kue tersebut dibuat dengan tangan. Toko Kue Kayla juga merupakan sebuah lapangan pekerja bagi ibu-ibu setempat, mereka biasanya menitipkan kue buatan mereka. Toko ini biasa buka dari jam <b>7 Pagi</b>. Kue-kue yang dijajakan biasanya habis 2 sampai 3 jam dijajakan. Toko kue ini bisa juga menampung pesanan untuk sebuah acara.</p>
	</div>

<footer style="background-color: #333; color: #fff; padding: 20px; font-size: 14px; margin-top: 100px;">
    <div style="max-width: 1200px; margin: 0 auto; text-align: center;">
        <!-- Informasi utama -->
        <div style="margin-bottom: 10px;">
            <span style="font-size: 30px;"><strong>KUE KAYLA</strong></span><br>
            <span style="display: inline-flex; align-items: center; gap: 5px;">
                <a href="https://api.whatsapp.com/send/?phone=088272899622&text&type=phone_number&app_absent=0" target="_blank" style="color: #fff; text-decoration: none; margin: 0 10px;"><i class="fab fa-whatsapp"></i> 
                +62 882-7289-9622</a> 
            </span>
        </div>
        
        <!-- Ikon peta -->
        <div style="margin-bottom: 10px;">
            <a href="https://maps.app.goo.gl/96NQePgwWbXq7sMN7" target="_blank" style="color: #fff; text-decoration: none; margin: 0 10px;">
                <i class="fas fa-map-marker-alt"></i> Temukan Kami
            </a>
        </div>
    </div>
</footer>



</body>
</html>
