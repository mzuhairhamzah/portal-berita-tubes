<?php
include 'header.php';
// $kode = $mysqli->real_escape_string($_GET['id']);
// 		$kategori = $mysqli->real_escape_string($_POST['kategori']);
// 		$edit_sql = "UPDATE kategori SET kategori = '$kategori' WHERE id_kategori = '$kode'";
// 		$edit_qry = $mysqli->query($edit_sql);


// 		if ($edit_qry) {
// 			echo "<script>alert('Data Berhasil Diperbarui'); window.location = 'kategori.php'</script>";
// 		} else {
// 			echo "Gagal mengupdate data" . $mysqli->error;
// 		}

if (isset($_GET['id'])) {
    $kode = $mysqli->real_escape_string($_GET['id']);

    // Jika form pengeditan disubmit
    if (isset($_POST['edit_btn'])) {
        $kategori_baru = $mysqli->real_escape_string($_POST['kategori']);

        // Update kategori
        $edit_sql = "UPDATE kategori SET kategori = '$kategori_baru' WHERE id_kategori = '$kode'";
        $edit_qry = $mysqli->query($edit_sql);

        if ($edit_qry) {
            echo "<script>alert('Data Berhasil Diperbarui'); window.location = 'kategori.php'</script>";
        } else {
            echo "Gagal mengupdate data: " . $mysqli->error;
        }
    }

    // Ambil data kategori berdasarkan ID
    $kat_sql = "SELECT kategori FROM kategori WHERE id_kategori='" . $kode . "'";
    $kat_qry = $mysqli->query($kat_sql);
    $kat = $kat_qry->fetch_assoc();
} else {
    // Redirect jika ID kategori tidak ditemukan
    header('location: kategori.php');
    exit;
}
?>

<div class="container-fluid body">
    <div class="row">
        <div class="col-lg-2 sidebar">
            <?php include 'sidebar.php'; ?>
        </div>
        <div class="col-lg-10 main-content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="page-header"><i class="fa fa-folder-o"></i> Edit Kategori:
                                <strong><?php echo $kat['kategori']; ?></strong>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="kategori_baru">Nama Kategori Baru</label>
                                    <input type="text" class="form-control" name="kategori_baru" value="<?php echo $kat['kategori']; ?>">
                                </div>
                                <div class="form-group">
                                    <a class="btn btn-danger btn-sm" href="kategori.php"><i class="fa fa-times"></i>
                                        Batal</a>
                                    <button class="btn btn-primary btn-sm" name="edit_btn" type="submit">
                                        <i class="fa fa-check"></i> Simpan Perubahan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>