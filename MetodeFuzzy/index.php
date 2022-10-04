<html>

<head>
    <title>Implementasi Penerapan Metode Fuzzy</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body style="text-align: center;">
    <div class="container">
        <!-- NAVIGATION BAR -->
        <div class="container-navbar">
            <ul class="ul-navbar">
                <li class="li-navbar">
                    <a href="#" class="a-navbar">Penerapan Lozika Fuzzy dalam Menentukan Range Nilai Terbaik</a>
                </li>
            </ul>
        </div>
        <!-- NAVIGATION BAR SELESAI -->

        <div>
            <h1 class="judul">MATA KULIAH <br>"Sistem Pendukung Keputusan"</h1>
            <form method="post" action="">
                <input type="number" name="input" placeholder="Masukan Rate Angka 1-100" required="">
                <input type="submit" name="submit" value="submit">
            </form>
            <br>
            <h2 class="judul2">Hasil Logika Fuzzy</h2>
            <?php
            if (isset($_POST['submit'])) {
                $input = $_POST['input'];
                echo "ANGKA YANG DIMASUKAN ADALAH : <b>", ($input), "<br>";
                if ($input >= 80 and $input <= 100) {
                    echo "BAGUS BANGET PARAH";
                } elseif ($input >= 68 and $input <= 79) {
                    echo "STANDAR";
                } elseif ($input >= 55 and $input <= 67) {
                    echo "LUMAYAN LAH";
                } elseif ($input >= 45 and $input <= 54) {
                    echo "SUDAH PARAH";
                } elseif ($input >= 0 and $input <= 44) {
                    echo "PARAH SI BANGET";
                }
            }
            ?>
        </div>
</body>

</html>