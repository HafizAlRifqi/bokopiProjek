<?php

$conn = mysqli_connect("localhost", "root", "", "db_bokopi");

$status = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai input dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $hari = $_POST["hari"];
    $pesan = $_POST["pesan"];

    // Memasukkan data ke dalam tabel
    $query = "INSERT INTO booking VALUES ('', '$nama', '$email', '$hari', '$pesan')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $status = "Data berhasil disimpan!";
    } else {
        $status = "Terjadi kesalahan. Data tidak berhasil disimpan.";
    }

}

// Menampilkan data yang sudah tersimpan
$query = "SELECT * FROM booking";
$result = mysqli_query($conn, $query);



?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bokopi</title>

    <!-- SWIPER -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- Font Awesome CDN Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS File Link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#" class="logo">Bokopi <i class="fas fa-mug-hot"></i></a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#dataBook">dataBook</a>
            <a href="#book">book</a>
        </nav>

        <a href="#book" class="btn">book a table</a>
    </header>

    <!-- HOME -->
    <section class="home" id="home">
        <div class="row">
            <div class="content">
                <h3>
                    Rasakan Kedalaman Rasa dalam Setiap Tetes Bokopi</h3>
                <a href="#menu" class="btn">beli sekarang</a>
            </div>

            <div class="image">
                <img src="image/home-img-1.png" class="main-home-image" alt="">
            </div>
        </div>

        <div class="image-slider">
            <img src="image/home-img-1.png" alt="">
            <img src="image/home-img-2.png" alt="">
            <img src="image/home-img-3.png" alt="">
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about" id="about">
        <h1 class="heading">about us<span>why choose us</span></h1>

        <div class="row">
            <div class="image">
                <img src="image/hapis.jpg" alt="">
            </div>

            <div class="content">
                <h3 class="title">Apa Yang Membuat Kopi Kami Spesial!</h3>
                <p>Bokopi, brand kopi yang tak tergantikan. Setiap biji kopi dipilih dengan cermat dan diproses secara
                    ahli untuk menciptakan pengalaman minum kopi yang tak terlupakan. Kami menghargai kualitas dan
                    kepuasan pelanggan, dan mengundang Anda untuk menikmati perjalanan indrawi yang menghadirkan
                    kegembiraan dan kegembiraan di setiap cangkir kopi. Dengan Bokopi Anda akan menemukan harmoni yang
                    sempurna antara keaslian, kualitas, dan kepuasan total.</p>
                <div class="icons-container">
                    <div class="icons">
                        <img src="image/about-icon-1.png" alt="">
                        <h3>Kualitas Kopi Terbaik</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-2.png" alt="">
                        <h3>Brand Yang Terkenal</h3>
                    </div>
                    <div class="icons">
                        <img src="image/about-icon-3.png" alt="">
                        <h3>Pengiriman Gratis</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MENU -->
    <section class="menu" id="menu">
        <h1 class="heading">our menu <span>Best Seller</span></h1>

        <div class="box-container">
            <a href="#" class="box">
                <img src="image/menu-1.png" alt="">
                <div class="content">
                    <h3>Kopi Latte</h3>
                    <p>Nikmati Kelembutan Rasa dengan Kopi Latte, Setiap Tetesnya Merupakan Kehangatan yang Menggugah
                    </p>
                    <span>Rp42.000</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-2.png" alt="">
                <div class="content">
                    <h3>Kopi Tubruk Meses</h3>
                    <p>Rasakan Keajaiban Sederhana dalam Setiap Tetes Kopi Tubruk, Kehangatan yang Membahagiakan</p>
                    <span>Rp22.000</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-3.png" alt="">
                <div class="content">
                    <h3>Kopi Love Latte</h3>
                    <p>Nikmati Kelembutan Rasa Kopi Latte Dengan Cinta, Di Setiap Tetesnya Merupakan Kehangatan yang
                        Menggugah</p>
                    <span>Rp42.000</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-4.png" alt="">
                <div class="content">
                    <h3>Kopi Mocha</h3>
                    <p>Nikmati Paduan Sempurna Antara Cokelat Penuh Kenikmatan dan Kopi yang Lezat dengan Mocha Sensasi
                    </p>
                    <span>Rp38.000</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-5.png" alt="">
                <div class="content">
                    <h3>Kopi Luwak</h3>
                    <p>Kopi Luwak: Keajaiban Rasa yang Langka, Menyentuh Lidah, Membuat Anda Terpesona!</p>
                    <span>Rp22.000</span>
                </div>
            </a>

            <a href="#" class="box">
                <img src="image/menu-6.png" alt="">
                <div class="content">
                    <h3>Kopi Cappuccino</h3>
                    <p>Cappuccino: Kesempurnaan Dalam Setiap Seduhan, Rasakan Kenikmatan Tiada Tanding!</p>
                    <span>Rp40.000</span>
                </div>
            </a>
        </div>
    </section>

    <!-- dataBook -->
    <section class="dataBook" id="dataBook">
        <h1 class="heading">booking<span>data pelanggan</span></h1>

        <section class="dataBook" id="dataBook">

            <?php if ($status): ?>
                <script>alert("<?php echo $status; ?>");</script>
            <?php endif; ?>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Hari</th>
                        <th>Pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i = 1 ?>
                        <?php if ($result && mysqli_num_rows($result) > 0): ?>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td>
                                    <?= $i ?>
                                </td>
                                <td>
                                    <?php echo $row["nama"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["email"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["hari"]; ?>
                                </td>
                                <td>
                                    <?php echo $row["pesan"]; ?>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3">Tidak ada data yang tersimpan.</td>
                        </tr>
                    <?php endif; ?>
                    </tr>
                </tbody>
            </table>
        </section>
    </section>

    <!-- BOOK -->
    <section class="book" id="book">
        <h1 class="heading">booking <span>Booking Meja</span></h1>

        <form action="" method="post">
            <input type="text" name="nama" id="nama" placeholder="Nama" class="box">
            <input type="email" name="email" id="email" placeholder="Email" class="box">
            <input type="date" name="hari" id="hari" placeholder="Hari" class="box">
            <input type="text" name="pesan" id="pesan" placeholder="pesan" class="box">
            <input type="submit" value="submit" class="btn">
        </form>
    </section>

    <!-- FOOTER -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Cabang Kami</h3>
                <a href="#"><i class="fas fa-arrow-right"></i> Bogor</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Bandung</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Jakarta</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Jogjakarta</a>
                <a href="#"><i class="fas fa-arrow-right"></i> Bali</a>
            </div>

            <div class="box">
                <h3>Halaman Cepat</h3>
                <a href="#home"><i class="fas fa-arrow-right"></i> home</a>
                <a href="#about"><i class="fas fa-arrow-right"></i> about</a>
                <a href="#menu"><i class="fas fa-arrow-right"></i> menu</a>
                <a href="#dataBook"><i class="fas fa-arrow-right"></i> dataBook</a>
                <a href="#book"><i class="fas fa-arrow-right"></i> book</a>
            </div>

            <div class="box">
                <h3>Kontak info</h3>
                <a href="#"><i class="fas fa-phone"></i> +62-555-333-888</a>
                <a href="#"><i class="fas fa-phone"></i> +62-111-666-444</a>
                <a href="#"><i class="fas fa-envelope"></i> bokopikopi@gmail.com</a>
                <a href="#"><i class="fas fa-envelope"></i> Indonesia, Bogor</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
            </div>
        </div>

        <div class="credit">Copyright - <span>Hafiz Al Rifqi</span> | Projek Coffe Shop</div>
    </section>

    <!-- SWIPER -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Custom JS File Link  -->
    <script src="js/script.js"></script>

</body>

</html>