        // SCRIPT COUNT UP
        document.addEventListener("DOMContentLoaded", () => {
            // --- Fungsi khusus Peserta Didik ---
            function countPesertaDidik() {
                const el = document.getElementById("pesertaDidik");
                const target = +el.getAttribute("data-target");
                let count = 0;
                const step = 8; // loncat per 5
                const delay = 10; // jeda tiap update (ms)
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
                    const target = +counter.getAttribute("data-target");
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