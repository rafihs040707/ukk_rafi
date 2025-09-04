<head>
    <title>SMKN 4 Tasikmalaya</title>
</head>

<?php include "header.php" ?>

<div class="container-fluid">
    <section> <!-- SECTION BERITA -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="my-5 text-center">Berita</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card shadow">
                            <div class="card-header">
                                <img src="image/b1.jpg" alt="" class="w-100 h-50">
                            </div>
                            <div class="card-body">
                                <h6 class="text-end">Kamis, 2 Jan 2025</h6>
                                <h3 class="text-center">SMKN 4 Tasikmalaya menerapkan aturan ketat terhadap kendaraan bermotor</h3>
                                <?php
                                $kondisi = true; // ubah jadi false untuk lihat hasil else

                                if ($kondisi) {
                                    // Kalau kondisi benar, link ke radartasik.com
                                    echo '<a href="https://radartasik.id/2025/01/02/smkn-4-tasikmalaya-terapkan-aturan-ketat-terhadap-kendaraan-bermotor/" target="_blank" class="btn shadow link-body-emphasis text-black">Baca Selengkapnya</a>';
                                } else {
                                    // Kalau kondisi salah, bisa tampilkan link lain / disable
                                    echo '<a href="#" class="btn btn-secondary disabled">Link Tidak Tersedia</a>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card shadow">
                            <div class="card-header">
                                <img src="image/b2.JPG" alt="" class="w-100 h-50">
                            </div>
                            <div class="card-body">
                                <h6 class="text-end">Senin, 7 Okt 2024</h6>
                                <h3 class="text-center">Tujuh Siswa SMKN 4 Tasikmalaya Raih Beasiswa Dari Yayasan Astra Honda Motor</h3>
                                <?php
                                $kondisi = true; // ubah jadi false untuk lihat hasil else

                                if ($kondisi) {
                                    // Kalau kondisi benar, link ke radartasik.com
                                    echo '<a href="https://radartasik.id/2024/10/07/tujuh-siswa-smkn-4-tasikmalaya-raih-beasiswa-dari-yayasan-astra-honda-motor/" target="_blank" class="btn btn-primary shadow link-dark text-white">Baca Selengkapnya</a>';
                                } else {
                                    // Kalau kondisi salah, bisa tampilkan link lain / disable
                                    echo '<a href="#" class="btn btn-secondary disabled">Link Tidak Tersedia</a>';
                                }
                                ?>
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
                <h3 class="my-5 text-center">Galeri</h3>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card border-0">
                            <div class="card-body shadow">
                                <img src="image/1.JPG" alt="" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0">
                            <div class="card-body shadow">
                                <img src="image/2.JPG" alt="" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0">
                            <div class="card-body shadow">
                                <img src="image/3.JPG" alt="" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0">
                            <div class="card-body shadow">
                                <img src="image/4.JPG" alt="" class="w-100 h-50">
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-4">
                        <a href="galeri.php" class="btn btn-primary link-info text-white">Intip Lainnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- TUTUP SECTION GALERI -->

    <section> <!-- SECTION STATISTIK -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center my-5">Statistik</h3>
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center my-5">Program Keahlian</h3>
                    <div class="row align-items-center justify-content-evenly">
                        <div class="col-lg-4 py-3">
                            <div class="card align-items-center text-center shadow">
                                <div class="card-header">
                                <h4>PPLG</h4>
                                <img src="image/pplg.png" class="w-75 h-50 img-fluid mx-auto d-block my-3">
                                </div>
                                <div class="card-body">
                                    <h5>Pengembangan Perangkat Lunak dan Gim</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="card align-items-center text-center shadow">
                                <div class="card-header">
                                <h4>TJKT</h4>
                                <img src="image/tkj.png" class="w-75 h-50 img-fluid mx-auto d-block my-3">
                                </div>
                                <div class="card-body">
                                    <h5>Teknik Jaringan Komputer dan Telekomunikasi</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="card align-items-center text-center shadow">
                                <div class="card-header">
                                <h4>DKV</h4>
                                <img src="image/dkv.png" class="w-100 h-100 img-fluid mx-auto d-block my-3">
                                </div>
                                <div class="card-body">
                                    <h5>Desain Komunikasi Visual</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="card align-items-center text-center shadow">
                                <div class="card-header">
                                <h4>TOI</h4>
                                <img src="image/toi.png" class="w-75 h-50 img-fluid mx-auto d-block my-3">
                                </div>
                                <div class="card-body">
                                    <h5>Teknik Otomasi Industri</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 py-3">
                            <div class="card align-items-center text-center shadow">
                                <div class="card-header">
                                <h4>TBSM</h4>
                                <img src="image/tbsm.png" class="w-50 h-25 img-fluid mx-auto d-block my-3">
                                </div>
                                <div class="card-body">
                                    <h5>Teknik Bisnis dan Sepeda Motor</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="countup.js"></script>
<?php include "footer.php" ?>