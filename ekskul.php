<?php include "header.php" ?>
<section> <!-- SECTION EKSKUL -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mt-3 text-center">Ekstrakulikuler</h3>
                <div class="row">
                    <?php
                    $cards = [
                        [
                            "title" => "PKS",
                            "image" => "image/pks.png",
                            "link" => "#"
                        ],
                        [
                            "title" => "PLH",
                            "image" => "image/plh.png",
                            "link" => "#"
                        ],
                        [
                            "title" => "PMR",
                            "image" => "image/pmr.png",
                            "link" => "#"
                        ],
                        [
                            "title" => "Perisai Diri",
                            "image" => "image/pd.jpg",
                            "link" => "#"
                        ],
                        [
                            "title" => "Pramuka",
                            "image" => "image/pramuka.png",
                            "link" => "#"
                        ],
                        [
                            "title" => "Pasbibra",
                            "image" => "image/paskibra.png",
                            "link" => "#"
                        ],
                        [
                            "title" => "ITClub",
                            "image" => "image/itclub.png",
                            "link" => "#"
                        ],
                        [
                            "title" => "English Club",
                            "image" => "image/englishclub.png",
                            "link" => "#"
                        ]
                    ];
                    ?>
                    <?php foreach ($cards as $card): ?>
                        <div class="col-lg-3">
                            <div class="card text-center border-0">
                                <div class="card-header">
                                    <h4><?= $card['title']; ?></h4>
                                </div>
                                <img src="<?= $card['image']; ?>" class="w-50 h-25 img-fluid mx-auto d-block my-3">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section> <!-- TUTUP SECTION EKSKUL -->


<?php include "footer.php" ?>