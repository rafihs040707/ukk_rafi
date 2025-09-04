<?php
include "header.php";
include "config.php";
?>

<section> <!-- SECTION EKSKUL -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mt-3 text-center">Ekstrakulikuler</h3>
                <!-- Form Pencarian -->
                <form class="d-flex justify-content-start mb-4 my-3" method="GET" action="">
                    <input class="form-control w-25 me-2" type="search" name="keyword"
                        placeholder="Cari Ekstrakulikuler..."
                        value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : ''; ?>">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </form>
                <?php
                $search = $_GET['keyword'] ?? '';
                if (!empty($search)) {
                    $stmt = $conn->prepare("SELECT * FROM ekskul WHERE title ILIKE :search");
                    $stmt->execute(['search' => "%$search%"]);
                } else {
                    $stmt = $conn->query("SELECT * FROM ekskul");
                }
                $cards = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if (count($cards) === 0) {
                    echo "<div class='alert alert-danger text-center mt-3'>Data Tidak Ditemukan</div>";
                }
                ?>
                <div class="row">
                    <?php foreach ($cards as $card): ?>
                        <div class="col-lg-3 mb-3">
                            <div class="card text-center border-0">
                                <div class="card-header">
                                    <h4><?= htmlspecialchars($card['title']); ?></h4>
                                </div>
                                <img src="<?= htmlspecialchars($card['image']); ?>"
                                    class="w-50 h-25 img-fluid mx-auto d-block my-3">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>