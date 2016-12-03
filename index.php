<?php get_header(); ?>
<header class="header" id="home">
    <div class="main-nav">
        <nav class="navbar navbar-default" style="height:140px; background:white;">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#home"><img src="<?php bloginfo('template_directory');?>/assets/images/brand-logo.png" height="125" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">About Us</a></li>
                        <li><a class="active" href="#social-media">social media marketing</a></li>
                        <li><a href="#package">Package</a></li>
                        <li><a href="#corporate-identity">corporate identity design</a></li>
                        <li><a href="#contacts">Contact Us</a></li>
                                                    <!--<li class="icon">
                                                        <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
                                                      </li>-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>

    <div class="slider-top">
        <div id="owl-top" class="owl-carousel owl-theme">
            <div class="item">
                <div class="slider-caption">
                    <h2>Elakadt marketing témában?</h2>
                    <p><?php
                         echo esc_attr(onepage_get_option('header_background_sub_text', __('Elakadt marketing témában? 
                        Önnek is kisvállalkozása van? Tudja hogy szükséges marketing, online felületeken való megjelenés de nincs  kapacitása egy újabb dolgot megtanulni?','Szocial')));
                        ?></p>
                    <a href="#">Olvasson tovább</a>
                    <a href="#">Írjon Nekünk</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="about-us sec-padding" id="about">
    <div class="container">
        <div class="section-heading">
            <h1>Kik <span>vagyunk mi?</span></h1>
            <p><?php echo esc_attr(onepage_get_option('about_us_header', __('Miért van ránk szükség?  Mivel foglalkozunk?','Szocial'))); ?></p>
            <img src="<?php bloginfo('template_directory');?>/assets/images/section-btm.png" alt="" />
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="about-content">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab-history" aria-controls="tab-history" role="tab" data-toggle="tab">filozófiánk</a></li>
                        <li role="presentation"><a href="#tab-Philosophy" aria-controls="tab-Philosophy" role="tab" data-toggle="tab">a mi célunk</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab-history">
                            <p><span>
                                    <?php echo esc_attr(onepage_get_option('about_us_content', __('Tapasztalataink szerint a Kisvállalkozások nehéz helyzetben vannak ha érvényesülni szeretnének, ugyanis egy átfogó marketing kampány kivitelezése számukra nem könnyen kivitelezhető.','Szocial'))); ?>
                                </span></p>

                            <p> Általában hiányoznak anyagi tárgyi és személyi feltételek is. Többségében a marketingre szánt pénzt újsághirdetésre, és egyéb olyan megjelenésre költik el koncepció nélkül, ami nem mérhető. Így nem meglepő, hogy nem vált be. Előbb-utóbb belefásulnak és ugyan továbbra is hirdetnek de kidobott pénznek érzik. Nem csoda, hiszen nem érik el a megfelelő közönséget, így a várt bevétel növekedés elmarad.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab-Philosophy">
                            <p><span>Több éve foglalkozunk vállalkozás fejlesztéssel, marketinggel.</span></p>
                            <p>Ebbe beletartozik online marketing és  marketing kampány, rendezvény szervezés, arculattervezés, reklámajándék, illetve arculathoz igazodó egyedi termékek elkészítése.
Az online marketing területén beszélhetünk a közösségi oldalak kezeléséről, hozzájuk tartozó hirdetéskezelésről, hírlevél írásról, linképítésről  és remarketingről.  Kisvállalkozásoknál nem jellemző, hogy Facebook app-ot használjanak de mi ezt is elérhetővé tudjuk tenni az Ön számára.
Komplex szolgáltatás kínálunk, mely kiterjed grafikai anyagok tervezésére és kivitelezésére egyaránt.</p>
                            <p><span>Célunk az Ön forgalmának növelése. Nem ígérünk áttörő sikert már másnaptól, de ha a közös munka folyamatos és következetes garantáljuk, hogy az Ön számára a tartós eredmény nem marad el.</span></p>
                        </div>
                        <a href="#">Tudj meg többet</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <img src="<?php bloginfo('template_directory');?>/assets/images/about-girl.png" alt="" class="img-responsive" />
            </div>
        </div>
    </div>
</section>

<section class="feature-us sec-padding" id="social-media">
    <div class="container">
        <div class="section-heading">
            <h1>közösségi média <span>MARKETING</span></h1>
            <p>Komplex szolgáltatást kínálunk</p>
            <img src="<?php bloginfo('template_directory');?>/assets/images/section-btm.png" alt="" />
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="feature-content">
                    <div class="feature-icon">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                    </div>
                    <div class="feature-text">
                        <h2>Rendezvény szervezés</h2>
                        <p>
                            <?php echo esc_attr(onepage_get_option('social_marketing_event_content', __('A rendezvény egy remek marketing eszköz arra, hogy megkülönböztesd magad a többiektől! Ne gondold, hogy lehetetlen csak azért mert kisvállalkozás vagy!','Szocial'))); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="feature-content">
                    <div class="feature-icon">
                        <i class="fa fa-rocket" aria-hidden="true"></i>
                    </div>
                    <div class="feature-text">
                        <h2>Arculat tervezés</h2>
                        <p>
                            <?php echo esc_attr(onepage_get_option('social_marketing_corporate_design_content', __('Nincs logó? Esetleg régi? Ránk ebben is számíthatsz! Nem csak a logót hanem egy komplett arculati kézikönyvet készítünk neked így nem kell aggódnod a miatt, hogy nem vagy következetes a céget megjelenését illetően.','Szocial'))); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="feature-content">
                    <div class="feature-icon">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    </div>
                    <div class="feature-text">
                        <h2>Webshop készítés</h2>
                        <p>
                            <?php echo esc_attr(onepage_get_option('social_marketing_webshop_maker_content', __('Most indulnál de nem tudod hol kezd? Profi webáruházat készítünk Neked, ha igényled marketing kampánnyal kiegészítve, amelynek a végrehajtásában is segítségedre leszünk.','Szocial'))); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="feature-content">
                    <div class="feature-icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="feature-text">
                        <h2>Online marketing </h2>
                        <p>
                            <?php echo esc_attr(onepage_get_option('social_marketing_online_marketing_content', __('Nálunk ebben mi tartozik bele? Facebook -, Instagram oldal kezelése, hirdetési kampányok lebonyolítása, hírlevél küldés, youtube csatorna kezelése, blog írása, remarketing sé még sorolhanám. Minden esetben ügyfélre szabva választjuk meg hogy melyik eszközre van szükségünk és mekkora mértékben.','Szocial'))); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pricing-us sec-padding" id="package">
    <div class="container">
        <div class="section-heading">
            <h1>Csomagajánlatok</h1>
            <p>Önnek melyik csomagot választja?</p>
            <img src="<?php bloginfo('template_directory');?>/assets/images/section-btm.png" alt="">
        </div>

        <?php
            $package_Kishal_content = onepage_get_option('package_Kishal_content');
            $package_Nagyhal_content = onepage_get_option('package_Nagyhal_content');
            $package_Capa_content = onepage_get_option('package_Capa_content');
            
            $textKishal = trim($package_Kishal_content);
            $textNagyhal = trim($package_Nagyhal_content);
            $textCapa = trim($package_Capa_content);
            
            if(strlen($textKishal) == 0)
            {
                $textKishal = "Facebook oldal kelezés –ALAP
                                szinten, napi posztok
                                moderálás
                                Facebook hirdetés kezelés
                                -
                                -";
            }
            if(strlen($textNagyhal) == 0)
            {
                $textNagyhal = "Facebook oldal kelezés - ALAP
                                kiegészítve eseményre épülő
                                kampánnyal
                                Facebook hirdetés kezelés
                                Instagram oldal kezelés
                                remarketing";
            }
            if(strlen($textCapa) == 0)
            {
                $textCapa = "Facebook oldal kelezés
                            Facebook, google, instagram hirdetés kezelés
                            Instagram oldal kezelés
                            Twitter oldal kezelése
                            remarketing
                            Ajándék hirdetés kupon 3500 Ft értékben";
            }
            $textArKishal = explode("\n", $textKishal);
            $textArNagyhal = explode("\n", $textNagyhal);
            $textArCapa = explode("\n", $textCapa);
            
            $KishalLength = sizeof($textArKishal);
            $NagyhalLength = sizeof($textArNagyhal);
            $CapaLength = sizeof($textArCapa);
            
            $maxSize = $KishalLength;
            if($NagyhalLength > $maxSize)
            {
                $maxSize = $NagyhalLength;
            }
            if($CapaLength > $maxSize)
            {
                $maxSize = $CapaLength;
            }            
            
        ?>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pricing-content">
                    <h2>Kishal</h2>
                    <h3>12.000 Ft<span>/hó</span></h3>
                    <h5>beleértve</h5>
                    <hr>
                    <?php
                        //if($KishalLength <= 1)
                        //{                            
                        //    echo "<p>Facebook oldal kelezés –ALAP </p>
                        //        <p>szinten, napi posztok</p>
                        //        <p>moderálás</p>
                        //        <p>Facebook hirdetés kezelés</p>
                        //        <p>-</p>
                        //        <p>-</p>";
                        //}
                        $textAr = array_filter($textArKishal, 'trim');
                        foreach ($textAr as $line) {
                            echo "<p>" . $line . "</p>";
                        } 
                        if($maxSize > $KishalLength)
                        {
                            for($i = $KishalLength; $i < $maxSize; $i ++)
                            {
                                echo "<p>-</p>";
                            }
                        }
                    ?>

                    <a href="#">Írjon Nekünk</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pricing-content">
                    <h2>Nagy hal</h2>
                    <h3>20.000 Ft<span>/hó</span></h3>
                    <h5>beleértve</h5>
                    <hr>
                    <?php
                        //if($NagyhalLength <= 1)
                        //{
                        //    echo "<p>Facebook oldal kelezés -  ALAP </p>
                        //            <p>kiegészítve eseményre épülő </p>
                        //            <p>kampánnyal</p>
                        //            <p>Facebook hirdetés kezelés</p>
                        //            <p>Instagram oldal kezelés</p>
                        //            <p>remarketing</p>";
                        //}
                        $textAr = array_filter($textArNagyhal, 'trim');
                        foreach ($textAr as $line) {
                            echo "<p>" . $line . "</p>";
                        } 
                        if($maxSize > $NagyhalLength)
                        {
                            for($i = $NagyhalLength; $i < $maxSize; $i ++)
                            {
                                echo "<p>-</p>";
                            }
                        }
                    ?>
                    <a href="#">Írjon Nekünk</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pricing-content">
                    <h2>Cápa</h2>
                    <h3>35.000 Ft<span>/hó</span></h3>
                    <h5>beleértve</h5>
                    <hr>
                    <?php
                        //if($CapaLength <= 1)
                        //{
                        //    echo "<p>Facebook oldal kelezés</p>
                        //            <p>Facebook, google, instagram hirdetés kezelés</p>
                        //            <p>Instagram oldal kezelés</p>
                        //            <p>Twitter oldal kezelése</p>
                        //            <p>remarketing</p>
                        //            <p>Ajándék hirdetés kupon 3500 Ft értékben</p>";
                        //}
                        
                        $textAr = array_filter($textArCapa, 'trim');
                        foreach ($textAr as $line) {
                            echo "<p>" . $line . "</p>";
                        } 
                        if($maxSize > $CapaLength)
                        {
                            for($i = $CapaLength; $i < $maxSize; $i ++)
                            {
                                echo "<p>-</p>";
                            }
                        }
                    ?>
                    <a href="#">Írjon Nekünk</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-us sec-padding" id="corporate-identity">
    <div class="container">
        <div class="section-heading">
            <h1>CORPORATE <span>IDENTITY DESIGN</span></h1>
            <p>Nam elementum tellus interdum consectetur diam quam risus.</p>
            <img src="<?php bloginfo('template_directory');?>/assets/images/section-btm.png" alt="" />
        </div>
        <div class="row">
            <div class="col-md-6 identity-img">
                <img src="<?php bloginfo('template_directory');?>/assets/images/corporate_design.jpg" />
            </div>
            <div class="col-md-6">
                <p class="identity-p"><span style="padding-left:40px;">Sz.o.cial </span>Mauris ac dui nibh a condimentum metus ante tortor adipis cing at porta tempus, comso ipsum. Nam elementum tellus interdum consectetur diam eleifend risus sit amet.pulvinar lectus nibh. Suspendisse potenti. Cum sociis natoque et magnis.</p>
            </div>
        </div>
    </div>
</section>

<section class="contact-us sec-padding" id="contacts">
    <div class="container">
        <div class="section-heading">
            <h1>lépjen kapcsolatba <span>velünk</span></h1>
            <p>Személyre szabott ajánlatunkat kérje elérhetőségeinket!</p>
            <img src="<?php bloginfo('template_directory');?>/assets/images/section-btm.png" alt="" />
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="contact-text">
                    <h2>telefon</h2>
                    <p>
                        <?php echo esc_attr(onepage_get_option('contact_number', __('+36 306 537 063','Szocial'))); ?>
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-content">
                    <div class="contact-icon">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h2>EMAIL</h2>
                        <p>
                            <?php echo esc_attr(onepage_get_option('contact_email', __('info@szocialmarketing.hu','Szocial'))); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-content">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h2>Poastacím</h2>
                        <p><?php echo esc_attr(onepage_get_option('contact_address', __('3580 Tiszaújváros Lévai József utca 10','Szocial'))); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php get_footer();?>
