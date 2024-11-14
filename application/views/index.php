
<div id="header-bottombar" class="header-bottombar-area">
    <div class="container">
        <form action="<?= base_url('projects/search') ?>" class="map-form" method="GET">
            <div class="row align-items-center">
                <div class="col-xl-9 col-lg-9">
                    <div class="row">
                        <div class="col-lg-6 pl-15 pr-0">
                            <div class="rld-single-select mt-0">
                                <select class="form-select nice-select select single-select mr-0" name="property">
                                    <option value="">Select Project</option>
                                    <?php foreach ($properties as $row) { ?>
                                        <option value="<?= $row->id ?>" <?= $row->id == $_GET['property'] ? 'selected' : '' ?>><?= $row->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-15 pr-0">
                            <div class="rld-single-select mt-0">

                                <div class="nice-select select single-select mr-0" tabindex="0">
                                    <span class="current">All Cities</span>
                                    <ul class="list">
                                        <li data-value="" class="option selected">All Cities</li>
                                        <?php
                                        $i = 0;
                                        foreach ($city_home as $city) {
                                            $i++;
                                            ?>
                                            <li class="option">
                                                <input id="a-<?= $i ?>" onclick="check()" class="checkbox-custom" value="<?= $city->id ?>" type="checkbox" name="city[]">
                                                <label for="a-<?= $i ?>" class="checkbox-custom-label"><?= $city->name ?></label>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-3 d-flex justify-content-start">
                    <div class="banner-search-wrap banner-search-wrap-2">
                        <div class="rld-main-search rld-main-search2">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="box">
    <!--                                    <div class="dropdown-filter"><span><i class="fas fa-sliders-h"></i></span></div>-->
                                        <div class="filter-button">
                                            <button type="submit"  class="filter-btn1 search-btn"><span>Search</span><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ End Search Form -->
                </div>

            </div>
        </form>
        <div class="row">
            <div class="col-12">
                <div class="testing-explore">
                    <div class="explore__form-checkbox-list explore__form-checkbox-list2 full-filter">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                <!-- Form Property Status -->
                                <div class="form-group bath">

                                    <div class="rld-single-select mt-0">
                                        <label class="item-bath">Bedrooms</label>
                                        <select class="nice-select select single-select mr-0" name="bedrooms">
                                            <option value="">Select </option>
                                            <option value="1" <?= $_GET['bedrooms'] == '1' ? 'selected' : '' ?>>1 </option>
                                            <option value="2" <?= $_GET['bedrooms'] == '2' ? 'selected' : '' ?>>2 </option>
                                            <option value="3" <?= $_GET['bedrooms'] == '3' ? 'selected' : '' ?>>3 </option>
                                            <option value="4" <?= $_GET['bedrooms'] == '4' ? 'selected' : '' ?>>4 </option>
                                            <option value="5" <?= $_GET['bedrooms'] == '5' ? 'selected' : '' ?>>5 </option>

                                        </select>
                                    </div>
                                </div>
                                <!--/ End Form Property Status -->
                            </div>
                            <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                <!-- Form Bedrooms -->
                                <div class="form-group bath">
                                    <div class="rld-single-select mt-0">

                                        <label class="item-bath">Bathrooms</label>
                                        <select class="nice-select select single-select mr-0" name="bathrooms">
                                            <option value="">Bathrooms</option>
                                            <option value="1" <?= $_GET['bathrooms'] == '1' ? 'selected' : '' ?>>1</option>
                                            <option value="2" <?= $_GET['bathrooms'] == '2' ? 'selected' : '' ?>>2</option>
                                            <option value="3" <?= $_GET['bathrooms'] == '3' ? 'selected' : '' ?>>3</option>
                                            <option value="4" <?= $_GET['bathrooms'] == '4' ? 'selected' : '' ?>>4</option>
                                            <option value="5" <?= $_GET['bathrooms'] == '5' ? 'selected' : '' ?>>5</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/ End Form Bedrooms -->
                            </div>
                            <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                <!-- Form Bathrooms -->
                                <div class="form-group bath">
                                    <div class="rld-single-select mt-0">

                                        <label class="item-bath">Garage</label>
                                        <select class="nice-select select single-select mr-0" name="garage">
                                            <option value="">Garage</option>
                                            <option value="Yes" <?= $_GET['garage'] == 'Yes' ? 'selected' : '' ?>>Yes</option>
                                            <option value="No" <?= $_GET['garage'] == 'No' ? 'selected' : '' ?>>No</option>

                                        </select>
                                    </div>
                                </div>
                                <!--/ End Form Bathrooms -->
                            </div>
                            <!-- Price Fields -->
                            <div class="main-search-field-2 col-12">
                                <div class="row">
                                    <div class="col-md-6 pl-0">
                                        <div class="price-range-wrapper">
                                            <div class="range-box">
                                                <div class="price-label">Flat Size:</div>
                                                <div id="price-range-filter-3"
                                                     class="price-range-filter"></div>
                                                <div
                                                    class="price-filter-wrap d-flex align-items-center">
                                                    <div class="price-range-select">
                                                        <div class="price-range"
                                                             id="price-range-min-3"></div>
                                                        <div class="price-range">-</div>
                                                        <div class="price-range"
                                                             id="price-range-max-3"></div>
                                                        <div
                                                            class="price-range range-title">
                                                            sft</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-0">
                                        <div class="price-range-wrapper">
                                            <div class="range-box">
                                                <div class="price-label">Distance:</div>
                                                <div id="price-range-filter-2"
                                                     class="price-range-filter"></div>
                                                <div
                                                    class="price-filter-wrap d-flex align-items-center">
                                                    <div class="price-range-select">
                                                        <div class="price-range"
                                                             id="price-range-min-2"></div>
                                                        <div class="price-range">-</div>
                                                        <div class="price-range"
                                                             id="price-range-max-2"></div>
                                                        <div
                                                            class="price-range range-title">
                                                            km</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                    <h4 class="text-dark">Amenities</h4>
                                    <ul class="no-ul-list third-row">
                                        <?php
                                        $i = 0;
                                        foreach ($aminities as $row) {
                                            $i++;
                                            ?>
                                            <li>

                                                <input id="b-<?= $i ?>" class="checkbox-custom" value="<?= $row->id ?>"  name ="aminity[]" type="checkbox">
                                                <label for="b-<?= $i ?>" class="checkbox-custom-label"><?= $row->name ?></label>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>

                            </div>
                            <!--                            <div class="filter-button">
                                                            <a href="#" class="filter-btn1">Apply Filter</a>
                                                            <a href="#" class="filter-btn1 reset-btn">Reset Filter<i class="fas fa-redo-alt"></i></a>
                                                        </div>-->
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section>


    <!--Camera Slide-->
    <div class="camera_wrap">

        <?php foreach ($home_slides as $row) { ?>

            <div data-src="<?= base_url() ?>uploads/<?= $row->image ?>">
                <img src="<?= base_url() ?>uploads/<?= $row->image ?>" class="img-responsive">
            </div>
        <?php } ?>

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
                                <a ><img src="<?= base_url() ?>uploads/<?= $row->image ?>" alt="brand" height="117" width="200" ></a>
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

<section class="about-wrap-4 motion-effects-wrap pb-0">
    <div class="motion-effects8">
        <img src="<?= base_url() ?>assets/img/figure/shape26.png" alt="shape" width="134" height="137">
    </div>
    <div class="motion-effects9">
        <img src="<?= base_url() ?>assets/img/figure/shape27.png" alt="shape" width="105" height="103">
    </div>
    <div class="motion-effects10">
        <img src="<?= base_url() ?>assets/img/figure/shape28.png" alt="shape" width="90" height="18">
    </div>
    <div class="motion-effects11">
        <img src="<?= base_url() ?>assets/img/figure/shape29.png" alt="shape" width="460" height="460">
    </div>
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
<!--                        <h5 class="m-0"><?= $about_us->name ?></h5>-->
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
<!--=   Property      Start             =-->
<!--=====================================-->

<section class="property-wrap-8">
    <div class="container-fluid px-0">
        <div class="item-heading-center mb-20">
            <span class="section-subtitle">WE'VE GOT YOU COVERED</span>
            <h2 class="section-title">Featured Property For Sale</h2>
            <div class="bg-title-wrap" style="display: block;">
                <span class="background-title solid">Projects</span>
            </div>
        </div>
        <div class="product-slider-style-4 owl-carousel owl-theme">

            <?php
            foreach ($upcome_projects_view as $row) {

                $this->db->where('id', $row->property_type_id);
                $property_type = $this->db->get('property_type')->row()->name;
                ?>
                <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
                    <div class="item-img">
                        <a href="<?= base_url() ?>project_view/<?= $row->slug ?>"><img src="<?= base_url() ?>uploads/<?= $row->image ?>" alt="blog" style="width:510px; height:250px;" ></a>
                        <div class="item-category-box1">
                            <div class="item-category"> <?= $property_type ?></div>
                        </div>
                        <div class="rent-price">
    <!--                            <div class="item-price"> ₹ <?= $row->price ?></div>-->
                        </div>
                    </div>
                    <div class="item-category10"><a href="<?= base_url() ?>projects/search?property=<?= $row->property_type_id ?>"> <?= $property_type ?></a></div>
                    <div class="item-content">
                        <div class="verified-area">
                            <h3 class="item-title"><a href="<?= base_url() ?>project_view/<?= $row->slug ?>"><?= $row->title ?></a></h3>
                        </div>
                        <div class="location-area"><i class="flaticon-maps-and-flags"></i><?= $row->address ?></div>
                        <div class="item-categoery3 item-categoery4">
                            <ul>
    <!--                                <li><i class="flaticon-bed"></i>Beds: <?= $row->total_bed_rooms ?></li>
                                <li><i class="flaticon-shower"></i>Baths: <?= $row->total_baths_rooms ?></li>
                                <li><i class="flaticon-two-overlapping-square"></i><?= $row->area_land_size ?> Sqft</li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>




        </div>
    </div>
</section>
<!--=====================================-->
<!--=   Location     Start              =-->
<!--=====================================-->

<section class="location-wrap1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7">
                <div class="item-heading-left">
                    <span class="section-subtitle">Top Areas</span>
                    <h2 class="section-title">Find Your Neighborhood</h2>
                    <div class="bg-title-wrap" style="display: block;">
                        <span class="background-title solid">Locations</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="heading-button">
                    <a href="<?= base_url() ?>projects/search?" class="heading-btn item-btn-2">Explore More</a>
                </div>
            </div>
        </div>


        <div class="row">
            <?php
            $i = 0;

//            foreach ($city_home as $row) {
//                $this->db->where('city_id', $row->id);
//                $total_properties = $this->db->count_all_results('projects');
//                $i++;

            foreach ($city_home_limit as $row) {
                $this->db->where('city_id', $row->id);
                $total_properties = $this->db->count_all_results('projects');
                $i++;

                if ($i <= 3) {
                    ?>
                    <div class="col-lg-6 col-md-12">
                        <div class="location-box3 wow zoomIn" data-wow-delay=".2s">
                            <div class="item-img">
                                <a href="<?php base_url() ?>projects/search?city[]=<?= $row->id ?>"><img src="<?= base_url() ?>uploads/<?= $row->image ?>" alt="location" width="690" height="280"></a>
                            </div>
                            <div class="item-content">
                                <div class="content-body">
                                    <div class="item-category"> <?= $total_properties ?> properties</div>
                                    <div class="item-title">
                                        <h3><a href="<?php base_url() ?>projects/search?city[]=<?= $row->id ?>"><?= $row->name ?> </a></h3>
              <!--                      <h3><a href="<?php base_url() ?>all_projects?city[]=<?= $row->name ?>"><?= $row->name ?> </a></h3>-->
                                    </div>
                                </div>
                                <div class="location-button">
                                    <a href="<?php base_url() ?>projects/search?city[]=<?= $row->id ?>" class="location-btn"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>



                <?php } else if ($i == 4) {
                    ?>

                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="location-box3 wow zoomIn" data-wow-delay=".2s">
                                    <div class="item-img">
                                        <a href="<?php base_url() ?>projects/search?city[]=<?= $row->id ?>"><img src="<?= base_url() ?>uploads/<?= $row->image ?>" alt="location" width="520" height="440"></a>
                                    </div>
                                    <div class="item-content">
                                        <div class="content-body">
                                            <div class="item-category"><?= $total_properties ?> properties</div>
                                            <div class="item-title">
                                                <h3><a href="<?php base_url() ?>projects/search?city[]=<?= $row->id ?>"><?= $row->name ?> </a></h3>
                                            </div>
                                        </div>
                                        <div class="location-button">
                                            <a href="<?php base_url() ?>projects/search?city[]=<?= $row->id ?>" class="location-btn"><i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        <?php } else {
                            ?>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="location-box3 wow zoomIn" data-wow-delay=".2s">
                                    <div class="item-img">
                                        <a href="<?php base_url() ?>projects/search?city[]=<?= $row->id ?>"><img src="<?= base_url() ?>assets/img/blog/location11.jpg" alt="location" width="520" height="440"></a>
                                    </div>
                                    <div class="item-content">
                                        <div class="content-body">
                                            <div class="item-category"><?= $total_properties ?> properties</div>
                                            <div class="item-title">
                                                <h3><a href="<?php base_url() ?>projects/search?city[]=<?= $row->id ?>"><?= $row->name ?></a></h3>
                                            </div>
                                        </div>
                                        <div class="location-button">
                                            <a href="<?php base_url() ?>projects/search?city[]=<?= $row->id ?>" class="location-btn"><i class="fas fa-arrow-right"></i></a>
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
    </div>
</section>
<!--=====================================-->
<!--=   Property Banner     Start       =-->
<!--=====================================-->

<section class="property-banner-wrap1 parallaxie" data-bg-image="<?= base_url() ?>uploads/<?= $home_other->property_image ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="property-box1 wow slideInUp" data-wow-delay="100">
                    <div class="item-subtitle"><?= $home_other->property_head ?></div>
                    <h3 class="item-title"><?= $home_other->property_description ?></h3>
                    <div class="play-button">
                        <div class="item-icon">
                            <a href="http://www.youtube.com/watch?v=<?= $home_other->property_youtube_url ?>" class="play-btn">
                                <span class="play-icon style-1">
                                    <i class="fas fa-play"></i>
                                </span>
                                <span class="play-text">Watch Video</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="property-img wow fadeInUp" data-wow-delay="100">
                    <div class="bg-title-wrap" style="display: block;">
                        <span class="background-title solid"><?= $home_other->property_title_big ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=====================================-->
<!--=   Blog     Start                  =-->
<!--=====================================-->

<style>
    .item-img.align-img-cls img {
        width: 100%;
        height: 216px;
        object-fit: contain;
    }
</style>


<section class="blog-wrap1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-8">
                <div class="item-heading-left">
                    <span class="section-subtitle">What’s New Trending</span>
                    <h2 class="section-title">Latest Blog & Posts</h2>
                    <div class="bg-title-wrap" style="display: block;">
                        <span class="background-title solid">Blogs</span>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-4">
                <div class="heading-button">
                    <a href="<?= base_url() ?>blog" class="heading-btn">See All Blogs</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <?php

            function humanTiming($time) {

                $time = time() - $time; // to get the time since that moment
                $time = ($time < 1) ? 1 : $time;
                $tokens = array(
                    31536000 => 'year',
                    2592000 => 'month',
                    604800 => 'week',
                    86400 => 'day',
                    3600 => 'hour',
                    60 => 'minute',
                    1 => 'second'
                );

                foreach ($tokens as $unit => $text) {
                    if ($time < $unit)
                        continue;
                    $numberOfUnits = floor($time / $unit);
                    return $numberOfUnits . ' ' . $text . (($numberOfUnits > 1) ? 's' : '');
                }
            }

            foreach ($upcome_blog_view as $row) {

                $time = $row->created_at;
                $mytime = ' ' . humanTiming($time) . ' ago';

                $type = explode(',', $row->property_type);
                ?>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-box1 wow fadeInUp" data-wow-delay=".4s">
                        <div class="item-img">
                            <a href="<?= base_url() ?>blog_view/<?= $row->slug ?>"><img src="<?= base_url() ?>uploads/<?= $row->image_one ?>" alt="blog" width="520" height="350"></a>
                        </div>
                        <div class="thumbnail-date">
                            <div class="popup-date">

                                <?php
                                $timestamp = $row->created_at;
                                $mth = date("m", $timestamp);
                                $d = date("d", $timestamp);
                                $t = date("l jS  F   Y", $timestamp);
                                $m = date("M", mktime(null, null, null, $mth));
                                ?>
                                <span class="day"><?= $d ?></span><span class="month"><?= $m ?></span>
                            </div>
                        </div>
                        <div class="item-content">
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="<?= base_url() ?>blog_view/<?= $row->slug ?>">


                                            <?php
                                            $this->db->where('id', $row->blog_categories_id);
                                            echo $category_name = $this->db->get('blog_categories')->row()->category_name;
                                            ?>
                                            ,

                                            <?php
                                            for ($i = 0; $i <= count($type); $i++) {

                                                $this->db->select('name');
                                                $this->db->where('id', $type[$i]);
                                                $property = $this->db->get('property_type')->row()->name;
                                                ?>
                                                <?= rtrim($property) . '' ?>
                                            <?php } ?>



                                        </a></li>
                                    <li><a href="<?= base_url() ?>blog_view/<?= $row->slug ?>"><?= $mytime ?></a></li>
                                </ul>
                            </div>
                            <div class="heading-title">
                                <h3><a href="<?= base_url() ?>blog_view/<?= $row->slug ?>"><?= $row->title ?></a></h3>
                            </div>
                            <div class="blog-button">
                                <a href="<?= base_url() ?>blog_view/<?= $row->slug ?>" class="item-btn">Read More<i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>




        </div>
    </div>
</section>
<!--=====================================-->
<!--=  Banner     Start                 =-->
<!--=====================================-->


<!--=====================================-->
<!--=   Testimonial     Start           =-->
<!--=====================================-->

<section class="testimonial-wrap2">
    <div class="container">

        <!-- Slides -->

        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="testimonial-box2 wow fadeInLeft" data-wow-delay=".3s">
                    <div class="testimonial-heading">
                        <span class="section-subtitle">Customer Testimonials</span>
                        <h2 class="section-title">What’s Our Customer Say</h2>
                        <div class="bg-title-wrap" style="display: block;">
                            <span class="background-title solid">Testimonials</span>
                        </div>
                    </div>
                    <div class="testimonial-layout2 swiper-container">
                        <div class="swiper-wrapper">

                            <?php
                            foreach ($testimonials as $row) {
                                ?>
                                <div class="swiper-slide">
                                    <div class="single-test">
                                        <div class="item-quotation">
                                            <i class="fas fa-quote-left"></i>
                                        </div>
                                        <p> <?= $row->description ?>  </p>


                                        <ul  class="item-rating">
                                            <?php
                                            for ($i = 1; $i <= $row->star; $i++) {
                                                ?>
                                                <li><i class="fas fa-star"></i></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>


                                        <div class="row">
                                            <div class="col-sm-2 col-xs-5">
    <!--                                                <img src="assets/img/user.png" />-->
                                                <img  " src="<?= base_url() ?>uploads/<?= $row->image ?>" style="width:100px !important;     max-width: 100px !important; height:100px !important; line-height: 100px; border-radius: 50%; object-fit: cover;"/>

                                            </div>
                                            <div class="col-sm-10 col-xs-7">
                                                <div class="item-title">
                                                    <h3><?= $row->name ?> </h3>
                                                </div>
                                                <div class="item-subtitle">
                                                    <h4><?= $row->location ?> </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>


                        </div>

                        <div class="swiper-button-prev testimonial-btn"></div>
                        <div class="swiper-button-next testimonial-btn"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="testimonial-img-2 wow fadeInRight" data-wow-delay=".2s">
                    <img src="<?= base_url() ?>uploads/<?= $home_other->image_testimonials ?>" alt="blog" width="690" height="730">
                </div>
            </div>
        </div>
    </div>
    <!-- Slider main container -->


</section>



<!--=====================================-->
<!--=   Newsletter     Start            =-->
<!--=====================================-->

<section class="newsletter-wrap1">
    <div class="shape-img1">
        <img
            src="<?= base_url() ?>assets/img/figure/shape13.png"
            alt="figure"
            width="356"
            height="130"
            />
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="newsletter-layout1">
                    <div class="item-heading">
                        <h2 class="item-title">Sign up for newsletter</h2>
                        <h3 class="item-subtitle">Get latest news and update</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" id="newsletter">
                <?php
                if (!empty($this->session->flashdata('success'))) {
                    echo "<div class='alert alert-success alert-dismissible'>" . $this->session->flashdata('success') . "</div>";
                }
                ?>
                <?php
                if (!empty($this->session->flashdata('exists'))) {
                    echo "<div class='alert alert-danger alert-dismissible'>" . $this->session->flashdata('exists') . "</div>";
                }
                ?>
                <div class="newsletter-form" >
                    <div class="input-group">
                        <form action="<?= base_url() ?>contact_us/subscription_form" method="post">

                            <input
                                type="email"
                                class="form-control" name="email"
                                placeholder="Enter e-mail addess" required
                                />
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=   Footer     Start                =-->
<!--=====================================-->
