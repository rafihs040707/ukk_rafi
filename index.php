<head>
    <title>SMKN 4 Tasikmalaya</title>
</head>

<?php include "header.php" ?>

<div class="container">
    <section> <!-- SECTION BERITA -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-3 mt-3 text-center">Berita</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <img src="image/5.JPG" alt="" class="w-100 h-50">
                            </div>
                            <div class="card-body">
                                <h3>Siswa mendapatkan sepeda gunung</h3>
                                <a href="#" class="btn btn-primary link-info text-white">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <img src="image/6.JPG" alt="" class="w-100 h-50">
                            </div>
                            <div class="card-body">
                                <h3>Siswa mendapatkan sepeda gunung</h3>
                                <a href="#" class="btn btn-primary link-info text-white">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- TUTUP SECTION BERITA -->

    <section> <!-- SECTION GALERI -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-3 mt-3 text-center">Galeri</h3>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="image/1.JPG" alt="" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="image/2.JPG" alt="" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="image/3.JPG" alt="" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0">
                            <div class="card-body">
                                <img src="image/4.JPG" alt="" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-4">
                        <a href="" class="btn btn-primary link-info text-white">Intip Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- TUTUP SECTION GALERI -->

    <section> <!-- SECTION STATISTIK -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Statistik</h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card text-center border-0 bg-primary text-white">
                        <div class="card-body">
                            <!-- khusus peserta didik -->
                            <h3 id="pesertaDidik" data-target="1500">0</h3>
                            Peserta Didik
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center border-0 bg-primary text-white">
                        <div class="card-body">
                            <h3 class="count-up" data-target="100">0</h3>
                            Guru
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center border-0 bg-primary text-white">
                        <div class="card-body">
                            <h3 class="count-up" data-target="45">0</h3>
                            Rombel
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center border-0 bg-primary text-white">
                        <div class="card-body">
                            <h3 class="count-up" data-target="5">0</h3>
                            Program Keahlian
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- TUTUP SECTION STATISTIK -->

<!-- SCRIPT COUNT UP -->
<script>
document.addEventListener("DOMContentLoaded", () => {
    // --- Fungsi khusus Peserta Didik ---
    function countPesertaDidik() {
        const el = document.getElementById("pesertaDidik");
        const target = +el.getAttribute("data-target");
        let count = 0;
        const step = 8;    // loncat per 5
        const delay = 10;  // jeda tiap update (ms)

        const interval = setInterval(() => {
            count += step;
            if (count >= target) {
                el.innerText = target;
                clearInterval(interval);
            } else {
                el.innerText = count;
            }
        }, delay);
    }

    // --- Fungsi umum untuk yang lain ---
    function countGeneral() {
        const counters = document.querySelectorAll(".count-up");
        counters.forEach(counter => {
            const target   = +counter.getAttribute("data-target");
            let count = 0;
            const duration = 2000; // 2 detik
            const stepTime = Math.max(Math.floor(duration / target), 20);

            const interval = setInterval(() => {
                count++;
                if (count >= target) {
                    counter.innerText = target;
                    clearInterval(interval);
                } else {
                    counter.innerText = count;
                }
            }, stepTime);
        });
    }

    // Jalankan
    countPesertaDidik();
    countGeneral();
});
</script>



<?php include "footer.php" ?>