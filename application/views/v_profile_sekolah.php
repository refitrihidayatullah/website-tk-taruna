<!-- slider -->


<div class="slider">
    <!-- fade css -->
    <div class="myslide fade">
        <div class="txt">
            <h1>TK TARUNA BAHARI</h1>
            <p>Taman Kanak Kanak dan Paud<br>Perum Graha Permata Indah blok AF22</p>
        </div>
        <img class="img" src="<?= base_url(); ?>assets/images/2.jpg" style="width: 100%; height: 100%;">
    </div>

    <div class="myslide fade">
        <div class="txt">
            <h1>TK TARUNA BAHARI</h1>
            <p>Taman Kanak Kanak dan Paud<br>Perum Graha Permata Indah blok AF22</p>
        </div>
        <img class="img" src="<?= base_url(); ?>assets/images/3.jpg" style="width: 100%; height: 100%;">
    </div>

    <div class="myslide fade">
        <div class="txt">
            <h1>TK TARUNA BAHARI</h1>
            <p>Taman Kanak Kanak dan Paud<br>Perum Graha Permata Indah blok AF22</p>
        </div>
        <img class="img" src="<?= base_url(); ?>assets/images/6.jpg" style="width: 100%; height: 100%;">
    </div>

    <!-- onclick js -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="dotsbox" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>
    <!-- /onclick js -->
</div>
<!-- slider end -->
<div class="container-label">
    <label for="" class="info">Informasi <span>Terbaru</span></label>
    <div class="container-info">
        <div class="text">
            <?php foreach ($info as $inf) { ?>
                <marquee style="font-size: 16px; font-weight: bold;"><?= $inf['informasi']; ?></marquee>
            <?php } ?>
        </div>
    </div>
</div>
<div class="pembungkus">
    <!-- content 1 -->
    <div class="container-content-1">
        <?php foreach ($tampildata as $hm) { ?>
            <section class="content-1">
                <img class="img-content-1" src="<?= base_url(); ?>uploads/<?= $hm['foto']; ?>" alt="">
                <div class="col">
                    <div class="title">
                        Tk taruna bahari
                    </div>
                    <hr>
                    <p>“Membantu anak didik mengembangkan berbagai potensi yang dimiliki untuk siap memasuki pendidikan dasar melalui kegiatan bermain sambil belajar”</p>
                </div>
            </section>
        <?php } ?>
        <?php foreach ($tampildata2 as $hm2) { ?>
            <section class="content-1">
                <div class="col-2">
                    <div class="title">
                        <?= $hm2['judul_profile']; ?>
                    </div>
                    <hr>
                    <p><?= $hm2['deskripsi_profile']; ?></p>
                </div>
                <img class="img-content-2" src="<?= base_url(); ?>uploads/<?= $hm2['foto']; ?>" alt="">
            </section>
        <?php } ?>
    </div>
    <!-- content 1 end -->


    <!-- content 2 -->
    <div class="container-content-2">
        <?php foreach ($tampildata3 as $hm3) { ?>
            <div id="content">
                <img class="img-content-3" src=" <?= base_url(); ?>uploads/<?= $hm3['foto']; ?>" alt="">
                <div class="col-3">
                    <div class="title">
                        <?= $hm3['judul_profile']; ?>
                    </div>
                    <hr>
                    <p><?= $hm3['deskripsi_profile']; ?></p>
                </div>
            </div>
        <?php } ?>
        <?php foreach ($tampildata4 as $hm4) { ?>
            <div id="content">
                <div class="col-4">
                    <div class="title">
                        <?= $hm4['judul_profile']; ?>
                    </div>
                    <hr>
                    <p><?= $hm4['deskripsi_profile']; ?></p>
                </div>
                <img class="img-content-4" src=" <?= base_url(); ?>uploads/<?= $hm4['foto']; ?>" alt="">
            </div>
        <?php } ?>



    </div>
</div>
<!-- content 2 end -->