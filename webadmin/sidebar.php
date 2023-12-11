<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	.nav-side-menu {
		height: 100%;
		overflow-y: auto;
	}

	.nav-side-menu li {
		padding-top: 35px;
	}

	.nav-side-menu a {
		text-decoration: none;
		color: #fff;
	}

	.nav-side-menu i {
		margin-right: 10px;
	}

	.nav-side-menu a:hover {
		background-color: #555;
		color: #fff;
	}

	.content {
		margin-left: 250px;
		padding: 20px;
	}

	#logout {
		padding-top: 320px;
	}
</style>

<body>

	<ul class="nav nav-side-menu">
		<li><a href="beranda.php"><i class="fa fa-home"></i> Beranda</a></li>
		<li><a href="berita.php"><i class="fa fa-newspaper-o"></i> Berita</a></li>
		<li><a href="kategori.php"><i class="fa fa-folder-o"></i> Kategori</a></li>
		<li><a href="profil.php"><i class="fa fa-user"></i> Profil</a></li>
		<li><a href="buku-tamu.php"><i class="fa fa-book"></i> Buku Tamu</a></li>
		<li><a href="pesan.php"><i class="fa fa-envelope"></i> Pesan</a></li>
		<li id="logout"><a href="#" data-toggle="modal" data-target="#modal_logout"><i class="fa fa-sign-out"></i>
				Logout</a></li>
	</ul>

</body>

</html>