<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!-- ======= Gallery Section ======= -->
<div id="route" class="section2">
    <div class="section2-wrapper">
        <section id="portfolio" class="portfolio section-dark-bg">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active"><?=$transport_2?></li>
                            <li data-filter=".filter-cars"><?=$transport_3?></li>
                            <li data-filter=".filter-cabin"><?=$transport_4?></li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="300">

                    <?php
                    //photo for galerie cars
                    if ($handle = opendir('images/gallery/exterior-preview')) {

                        while (false !== ($file = readdir($handle))) {
                            $site_photo[] = $file;
                            if ($file != ".." and $file != ".") {
                                ?>
                                <div class="col-lg-4 col-md-6 portfolio-item filter-cars">
                                    <div class="portfolio-wrap">
                                        <img src="/images/gallery/exterior-preview/<?= $file ?>" class="img-fluid" alt="">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="/images/gallery/exterior-full/<?= $file ?>" data-gall="portfolioGallery" class="venobox" title=""><img src="/images/zoom-in-solid-24.png" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        closedir($handle);
                    }

                    //photo for galerie cabin
                    if ($handle = opendir('images/gallery/interior-preview')) {

                        while (false !== ($file = readdir($handle))) {
                            $site_photo[] = $file;
                            if ($file != ".." and $file != ".") {
                                ?>
                                <div class="col-lg-4 col-md-6 portfolio-item filter-cabin">
                                    <div class="portfolio-wrap">
                                        <img src="/images/gallery/interior-preview/<?= $file ?>" class="img-fluid" alt="">
                                        <div class="portfolio-info">
                                            <div class="portfolio-links">
                                                <a href="/images/gallery/interior-full/<?= $file ?>" data-gall="portfolioGallery" class="venobox" title=""><img src="/images/zoom-in-solid-24.png" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        closedir($handle);
                    }
                    ?>
                </div>

            </div>
        </section>
    </div>
</div>
<!-- End Gallery Section -->
