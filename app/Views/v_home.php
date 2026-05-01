<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Hero Slider Section -->
<section class="home-slider owl-carousel">
    <!-- Slider 1 -->
    <div class="slider-item" style="background-image: url('<?= base_url() ?>coffee1-1.0.0/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Welcome to Vermata Coffee</span>
                    <h1 class="mb-4">The Best Coffee Experience</h1>
                    <p class="mb-4 mb-md-5">Nikmati secangkir kopi berkualitas dengan cita rasa terbaik.</p>
                    <p>
                        <a href="<?= base_url('/menu') ?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                        <a href="<?= base_url('/menu') ?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider 2 -->
    <div class="slider-item" style="background-image: url('<?= base_url() ?>coffee1-1.0.0/images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Premium Quality</span>
                    <h1 class="mb-4">Fresh & Aromatic Coffee</h1>
                    <p class="mb-4 mb-md-5">Biji kopi pilihan dari berbagai daerah terbaik di Indonesia.</p>
                    <p>
                        <a href="<?= base_url('/menu') ?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                        <a href="<?= base_url('/menu') ?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider 3 -->
    <div class="slider-item" style="background-image: url('<?= base_url() ?>coffee1-1.0.0/images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-8 col-sm-12 text-center ftco-animate">
                    <span class="subheading">Special Offer</span>
                    <h1 class="mb-4">Up to 20% Off for New Members</h1>
                    <p class="mb-4 mb-md-5">Daftar sekarang dan dapatkan diskon spesial untuk pembelian pertama.</p>
                    <p>
                        <a href="<?= base_url('/menu') ?>" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
                        <a href="<?= base_url('/menu') ?>" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Intro / Service Section -->
<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>+62 812-3456-7890</h3>
                            <p>Hubungi kami untuk pemesanan atau reservasi.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>Jakarta Selatan</h3>
                            <p>Jl. Coffee Indah No. 123, Jakarta Selatan</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Open Daily</h3>
                            <p>08:00 - 22:00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book p-4">
                <h3>Reserve a Table</h3>
                <form action="#" class="appointment-form">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" class="form-control appointment_date" placeholder="Date">
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-ios-clock"></span></div>
                                <input type="text" class="form-control appointment_time" placeholder="Time">
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <textarea cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="submit" value="Reserve Now" class="btn btn-white py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url('<?= base_url() ?>coffee1-1.0.0/images/about.jpg');"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
            <div class="heading-section ftco-animate">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">Our Story</h2>
            </div>
            <div>
                <p>Vermata Coffee Shop berdiri sejak tahun 2020 dengan misi menyajikan kopi berkualitas terbaik untuk masyarakat Indonesia. Kami menggunakan biji kopi pilihan dari berbagai daerah seperti Gayo, Toraja, dan Kintamani.</p>
                <p>Dengan barista berpengalaman dan suasana yang nyaman, Vermata Coffee Shop menjadi tempat favorit untuk menikmati kopi, bekerja, atau bersantai bersama teman dan keluarga.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-choices"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Easy to Order</h3>
                        <p>Pemesanan mudah melalui website atau datang langsung ke kafe kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-delivery-truck"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Fastest Delivery</h3>
                        <p>Pengiriman cepat dan gratis untuk area tertentu.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="flaticon-coffee-bean"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Quality Coffee</h3>
                        <p>100% biji kopi pilihan yang di-roasting dengan standar terbaik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter Section -->
<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url('<?= base_url() ?>coffee1-1.0.0/images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="3">0</strong>
                                <span>Coffee Branches</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="10">0</strong>
                                <span>Barista Experts</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="5000">0</strong>
                                <span>Happy Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="25">0</strong>
                                <span>Menu Variants</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Best Seller Products Section -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Discover</span>
                <h2 class="mb-4">Best Seller Coffee</h2>
                <p>Menu kopi terlaris yang paling banyak diminati oleh pelanggan kami.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img" style="background-image: url('<?= base_url() ?>coffee1-1.0.0/images/menu-1.jpg');"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Cappuccino</a></h3>
                        <p>Espresso dengan busa susu yang lembut dan taburan bubuk kayu manis.</p>
                        <p class="price"><span>Rp 28.000</span></p>
                        <p><a href="<?= base_url('/menu') ?>" class="btn btn-primary btn-outline-primary">Order Now</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img" style="background-image: url('<?= base_url() ?>coffee1-1.0.0/images/menu-2.jpg');"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Latte</a></h3>
                        <p>Kombinasi sempurna antara espresso dan susu steamed.</p>
                        <p class="price"><span>Rp 30.000</span></p>
                        <p><a href="<?= base_url('/menu') ?>" class="btn btn-primary btn-outline-primary">Order Now</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img" style="background-image: url('<?= base_url() ?>coffee1-1.0.0/images/menu-3.jpg');"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Espresso</a></h3>
                        <p>Kopi murni dengan rasa kuat dan aroma yang khas.</p>
                        <p class="price"><span>Rp 22.000</span></p>
                        <p><a href="<?= base_url('/menu') ?>" class="btn btn-primary btn-outline-primary">Order Now</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img" style="background-image: url('<?= base_url() ?>coffee1-1.0.0/images/menu-4.jpg');"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">Mocha</a></h3>
                        <p>Perpaduan espresso, coklat, dan susu steamed.</p>
                        <p class="price"><span>Rp 32.000</span></p>
                        <p><a href="<?= base_url('/menu') ?>" class="btn btn-primary btn-outline-primary">Order Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimony Section -->
<section class="ftco-section img" id="ftco-testimony" style="background-image: url('<?= base_url() ?>coffee1-1.0.0/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Testimony</span>
                <h2 class="mb-4">Customers Says</h2>
                <p>Apa kata pelanggan kami tentang pengalaman menikmati kopi di Vermata Coffee Shop.</p>
            </div>
        </div>
    </div>
    <div class="container-wrap">
        <div class="row d-flex no-gutters">
            <div class="col-lg align-self-sm-end ftco-animate">
                <div class="testimony">
                    <blockquote>
                        <p>&ldquo;Kopinya enak, tempatnya nyaman, pelayanannya ramah. Wajib coba Cappuccino-nya!&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="<?= base_url() ?>coffee1-1.0.0/images/person_1.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Budi Santoso <span class="position">Coffee Lover</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end">
                <div class="testimony overlay">
                    <blockquote>
                        <p>&ldquo;Tempat favorit untuk working from cafe. Wi-Fi cepat, banyak colokan, dan kopinya enak!&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="<?= base_url() ?>coffee1-1.0.0/images/person_2.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Ani Wijaya <span class="position">Digital Creator</span></div>
                    </div>
                </div>
            </div>
            <div class="col-lg align-self-sm-end ftco-animate">
                <div class="testimony">
                    <blockquote>
                        <p>&ldquo;Baristanya profesional dan ramah menjelaskan berbagai varian kopi. Recommended!&rdquo;</p>
                    </blockquote>
                    <div class="author d-flex mt-4">
                        <div class="image mr-3 align-self-center">
                            <img src="<?= base_url() ?>coffee1-1.0.0/images/person_3.jpg" alt="">
                        </div>
                        <div class="name align-self-center">Citra Dewi <span class="position">Coffee Enthusiast</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>