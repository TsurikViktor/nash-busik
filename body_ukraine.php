<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div id="route" class="section2">
    <div class="section2-wrapper">
        <h3 class="head-3"><?=$route_1?></h3>
        <div class="row">
            <?php
            $json = file_get_contents("../../images/cities/cities_". $lang .".json");
            $cities = json_decode($json, true);

            foreach ($cities as $city) {
                if ($city['country'] == 'ukraine') {
                    ?>
                    <div class="col-lg-4 col-md-6 d-flex justify-content-around align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="div-block-7 _2" data-ix="sec2scrol">
                            <img src="/images/<?= $city['img_path'] ?>" width="420" sizes="(max-width: 479px) 100vw, (max-width: 767px) 420px, 33vw" class="image-2">
                            <div class="text-block-2">
                                <h2><?= str_replace("-", "-<br>", $city['title']) ?></h2>
                            </div>
                            <div class="div-block-8">
                                <div class="div-block-9">
                                    <div class="text-block-3"><?=$route_4?></div>
                                    <div class="div-block-10">
                                        <div class="text-block-4"><strong><?= $city['price'] ?></strong></div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-around">
                                    <a href="#" class="a-btn" id="<?= $city['id'] ?>" data-ix="open"><?=$route_5?></a>&nbsp;
                                    <a href="#" class="a-btn btn-detailed" data-toggle="modal" data-target="#modal-<?= $city['id'] ?>" data-whatever="<?= $city['title'] ?>"><?=$route_6?></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>