<x-client.layout>

    <header id="hero">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center text-lg-start">
                
                <section class="col-lg-6 animate-on-scroll fade-in-left">
                    <div class="tag">Kelilingi Dunia! 
                        <i class="fas fa-compass fa-rotate-90"></i>
                    </div>
                    <h1 class="header-1 color-text fw-bold mb-0">Jelajahi Dunia Dengan</h1>
                    <h1 class="header-1 color-accent1 fw-bold mb-4">Wonder Of You</h1>
                    
                    <img src="{{ asset('images/HeroImage.png') }}" class="img-fluid d-lg-none hero-img mb-4" alt="Pemandangan danau dan gunung">
                    
                    <p class="body-1 color-text fw-normal mb-4">Jelajahi dunia lebih mudah, aman dan terpercaya dengan Wonder Of You!</p>
                    <a href="#" class="btn btn-secondary">Pesan Sekarang</a>
                </section>

                <section class="col-lg-6 d-none d-lg-block animate-on-scroll fade-in-right">
                    <img src="{{ asset('images/HeroImage.png') }}" class="img-fluid mx-auto d-block hero-img" alt="Pemandangan danau dan gunung">
                </section>

            </div>
        </div>
    </header>

    <section id="partners">
        <div class="container">
            <div class="partners-logos animate-on-scroll fade-in-up">
                <a href="#" target="_blank"><img src="{{ asset('images/Traveloka.png') }}" alt="Traveloka"></a>
                <a href="#" target="_blank"><img src="{{ asset('images/tiket.com.png') }}" alt="Tiket.com"></a>
                <a href="#" target="_blank"><img src="{{ asset('images/Booking.png') }}" alt="Booking.com"></a>
                <a href="#" target="_blank"><img src="{{ asset('images/Tripadvisor.png') }}"alt="Tripadvisor"></a>
                <a href="#" target="_blank"><img src="{{ asset('images/Airbnb.png') }}" alt="Airbnb"></a>
            </div>
        </div>
    </section>

    <div class="dots-decorator">
        <div class="dot dot-blue"></div>
        <div class="dot dot-yellow"></div>
        <div class="dot dot-teal"></div>
    </div>

    <section id="keunggulan">
        <div class="container animate-on-scroll fade-in-up">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="color-accent1 mb-3">Traveling Tanpa Ribet, Liburan Penuh Cerita</h2>
                        <p class="color-text">Nikmati liburan seru tanpa drama. Dari booking sampai perjalanan, semua gampang dan menyenangkan.</p>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-4 col-md-4">
                    <div class="keunggulan-card">
                        <div class="icon-wrapper icon-blue">
                            <img src="{{ asset('images/icon1.png') }}" alt="Ikon Destinasi">
                        </div>
                        <h3 class="color-text">Destinasi Lengkap</h3>
                        <p class="color-text">Dari pesona lokal yang tersembunyi hingga destinasi internasional populer, semua bisa kamu jelajahi.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="keunggulan-card">
                        <div class="icon-wrapper icon-yellow">
                            <img src="{{ asset('images/icon2.png') }}" alt="Ikon Proses Cepat">
                        </div>
                        <h3 class="color-text">Proses Cepat</h3>
                        <p class="color-text">Rencanakan perjalananmu tanpa ribet. Booking mudah, aman, dan praktis hanya dalam beberapa klik.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="keunggulan-card">
                        <div class="icon-wrapper icon-teal">
                            <img src="{{ asset('images/icon3.png') }}" alt="Ikon Terpercaya">
                        </div>
                        <h3 class="color-text">Terpercaya</h3>
                        <p class="color-text">Kami bukan sekadar penyedia jasa, tapi partner perjalananmu. Dengan dukungan resmi dan layanan 24/7.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="dots-decorator">
        <div class="dot dot-blue"></div>
        <div class="dot dot-yellow"></div>
        <div class="dot dot-teal"></div>
    </div>

    <section id="destinasi">
        <div class="container">
            
            <div class="row justify-content-center text-center animate-on-scroll fade-in-up">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="color-accent1">Destinasi Favorit</h2>
                        <p class="color-text">Destinasi paling diminati dengan harga terbaik, siap kamu jelajahi sekarang juga.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 animate-on-scroll fade-in-left">
                    <div class="destinasi-card">
                        <div class="card-img-top-wrapper">
                            <img src="{{ asset('images/kuil.png') }}" alt="Kuil Kuno Osaka">
                        </div>
                        <div class="card-body">
                            <span class="tag-destinasi">Jepang</span>
                            <h3 class="card-title">Kuil Kuno Osaka</h3>
                            <p class="card-date">15 sep - 20 sep 2025</p>
                            <p class="card-price">Rp. 2.000.000</p>
                            <div class="card-rating">
                                <i class="fas fa-star"></i>
                                <span>4.8</span>
                            </div>
                            <a href="#" class="btn btn-detail">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 animate-on-scroll fade-in-left">
                    <div class="destinasi-card">
                        <div class="card-img-top-wrapper">
                            <img src="{{ asset('images/kuil.png') }}" alt="Kuil Kuno Osaka">
                        </div>
                        <div class="card-body">
                            <span class="tag-destinasi">Jepang</span>
                            <h3 class="card-title">Kuil Kuno Osaka</h3>
                            <p class="card-date">15 sep - 20 sep 2025</p>
                            <p class="card-price">Rp. 2.000.000</p>
                            <div class="card-rating">
                                <i class="fas fa-star"></i>
                                <span>4.8</span>
                            </div>
                            <a href="#" class="btn btn-detail">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 animate-on-scroll fade-in-right">
                    <div class="destinasi-card">
                        <div class="card-img-top-wrapper">
                            <img src="{{ asset('images/kuil.png') }}" alt="Kuil Kuno Osaka">
                        </div>
                        <div class="card-body">
                            <span class="tag-destinasi">Jepang</span>
                            <h3 class="card-title">Kuil Kuno Osaka</h3>
                            <p class="card-date">15 sep - 20 sep 2025</p>
                            <p class="card-price">Rp. 2.000.000</p>
                            <div class="card-rating">
                                <i class="fas fa-star"></i>
                                <span>4.8</span>
                            </div>
                            <a href="#" class="btn btn-detail">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 animate-on-scroll fade-in-right">
                    <div class="destinasi-card">
                        <div class="card-img-top-wrapper">
                            <img src="{{ asset('images/kuil.png') }}" alt="Kuil Kuno Osaka">
                        </div>
                        <div class="card-body">
                            <span class="tag-destinasi">Jepang</span>
                            <h3 class="card-title">Kuil Kuno Osaka</h3>
                            <p class="card-date">15 sep - 20 sep 2025</p>
                            <p class="card-price">Rp. 2.000.000</p>
                            <div class="card-rating">
                                <i class="fas fa-star"></i>
                                <span>4.8</span>
                            </div>
                            <a href="#" class="btn btn-detail">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mt-4">
                    <a href="#" class="btn btn-primary-custom">Lihat Selengkapnya <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="dots-decorator">
        <div class="dot dot-blue"></div>
        <div class="dot dot-yellow"></div>
        <div class="dot dot-teal"></div>
    </div>

    <section id="pemesanan">
        <div class="container">
            <div class="row align-items-center justify-content-center ">
                <div class="col-lg-6 me-5 animate-on-scroll fade-in-left">
                    <div class="pemesanan-image-wrapper">
                        <img src="{{ asset('images/Pemesanan.png') }}" class="img-fluid" alt="Langkah-langkah pemesanan yang mudah">
                    </div>
                </div>
                <div class="col-lg-5 animate-on-scroll fade-in-right">
                    <div class="pemesanan-content">
                        <p class="subtitle">Langkah Pemesanan</p>
                        <h2 class="section-title-custom">3 Langkah Mudah Untuk Menjelajah</h2>
                        <div class="dots-decorator-sm justify-content-center">
                            <div class="dot-sm color-blue"></div>
                            <div class="dot-sm color-yellow"></div>
                            <div class="dot-sm color-teal"></div>
                        </div>
                        
                        <ul class="steps-list">
                            <li class="step-item">
                                <div class="step-icon-wrapper color-blue">
                                    <img src="{{ asset('images/icon-destinasi.png') }}" alt="Pilih Destinasi">
                                </div>
                                <div class="step-text">
                                    <h4>Pilih Destinasi</h4>
                                    <p>Temukan tujuan liburan favoritmu, dari lokal hingga internasional.</p>
                                </div>
                            </li>
                            <hr>
                            <li class="step-item">
                                <div class="step-icon-wrapper color-yellow">
                                    <img src="{{ asset('images/icon-jadwal.png') }}" alt="Atur Jadwal">
                                </div>
                                <div class="step-text">
                                    <h4>Atur Jadwal</h4>
                                    <p>Sesuaikan tanggal perjalanan serumu hanya dengan beberapa klik.</p>
                                </div>
                            </li>
                            <hr>
                            <li class="step-item">
                                <div class="step-icon-wrapper color-teal">
                                    <img src="{{ asset('images/icon-perjalanan.png') }}" alt="Nikmati Perjalanan">
                                </div>
                                <div class="step-text">
                                    <h4>Nikmati Perjalanan</h4>
                                    <p>Saatnya berangkat dan ciptakan pengalaman liburan tak terlupakan.</p>
                                </div>
                            </li>
                            <hr>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <div class="dots-decorator">
        <div class="dot dot-blue"></div>
        <div class="dot dot-yellow"></div>
        <div class="dot dot-teal"></div>
    </div>

    <section id="testimoni">
        <div class="container animate-on-scroll fade-in-up">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2 class="color-accent1">Apa Kata Mereka?</h2>
                        <p class="color-text">Dengar langsung cerita seru dari para traveler yang sudah menjelajah bersama kami.</p>
                    </div>
                </div>
            </div>

            <div class="glide-testimoni">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="testimoni-card">
                                <img src="{{ asset('images/user.png') }}" class="avatar" alt="Avatar Dani Kurnia">
                                <h3 class="nama">Dani Kurnia</h3>
                                <p class="kutipan">"Layanannya cepat banget, booking cuma beberapa menit sudah beres. Liburan jadi tenang tanpa ribet."</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="testimoni-card">
                                <img src="{{ asset('images/user.png') }}" class="avatar" alt="Avatar Pengguna">
                                <h3 class="nama">Siti Aisyah</h3>
                                <p class="kutipan">"Pilihan destinasinya banyak dan harganya jujur. Gak ada biaya tersembunyi. Mantap!"</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="testimoni-card">
                                <img src="{{ asset('images/user.png') }}" class="avatar" alt="Avatar Pengguna">
                                <h3 class="nama">Budi Santoso</h3>
                                <p class="kutipan">"Customer service 24/7 sangat membantu waktu ada kendala di perjalanan. Benar-benar terpercaya."</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="testimoni-card">
                                <img src="{{ asset('images/user.png') }}" class="avatar" alt="Avatar Pengguna">
                                <h3 class="nama">Rina Amelia</h3>
                                <p class="kutipan">"Prosesnya mudah dan cepat. Dalam hitungan menit, semua tiket dan hotel sudah siap. Keren!"</p>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="glide__arrows" data-glide-el="controls">
                    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>

                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                    <button class="glide__bullet" data-glide-dir="=3"></button>
                </div>
            </div>
        </div>
    </section>

    <section id="cta">
        <div class="container">
            <div class="row justify-content-center animate-on-scroll fade-in-left">
                <div class="col-lg-8 ">
                    <h2 class="cta-title header-2 mb-3">Jelajahi dunia tanpa batas. Mulai petualanganmu sekarang!</h2>
                    <p class="cta-subtitle body-1">Waktunya wujudkan perjalanan yang selalu kamu tunggu. Jelajahi dunia dengan cara lebih mudah, hemat, dan penuh pengalaman tak terlupakan.</p>
                    <div class="tag">Kelilingi Dunia! 
                        <i class="fas fa-compass fa-rotate-90"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    @push('css')
        @vite(['resources/css/client/pages/home/styles.css'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    @endpush

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new Glide('.glide-testimoni', {
                    type: 'carousel',
                    startAt: 0,
                    perView: 4,
                    gap: 5,
                    autoplay: 3500,
                    hoverpause: true,
                    breakpoints: {
                        1200: { perView: 3},
                        992: { perView: 2 },
                        768: { perView: 1 }
                    }
                }).mount();
            });
            // Animasi On-Scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                    }
                });
            }, {
                threshold: 0.1 
            });

            const elementsToAnimate = document.querySelectorAll('.animate-on-scroll');
            elementsToAnimate.forEach((el) => observer.observe(el));
        </script>
    @endpush
</x-client.layout>