<?php get_header(); ?>
<!---SECTION 1--->
<?php $s1 = get_field('section_1'); ?>
<section id="intro" class="clearfix">
    <div class="container">
        <div class="intro-img">
            <img src="<?= $s1['image']; ?>" alt="<?= get_img_alt($s1['image']); ?>" class="img-fluid"/>
        </div>
        <div class="intro-info">
            <div><?= $s1['heading']; ?></div>
            <div>
                <a href="<?= $s1['link_1']['url'] ?>" class="btn-get-started scrollto"><?= $s1['link_1']['title'] ?></a>
                <a href="<?= $s1['link_2']['url'] ?>" class="btn-services scrollto"><?= $s1['link_2']['title'] ?></a>
            </div>
        </div>
    </div>
</section>
<main id="main">
    <!-- SECTION 2 -->
    <?php $s2 = get_field('section_2'); ?>
    <section id="about">
        <div class="container">

            <header class="section-header">
                <h3><?= $s2['heading']; ?></h3>
                <p><?= $s2['description']; ?></p>
            </header>

            <div class="row about-container ">

                <div class="col-lg-6 content order-lg-1 order-2 ">
                    <div class="icon-box wow fadeInUp">
                        <div class="icon"><i class="fa <?= $s2['infobox_1']['icon'] ?>"></i></div>
                        <h4 class="title"><?= $s2['infobox_1']['title'] ?></h4>
                        <p class="description"><?= $s2['infobox_1']['description'] ?></p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon"><i class="fa <?= $s2['infobox_2']['icon'] ?>"></i></div>
                        <h4 class="title"><?= $s2['infobox_2']['title'] ?></h4>
                        <p class="description"><?= $s2['infobox_2']['description'] ?></p>
                    </div>

                    <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon"><i class="fa <?= $s2['infobox_3']['icon'] ?>"></i></div>
                        <h4 class="title"><?= $s2['infobox_3']['title'] ?></h4>
                        <p class="description"><?= $s2['infobox_3']['description'] ?></p>
                    </div>
                    <div class="mt-2 mb-2">
                        <a href="<?= $s2['link']['url'] ?>" class="button"><?= $s2['link']['title'] ?></a>
                    </div>
                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="<?= $s2['image']; ?>" class="img-fluid" alt="<?= get_img_alt($s2['image']); ?>">
                </div>
            </div>
            <!-- SECTION 3 -->
            <?php $s3 = get_field('section_3'); ?>
            <div class="row about-extra  mt-5 pt-3">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="<?= $s3['image']; ?>" class="img-fluid" alt="<?= get_img_alt($s3['image']); ?>">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">

                    <h4><?= $s3['heading']; ?></h4>
                    <p><?= $s3['description']; ?></p>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION 4-->   <?php $s4 = get_field('section_4'); ?>
    <section id="services" class="section-bg">
        <div class="container">
            <header class="section-header">
                <h3><?= $s4['heading']; ?></h3>
                <p><?= $s4['description']; ?></p>
            </header>

            <div class="row">

                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><img src="<?= $s4['service_1']['image']; ?>" class="img-fluid" alt="<?= get_img_alt($s4['service_1']['image']); ?>"></div>
                        <h4 class="title"><a href="<?= $s4['service_1']['link']; ?>"><?= $s4['service_1']['title']; ?></a></h4>
                        <p class="description"><?= $s4['service_1']['description']; ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><img src="<?= $s4['service_2']['image']; ?>" class="img-fluid" alt="<?= get_img_alt($s4['service_2']['image']); ?>"></div>
                        <h4 class="title"><a href="<?= $s4['service_2']['link']; ?>"><?= $s4['service_2']['title']; ?></a></h4>
                        <p class="description"><?= $s4['service_2']['description']; ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><img src="<?= $s4['service_3']['image']; ?>" class="img-fluid" alt="<?= get_img_alt($s4['service_3']['image']); ?>"></div>
                        <h4 class="title"><a href="<?= $s4['service_3']['link']; ?>"><?= $s4['service_3']['title']; ?></a></h4>
                        <p class="description"><?= $s4['service_3']['description']; ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
                    <div class="box">
                        <div class="icon"><img src="<?= $s4['service_4']['image']; ?>" class="img-fluid" alt="<?= get_img_alt($s4['service_4']['image']); ?>"></div>
                        <h4 class="title"><a href="<?= $s4['service_4']['link']; ?>"><?= $s4['service_4']['title']; ?></a></h4>
                        <p class="description"><?= $s4['service_4']['description']; ?></p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Section 5---><?php $s5 = get_field('section_5'); ?>
    <section id="why-us" class="wow fadeIn">
        <div class="container">
            <header class="section-header">
                <h3><?= $s5['heading'] ?></h3>
                <p><?= $s5['description'] ?></p>
            </header>

            <div class="row row-eq-height justify-content-center">

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa <?= $s5['infobox_1']['icon'] ?>"></i>
                        <div class="card-body">
                            <h5 class="card-title"><?= $s5['infobox_1']['title'] ?></h5>
                            <p class="card-text"><?= $s5['infobox_1']['description'] ?></p>
                            <a href="<?= $s5['infobox_1']['link'] ?>" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa <?= $s5['infobox_2']['icon'] ?>"></i>
                        <div class="card-body">
                            <h5 class="card-title"><?= $s5['infobox_2']['title'] ?></h5>
                            <p class="card-text"><?= $s5['infobox_2']['description'] ?></p>
                            <a href="<?= $s5['infobox_2']['link'] ?>" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <i class="fa <?= $s5['infobox_3']['icon'] ?>"></i>
                        <div class="card-body">
                            <h5 class="card-title"><?= $s5['infobox_3']['title'] ?></h5>
                            <p class="card-text"><?= $s5['infobox_3']['description'] ?></p>
                            <a href="<?= $s5['infobox_3']['link'] ?>" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row counters">
                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?= $s5['numberbox_1']['number'] ?></span>
                    <p><?= $s5['numberbox_1']['title'] ?></p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?= $s5['numberbox_2']['number'] ?></span>
                    <p><?= $s5['numberbox_2']['title'] ?></p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?= $s5['numberbox_3']['number'] ?></span>
                    <p><?= $s5['numberbox_3']['title'] ?></p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-toggle="counter-up"><?= $s5['numberbox_4']['number'] ?></span>
                    <p><?= $s5['numberbox_4']['title'] ?></p>
                </div>

            </div>

        </div>
    </section>
    <!--CONTACT-->
    <section id="contact" class="section-bg">
        <div class="container-fluid">

            <div class="section-header">
                <h3>Contact Us</h3>
            </div>

            <div class="row wow fadeInUp">

                <div class="col-lg-6">
                    <div class="map mb-4 mb-lg-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-5 info">
                            <i class="ion-ios-location-outline"></i>
                            <p><?= $options['address']; ?></p>
                        </div>
                        <div class="col-md-4 info">
                            <i class="ion-ios-email-outline"></i>
                            <p><?= $options['site_email']; ?></p>
                        </div>
                        <div class="col-md-3 info">
                            <i class="ion-ios-telephone-outline"></i>
                            <p><?= $options['phone']; ?></p>
                        </div>
                    </div>

                    <div class="form">
                        <?= do_shortcode('[contact-form-7 id="33" title="Contact form 1"]'); ?>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- / -->
</main>
<?php get_footer(); ?>