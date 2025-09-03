<head>
    <title>Galeri - SMKN 4 Tasikmalaya</title>
</head>

<?php include "header.php" ?>

<section> <!-- SECTION GALERI -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-3 mt-3 text-center">Galeri</h3>
                <?php
                $images = [
                    "image/1.JPG",
                    "image/2.JPG",
                    "image/3.JPG",
                    "image/4.JPG",
                    "image/5.JPG",
                    "image/6.JPG",
                    "image/1.JPG",
                    "image/2.JPG"
                ];
                ?>
                <div class="row">
                    <?php foreach ($images as $img): ?>
                        <div class="col-lg-3 mb-4">
                            <div class="card border-0">
                                <div class="card-body p-2">
                                    <img src="<?= $img; ?>" class="w-100 h-50" style="object-fit:cover;">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section> <!-- TUTUP SECTION GALERI -->

<?php include "footer.php" ?>