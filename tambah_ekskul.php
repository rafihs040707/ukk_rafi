<?php include "config.php"; ?>
<?php include "header.php"; ?>

<div class="container mt-5">
    <h3 class="mb-3">Tambah Ekstrakurikuler</h3>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Nama Ekstrakurikuler</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Upload Gambar</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Link (opsional)</label>
            <input type="text" name="link" class="form-control" value="#">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $link = $_POST['link'] ?? '#';

    // folder upload
    $uploadDir = "uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // ambil file gambar
    $fileName = basename($_FILES["image"]["name"]);
    $targetFile = $uploadDir . uniqid() . "_" . $fileName;

    // validasi file
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            // simpan ke database (path gambar)
            $stmt = $conn->prepare("INSERT INTO ekskul (title, image, link) VALUES (:title, :image, :link)");
            $stmt->execute([
                'title' => $title,
                'image' => $targetFile,
                'link'  => $link
            ]);

            echo "<div class='alert alert-success text-center mt-3'>Data berhasil ditambahkan!</div>";
        } else {
            echo "<div class='alert alert-danger text-center mt-3'>Gagal upload gambar.</div>";
        }
    } else {
        echo "<div class='alert alert-warning text-center mt-3'>Format gambar tidak valid (hanya jpg, jpeg, png, gif).</div>";
    }
}
?>

<?php include "footer.php"; ?>
