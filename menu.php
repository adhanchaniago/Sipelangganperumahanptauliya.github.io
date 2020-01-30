<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
<style type="text/css">
    .navbar-inverse {
    background-color: #1B1811;
    font-size:18px;
    }
</style>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="?page=utama">Sistem Informasi Pelanggan Perumahan PT. Aulia Kisaran</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">


                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
				<li><a href="?page=pelanggan&actions=tampil">Data Pembeli</a></li>
				<li><a href="?page=pelanggan&actions=report">Laporan Pembeli</a></li>
                <li><a href="?page=user&actions=tampil">User</a></li>


                <?php } ?>

                <li><a href="?page=about&actions=tampil">About</a></li>
                <li><a href="?page=kontak&actions=tampil">Login</a></li>


                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
