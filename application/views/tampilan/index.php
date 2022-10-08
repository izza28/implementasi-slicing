<?php
$this->load->view('tampilan/head');
?>

<body>

    <!-- header section starts  -->
    <?php
    $this->load->view('tampilan/header');
    ?>
    <!-- header section ends -->


    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="content">
            <h6>Temukan teknisi profesional disekitarmu</h6> <br><br>
            <p>Memberi kemudahan untuk Anda memilih teknisi terfavorit disekitar
                untuk melakukan perbaikan dan menggunakan jasa mereka dengan
                menghubungi teknisi langsung dari rumah.</p>
            <a href="#about" class="btn">Cari Tau Kami</a>
        </div>

    </section>
    <!-- home section ends -->


    <!-- about section starts  -->
    <section class="about" id="about">

        <h1 class="heading"> <span>Tentang</span> Kami </h1>

        <div class="row">

            <div class="image">
                <img src="<?= base_url('assets/'); ?>assets/home/layanan.jpg" alt="">
            </div>

            <div class="content">
                <h3>Apa itu Servis-In ??</h3>
                <p>Servis-In merupakan platform yang mempunyai misi sosial untuk menyejahterakan pekerja service dan juga memudahkan konsumen atau pemakai jasa service agar mudah mendapatkan tukang service yang terpercaya. Maka Servis-In hadir untuk menciptakan mobilitas jasa yang mudah, dan praktis. Kami membuat sebuah platform yang menawarkan jasa teknisi terpercaya, mudah, serta pelayanannya yang cepat. Yang mana Servis-In akan menjembatani antara konsumen dan tukang service. Servis-In juga bertujuan untuk mampu mewujudkan sistem keuangan yang tumbuh secara berkelanjutan dan stabil dan mampu melindungi kepentingan konsumen dan juga masyarakat.</p>
                <a href="#" class="btn">Kenali Kami</a>
            </div>

        </div>

    </section>
    <!-- about section ends -->


    <!-- layanan section starts  -->
    <section class="layanan" id="layanan">

        <h1 class="heading"> Layanan <span>Kami</span> </h1>

        <div class="box-container">

            <div class="box ">
                <img class="rounded-circle mb-3" src="<?= base_url('assets/'); ?>assets/pelayanan/konsultasi.png" alt="">
                <h3>Konsultasi</h3>
                <div class="deskripsi">Ingin konsultasi masalah? Konsultasikan masalah dengan teknisi kami</div>
                <a href="#" class="btn">Cari Teknisi</a>
            </div>

            <div class="box">
                <img src="<?= base_url('assets/'); ?>assets/pelayanan/maintenance.png" alt="">
                <h3>Teknisi Mesin</h3>
                <div class="deskripsi">Kendaraan bermasalah? hubungi kami dari mana saja, cari teknisi sekitar</div>
                <a href="#" class="btn">Cari Teknisi</a>
            </div>

            <div class="box">
                <img src="<?= base_url('assets/'); ?>assets/pelayanan/listrik.png" alt="">
                <h3>Teknisi Listrik</h3>
                <div class="deskripsi">Terdapat masalah listrik? Hubungi kami dari mana saja, cari teknisi sekitar</div>
                <a href="#" class="btn">Cari Teknisi</a>
            </div>

            <div class="box">
                <img src="<?= base_url('assets/'); ?>assets/pelayanan/contruksi.png" alt="">
                <h3>Teknisi Bangunan</h3>
                <div class="deskripsi">Terdapat masalah bangunan? Hubungi kami dari mana saja, cari teknisi sekitar</div>
                <a href="#" class="btn">Cari Teknisi</a>
            </div>

            <div class="box">
                <img src="<?= base_url('assets/'); ?>assets/pelayanan/shop.png" alt="">
                <h3>Toko Teknisi</h3>
                <div class="deskripsi">Cari kebutuhan Anda</div>
                <a href="#" class="btn">Kunjungi Toko</a>
            </div>

            <div class="box">
                <a href="#" class="btn" id="next"><input type="image" src="<?= base_url('assets/'); ?>assets/home/right.png" id="img"></a>
                <h4>Lihat Layanan Lainnya</h4>
            </div>


        </div>

    </section>
    <!-- layanan section ends -->


    <!-- Pelatihan section stars -->
    <section class="pelatihan" id="pelatihan">

        <h1 class="heading"> Pelatihan <span>Kami</span> </h1>

        <div class="box-container">

            <div class="box">
                <h3>Pelatihan Teknisi Listrik</h3>
                <div class="image">
                    <img src="<?= base_url('assets/'); ?>assets/pelatihan/teknisi listrik.jpeg" alt="">
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, quos.</p> <br>
                    <a href="#" class="btn">Ikuti Pelatihan</a>
                </div>
            </div>

            <div class="box">
                <h3>Pelatihan Teknisi Ac</h3>
                <div class="image">
                    <img src="<?= base_url('assets/'); ?>assets/pelatihan/teknisiac.jpg" alt="">
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, quos.</p> <br>
                    <a href="#" class="btn">Ikuti Pelatihan</a>
                </div>
            </div>

            <div class="box">
                <h3>Pelatihan Teknisi Mesin</h3>
                <div class="image">
                    <img src="<?= base_url('assets/'); ?>assets/pelatihan/teknisipel.jpeg" alt="">
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, quis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, quos.</p> <br>
                    <a href="#" class="btn">Ikuti Pelatihan</a>
                </div>
            </div>

        </div>

        <div class="container" align="center">
            <a href="#" class="btn" align="center" id="next">Lihat Pelatihan Lainnya</a>
        </div>

    </section>
    <!-- Pelatihan section ends -->


    <!-- review section starts  -->
    <section class="review" id="review">

        <h1 class="heading"> Review <span>Konsumen</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="<?= base_url('assets/'); ?>assets/home/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
                <img src="<?= base_url('assets/'); ?>assets/home/boy.png" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="<?= base_url('assets/'); ?>assets/home/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
                <img src="<?= base_url('assets/'); ?>assets/home/girl.png" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="box">
                <img src="<?= base_url('assets/'); ?>assets/home/quote-img.png" alt="" class="quote">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus aut laborum, nisi quas eaque laudantium consequuntur iste ex aliquam minus vel? Nemo.</p>
                <img src="<?= base_url('assets/'); ?>assets/home/man.png" class="user" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

        <div class="container" align="center">
            <a href="#" class="btn" align="center" id="next">Lihat Review Lainnya</a>
        </div>

    </section>
    <!-- review section ends -->


    <!-- contact section starts  -->
    <section class="contact" id="contact">

        <h1 class="heading"> <span>Kontak</span> Kami </h1>

        <div class="row">

            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8113274.347731632!2d104.79533618403227!3d-6.823275443334457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da393f79feeb5c5%3A0x1030bfbca7cb850!2sEast%20Java!5e0!3m2!1sen!2sid!4v1663713077850!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="">
                <h3>Hubungi Kami</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>

        </div>

    </section>
    <!-- contact section ends -->


    <!-- blogs section starts  -->
    <section class="blogs" id="blogs">

        <h1 class="heading"> Artikel <span>Kami</span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="<?= base_url('assets/'); ?>assets/home/mitra.JPG" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Menjalin Kerja Sama Baik</a>
                    <span>by admin / 21st may, 2022</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="<?= base_url('assets/'); ?>assets/home/pelatihan.JPG" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Bagaimana Tim Yang Baik</a>
                    <span>by admin / 22st Jun, 2022</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="<?= base_url('assets/'); ?>assets/home/background - Copy.jpg" alt="">
                </div>
                <div class="content">
                    <a href="#" class="title">Pentingnya K3 BAgi Teknisi</a>
                    <span>by admin / 21st Augst, 2021</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, dicta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

        <div class="container" align="center">
            <a href="#" class="btn" align="center" id="next">Lihat Artikel Lainnya</a>
        </div>

    </section>
    <!-- blogs section ends -->


    <!-- footer section starts  -->
    <?php
    $this->load->view('tampilan/footer');
    ?>
    <!-- footer section ends -->