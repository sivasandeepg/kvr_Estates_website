
<!--=====================================-->
<!--=   Breadcrumb     Start            =-->
<!--=====================================-->

<div class="breadcrumb-wrap breadcrumb-wrap-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</div>


<!--=====================================-->
<!--=   About     Start                 =-->
<!--=====================================-->

<section class="about-wrap-4 motion-effects-wrap pb-0" style="position:inherit;">

    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about-box6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="item-heading-left">
                        <span class="section-subtitle"><?= $about_us->heading ?></span>
                        <h2 class="section-title"><?= $about_us->sub_heading ?></h2>
                        <div class="bg-title-wrap" style="display: block;">
                            <span class="background-title solid">About Us</span>
                        </div>
                    </div>

                    <p> <?= $about_us->description ?> </p>



                    <div class="about-button">
                        <h5 class="m-0"><?= $about_us->name ?></h5>
                        <!-- <p>Managing Partner</p> -->
                    </div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-6">
                <div class="about-box7">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item-img">
                                <img src="<?= base_url() ?>uploads/<?= $about_us->about_image_two ?>" alt="about" height="270" width="530">
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-xl-8">
                                    <div class="about-img-style-3"><img src="<?= base_url() ?>uploads/<?= $about_us->about_image_three ?>" alt="about" height="315" width="363"></div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="about-img-style-4"><img src="<?= base_url() ?>uploads/<?= $about_us->about_image_four ?>" alt="about" height="315" width="280"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-img-style-5">
                        <div class="item-big-img">
                            <img src="<?= base_url() ?>uploads/<?= $about_us->about_image_one ?>" alt="about" width="425" height="654">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!--=====================================-->
<!--=   Brand     Start                 =-->
<!--=====================================-->

<div class="brand-wrap1 brand-wrap3">
    <div class="container">
        <div class="brand-layout swiper-container">
            <div class="swiper-wrapper">


                <?php foreach ($about_us_logos as $row) { ?>
                    <div class="swiper-slide">
                        <div class="brand-box2 wow fadeInUp" data-wow-delay=".4s">
                            <div class="item-img">
                                <a ><img src="<?= base_url() ?>uploads/<?= $row->image ?>" alt="brand" height="117" width="200"></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
<!--=====================================-->
<!--=   About     Start                 =-->
<!--=====================================-->


