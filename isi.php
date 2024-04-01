<div style="height:300px">
    <!-- Halaman Depan -->
    <?php
    // Check if 'hal' key exists in $_GET array
    if(isset($_GET['hal'])) {
        $hal = $_GET['hal'];
        $menu_bawah = array(
            'produk' => 'produk.php', 
            'pesan' => 'pesan.php',
            'home' => 'home.php', 
            'galeri' => 'galeri.php',
            'gesbuk' => 'gesbuk.php',
        );

        if(array_key_exists($hal, $menu_bawah)) {
            include_once $menu_bawah[$hal];
        } else {
            echo "Halaman tidak ditemukan"; 
        }
    } else {
        include_once "home.php";
    }
    ?>
</div>
