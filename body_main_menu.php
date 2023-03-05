<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<body wd_beautify="1" class="body">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RBDVVC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="header" class="header">
        <div class="client-quote">
            <b><?=$langSelectPopup?></b>
            <span class="arrow-bot-green"></span>
        </div>
        <div class="top-menu col-lg-12 col-sm-12">
            <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar w-nav">
                <div class="container-h w-container">
                    <a href="/" class="brand w-nav-brand">
                        <img src="/images/logo2.png" width="150" class="image">
                    </a>
                    <nav role="navigation" class="nav-menu w-nav-menu">
                        <a href="#route" class="nav-link w-nav-link"><?=$menu_1?></a>
                        <a href="#about-us" class="nav-link-2 w-nav-link"><?=$menu_2?></a>
                        <a href="#foto" class="nav-link-3 w-nav-link"><?=$menu_3?></a>
                        <a href="#contacts" class="nav-link-4 w-nav-link"><?=$menu_4?></a>
                    </nav>
                    <div class="menu-button w-nav-button">
                        <div class="icon w-icon-nav-menu">
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-block">
                <div class="text-block">
                    <a href="tel:+380671237474" class="phone-link">+38 (067) 123 74 74</a> 
                    <a href="https://msng.link/vi/380671237474"><img src="/images/viber.png" class="phone-img"></a> 
                    <a href="https://msng.link/wa/380671237474"><img src="/images/whatsapp.png" class="phone-img2"></a>
                    <br>

                    <a href="tel:+380637617474" class="phone-link">+38 (063) 761 74 74</a> 
                    <a href="https://msng.link/vi/380637617474"><img src="/images/viber.png" class="phone-img"></a> 
                    <a href="https://msng.link/wa/380637617474"><img src="/images/whatsapp.png" class="phone-img2"></a>
                    <br>

                    <a href="tel:+48731481128" class="phone-link">+48 (731) 481 128</a> 
                    <a href="https://msng.link/vi/48731481128"><img src="/images/viber.png" class="phone-img"></a> 
                    <a href="https://msng.link/wa/48731481128"><img src="/images/whatsapp.png" class="phone-img2"></a>
                </div>
                <div class="button-block">
                    <a href="#" class="button w-button" data-ix="open"><strong><?=$requestACall?></strong></a>
                </div>
            </div>
            <div class="lang-select">
                <ul class="current">
                    <!--<b><?=$curLang?></b>-->
                    <li>
                        <a class="active">
                            <picture>
                                <img srcset="/images/flags/flag-<?=$lang?>.png" alt="">
                            </picture>
                        </a>
                    </li>
                </ul>
                <ul class="list">
                    <?php if($lang != "ua"){ ?>
                    <li>
                        <a href="https://nash-busik.com.ua/lng/ua/index.php<?= ($_SERVER['QUERY_STRING'] ? "?" . $_SERVER['QUERY_STRING'] : "")?>">
                            <picture>
                                <img srcset="/images/flags/flag-ua.png" alt="">
                            </picture>
                            <div class="name">Українська</div>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($lang != "ru"){ ?>
                    <li>
                        <a href="https://nash-busik.com.ua/lng/ru/index.php<?= ($_SERVER['QUERY_STRING'] ? "?" . $_SERVER['QUERY_STRING'] : "")?>">
                            <picture>
                                <img srcset="/images/flags/flag-ru.png" alt="">
                            </picture>
                            <div class="name">Русский</div>
                        </a>
                    </li>
                    <?php } ?>
                    <?php if($lang != "pl"){ ?>
                    <li>
                        <a href="https://nash-busik.com.ua/lng/pl/index.php<?= ($_SERVER['QUERY_STRING'] ? "?" . $_SERVER['QUERY_STRING'] : "")?>">
                            <picture>
                                <img srcset="/images/flags/flag-pl.png" alt="">
                            </picture>
                            <div class="name">Polski</div>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>            
        </div>
        <div class="header-wrapper">
            <div class="header-content">
                <h1 class="heading"><?=$heading_1?></h1>
                <h2 class="heading-2"><?=$heading_2?></h2>
                <a href="#" class="button-2 w-button" data-ix="open"><?=$heading_3?></a>
                <span class="mobsoc"><a href="https://www.facebook.com/NashBusik" target="_blank" class="button-soc"><img src="/images/facebook.png" width="50"></a>
                    <a href="https://www.instagram.com/the_way_to_europe_/" target="_blank" class="button-soc"><img src="/images/instagram.png" width="50"></a>
                </span>
                <div class="div-block-2">
                    <div class="div-block-3">
                    </div>
                    <div class="div-block-4">
                    </div>
                    <div class="div-block-5">
                    </div>
                </div>
            </div>
        </div>
    </div>