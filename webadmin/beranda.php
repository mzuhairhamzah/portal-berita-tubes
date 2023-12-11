<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.container-fluid .body {
    height: 100vh;
    /* Full height of the viewport */
}

.col-lg-11 {
    position: relative;
    min-height: 1px;
    padding-right: 0px;
    padding-left: 0px;
    margin: 0;
    margin-bottom: 100px;
}

.col-lg-1 {
    height: 100%;
    overflow-y: auto;
}

.panel-body {
    width: auto;
    height: auto;
    padding: 20px;
}

.big-icon {
    text-align: center;
    margin-bottom: 20px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    transition: transform 0.3s ease-in-out;
}

.big-icon:hover {
    transform: scale(1.02);
}

.icon-link {
    text-decoration: none;
    color: #333;
}

.icon-link:hover {
    color: #007bff;
}
</style>

<body>
    <div class="container-fluid body">
        <div class="row">
            <div class="col-lg-1  sidebar">
                <?php include 'sidebar.php'; ?>
            </div>
            <div class="col-lg-11 main-content">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row-md-10">
                            <div class="col-md-12">
                                <h2 class="page-header">Selamat datang,
                                    <strong><?php echo $_SESSION['nm_admin']; ?></strong>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-sm-20 big-icon">
                                    <a href="berita.php">
                                        <span class="fa fa-newspaper-o fa-5x"></span>
                                        <h4>Berita</h4>
                                    </a>
                                </div>
                                <div class="col-sm-20 big-icon">
                                    <a href="kategori.php">
                                        <span class="fa fa-folder-o fa-5x"></span>
                                        <h4>Kategori</h4>
                                    </a>
                                </div>
                                <div class="col-sm-20 big-icon">
                                    <a href="profil.php">
                                        <span class="fa fa-user fa-5x"></span>
                                        <h4>Profil</h4>
                                    </a>
                                </div>
                                <div class="col-sm-20 big-icon">
                                    <a href="pesan.php">
                                        <span class="fa fa-envelope fa-5x"></span>
                                        <h4>Pesan</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>

</html>