
<?php
$mytime = $project_view->created_at;
?>

<section class="single-listing-wrap1">
    <div class="container">
        <div class="single-property">
            <div class="content-wrapper">
                <div class="property-heading">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="single-list-cate">
                                <?php
                                $this->db->where('id', $project_view->property_type_id);
                                $property_type = $this->db->get('property_type')->row()->name;
                                ?>
                                <div class="item-categoery"><?= $property_type ?></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
<!--                            <div class="single-list-price">₹<?= $project_view->price ?></div>-->
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <div class="single-verified-area">
                                <div class="item-title">
                                    <h3>
                                        <a>  <?= $project_view->title ?></a>
                                    </h3>
                                </div>
                            </div>
                            <div class="single-item-address">
                                <ul>
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i>  <?= $project_view->address ?>
                                    </li>

                                    <li><i class="fas fa-eye"></i>Views:   <?= $project_view->view_count ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <div
                            class="featured-thumb-slider-area wow fadeInUp"
                            data-wow-delay=".4s"
                            >
                            <div class="feature-box3 swiper-container">
                                <div class="swiper-wrapper">
                                    <?php
                                    if (empty($project_images)) {
                                        $img = (object) array('image' => $project_view->image);
                                        $project_images = [$img];
                                    }
                                    foreach ($project_images as $row) {
                                        ?>

                                        <div class="swiper-slide">
                                            <div class="feature-img1 zoom-image-hover">
                                                <img
                                                    src="<?= base_url() ?>uploads/<?= $row->image ?>"
                                                    alt="feature"

                                                    />
                                            </div>
                                        </div>
                                    <?php } ?>



                                </div>
                            </div>


                            <div class="featured-thum-slider2 swiper-container">
                                <div class="swiper-wrapper">

                                    <?php foreach ($project_images as $row) { ?>

                                        <div class="swiper-slide">
                                            <div class="item-img">
                                                <img src="<?= base_url() ?>uploads/<?= $row->image ?>"  alt="feature"
                                                     style="width:154px ;height:100px;"  />
                                            </div>
                                        </div>
                                    <?php } ?>





                                </div>
                            </div>
                        </div>



                        <style>
                            .mycin{
                                color: var(--rt-primary-color);
                                font-size: 26px;
                                height: 52px;
                                width: 52px;
                                border-style: solid;
                                border-width: 1px;
                                border-color: #e8e9f1;
                                border-radius: 4px;
                                background-color: #ffffff;
                                box-shadow: 0px 4px 18px 0px rgb(188 192 202 / 26%);
                                padding: 7px 7px;
                                display: inline-block;
                                line-height: 46px;
                                text-align: center;
                            }
                            .item_headm{
                                color: #878c9f;
                                font-size: 15px;
                            }
                            .item_titlem{
                                color: #212121;
                                font-weight: 500;
                                font-size: 15px;
                            }

                            .flaticon-parking{

                            }
                        </style>
                        <div class="single-listing-box1">
                            <div class="overview-area">
                                <h3 class="item-title">Overview</h3>
                                <div class="row">
                                    <?php if (!empty($project_view->property_id)) { ?>
                                        <div class="col-3 text-center">
                                            <i class="flaticon-comment mycin"></i>
                                            <p class="item_headm ">ID No <br>
                                                <span class="item_titlem"> <?= $project_view->property_id ?> </span></p>

                                        </div>
                                    <?php } ?>
                                    <?php if (!empty($project_view->property_type_id)) { ?>
                                        <div class="col-3 text-center">
                                            <i class="flaticon-home mycin"></i>
                                            <p class="item_headm ">Type <br>
                                                <span class="item_titlem"> <?= $property_type ?> </span></p>

                                        </div>
                                    <?php } ?>
                                    <?php if (!empty($project_view->total_bed_rooms)) { ?>
                                        <div class="col-3 text-center">
                                            <i class="flaticon-bed mycin"></i>
                                            <p class="item_headm ">Bed Room  <br>
                                                <span class="item_titlem"> <?= $project_view->total_bed_rooms ?> </span></p>

                                        </div>
                                    <?php } ?>
                                    <?php if (!empty($project_view->total_taps)) { ?>
                                        <div class="col-3 text-center">
                                            <i class="flaticon-shower mycin"></i>
                                            <p class="item_headm ">Tap's  <br>
                                                <span class="item_titlem"> <?= $project_view->total_taps ?> </span></p>

                                        </div>
                                    <?php } ?>
                                    <?php if (!empty($project_view->is_parking_available)) { ?>
                                        <div class="col-3 text-center">
                                            <i class="flaticon-home mycin"></i>
                                            <p class="item_headm ">Parking  <br>
                                                <span class="item_titlem"> <?= $project_view->is_parking_available ?> </span></p>

                                        </div>
                                    <?php } ?>

                                    <?php if (!empty($project_view->area)) { ?>
                                        <div class="col-3 text-center">
                                            <i class="flaticon-home mycin"></i>
                                            <p class="item_headm ">Area  <br>
                                                <span class="item_titlem"> <?= $project_view->area ?>  </span></p>

                                        </div>
                                    <?php } ?>

                                    <?php if (!empty($project_view->area_land_size)) { ?>
                                        <div class="col-3 text-center">
                                            <i class="flaticon-pencil mycin"></i>
                                            <p class="item_headm ">Land Size  <br>
                                                <span class="item_titlem"> <?= $project_view->area_land_size ?> </span></p>

                                        </div>
                                    <?php } ?>

                                    <?php if (!empty($project_view->year_of_build)) { ?>
                                        <div class="col-3 text-center">
                                            <i class="flaticon-two-overlapping-square mycin"></i>
                                            <p class="item_headm ">Year Build  <br>
                                                <span class="item_titlem"> <?= $project_view->year_of_build ?> </span></p>

                                        </div>
                                    <?php } ?>

                                </div>


                                <!----------------------------------------------------------------------------->
                                <?php
                                $this->db->where('id', $project_view->phase);
                                $proj_phase = $this->db->get('project_phase')->row()->phase;
                                ?>
                                <?php
                                $this->db->where('id', $project_view->property_type_id);
                                $property_type = $this->db->get('property_type')->row()->name;
                                ?>

                                <!----------------------------------------------------------------------------->

                            </div>

                            <div class="overview-area listing-area">
                                <h3 class="item-title">About This Listing</h3>
                                <p> <?= $project_view->description ?> </p>

                            </div>
                            <div
                                class="overview-area single-details-box table-responsive"
                                >
                                <h3 class="item-title">Details</h3>
                                <table class="table-box1">


                                    <?php if (!empty($project_view->property_id && $project_view->rera_number)) { ?>
                                        <tr>
                                            <?php if (!empty($project_view->property_id)) { ?>
                                                <td class="item-bold">Id No</td>
                                                <td><?= $project_view->property_id ?></td>
                                            <?php } ?>

                                            <?php if (!empty($project_view->rera_number)) { ?>
                                                <td class="item-bold">RERA No</td>
                                                <td><?= $project_view->rera_number ?> </td>
                                            <?php } ?>
                                        </tr>
                                    <?php } ?>



                                    <?php if (!empty($project_view->lp_number && $project_view->area)) { ?>
                                        <tr>
                                            <?php if (!empty($project_view->lp_number)) { ?>
                                                <td class="item-bold">Lp Number </td>
                                                <td><?= $project_view->lp_number ?></td>
                                            <?php } ?>

                                            <?php if (!empty($project_view->area)) { ?>
                                                <td class="item-bold">Land Area </td>
                                                <td><?= $project_view->area ?> </td>
                                            <?php } ?>
                                        </tr>
                                    <?php } ?>


                                    <?php if (!empty($property_type && $project_view->area)) { ?>
                                        <tr>
                                            <?php if (!empty($project_view->lp_number)) { ?>
                                                <td class="item-bold">Property Type</td>
                                                <td><?= $property_type ?></td>
                                            <?php } ?>

                                            <?php if (!empty($project_view->phase)) { ?>
                                                <td class="item-bold">Project Phase </td>
                                                <td><?= $proj_phase ?> </td>
                                            <?php } ?>
                                        </tr>
                                    <?php } ?>



                                    <?php if (!empty($project_view->lp_number && $project_view->area)) { ?>
                                        <tr>
                                            <?php if (!empty($project_view->year_of_build)) { ?>
                                                <td class="item-bold">Year Build</td>
                                                <td><?= $project_view->year_of_build ?></td>
                                            <?php } ?>

                                            <?php if (!empty($project_view->property_present_status)) { ?>
                                                <td class="item-bold">Property Status</td>
                                                <td><?= str_replace('_', ' ', $project_view->property_present_status) ?></td>
                                            <?php } ?>
                                        </tr>
                                    <?php } ?>


                                    <?php if (!empty($project_view->area_land_size)) { ?>
                                        <tr>
                                            <?php if (!empty($project_view->area_land_size)) { ?>
                                                <td class="item-bold"> Size</td>
                                                <td><?= $project_view->area_land_size ?></td>
                                            <?php } ?>


                                            <td class="item-bold"></td>
                                            <td></td>

                                        </tr>
                                    <?php } ?>






                                </table>
                            </div>


                            <div class="overview-area ameniting-box">
                                <h3 class="item-title">Features & Amenities</h3>
                                <div class="row">

                                    <?php foreach ($project_view->features_and_amenities as $row) { ?>
                                        <div class="col-lg-4">
                                            <ul class="ameniting-list">
                                                <li>
                                                    <i class="fas fa-check-circle"></i><?= $row->name ?>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php } ?>

                                </div>
                            </div>


                            <div class="overview-area map-box">
                                <h3 class="item-title">Map Location</h3>
                                <div class="item-map">

                                    <iframe
                                        src="<?= $project_view->map_location ?>"
                                        width="731"
                                        height="349"
                                        style="border: 0"
                                        allowfullscreen=""
                                        loading="lazy"
                                        ></iframe>
                                </div>
                            </div>

                            <?php if (!empty($floor_plans_single->id)) { ?>
                                <div class="overview-area floor-plan-box">
                                    <h3 class="item-title">Floor Plans</h3>
                                    <div id="accordion" class="accordion">
                                        <?php
                                        if (!empty($floor_plans)) {
                                            $jk = 0;
                                            foreach ($floor_plans as $row) {
                                                ?>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <div
                                                            class="heading-title <?= ($jk === 0) ? '' : ' collapsed' ?>"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne<?= $row->id ?>"
                                                            aria-expanded="<?= ($jk === 0) ? 'true' : '' ?>"
                                                            role="button"
                                                            >
                                                            <span><?= ucwords($row->title) ?></span>
                                                            <div class="card-list">
                                                                <ul>
                                                                    <li>
                                                                        <i class="flaticon-two-overlapping-squar"></i
                                                                        ><span>Land Area: <?= $project_view->area ?></span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="flaticon-two-overlapping-squar"></i
                                                                        ><span>Area land size: <?= $project_view->area_land_size ?></span>
                                                                    </li>
                                                                    <li>
            <!--                                                                        <i
                                                                            class="flaticon-two-overlapping-square"
                                                                            ></i
                                                                        ><span><?= $row->area ?> Sqft</span>
                                                                    </li>-->
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        id="collapseOne<?= $row->id ?>"
                                                        class="collapse <?= ($jk === 0) ? 'show' : '' ?>"
                                                        data-bs-parent="#accordion"
                                                        >
                                                        <div class="card-body">
                                                            <div class="item-img">
                                                                <a href="<?= base_url() ?>uploads/<?= $row->image ?> " target="_blank"> <img src="<?= base_url() ?>uploads/<?= $row->image ?>"
                                                                                                                                             alt="shape"  /> </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                $jk++;
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                            <?php } ?>


                            <?php if (!empty($project_view->property_youtube_link)) { ?>
                                <div class="overview-area video-box1">
                                    <h3 class="item-title">Property Video</h3>
                                    <div class="item-img">
                                        <img
                                            src="<?= base_url() ?>uploads/<?= $project_view->project_youtube_thumb ?>"
                                            alt="map"
                                            width="731"
                                            height="349"
                                            />
                                        <div class="play-button">
                                            <div class="item-icon">
                                                <a
                                                    href="http://www.youtube.com/watch?v=<?= $project_view->property_youtube_link ?>"
                                                    class="play-btn play-btn-big"
                                                    >
                                                    <span class="play-icon style-2">
                                                        <i class="fas fa-play"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="col-lg-4 widget-break-lg sidebar-widget">



                        <div class="widget widget-contact-box">
                            <h3 class="widget-subtitle">Enquiry Now</h3>

                            <form class="contact-box" id="contactUs"  action =" " method="POST" >
                                <?php
                                if (!empty($this->session->flashdata('success'))) {
                                    echo "<div class='alert alert-success alert-dismissible'>" . $this->session->flashdata('success') . "</div>";
                                }
                                ?>
                                <?php
                                if (!empty($this->session->flashdata('captcha_err'))) {
                                    echo "<div class='alert alert-danger alert-dismissible'>" . $this->session->flashdata('captcha_err') . "</div>";
                                }
                                ?>

                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="name"
                                            placeholder="Your Full Name"
                                            value="<?= set_value('name') ?>"
                                            />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="phone"
                                            id="phone"
                                            maxlength="10"
                                            minlength="10"
                                            placeholder="Phone"
                                            value="<?= set_value('phone') ?>"
                                            />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input
                                            type="email"
                                            class="form-control"
                                            name="email"
                                            placeholder="E-mail"
                                            value="<?= set_value('email') ?>"
                                            />
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <textarea
                                            name="message"
                                            id="message"
                                            class="form-text"
                                            placeholder="Message"
                                            cols="30"
                                            rows="4"
                                            >
                                                <?= set_value('message') ?>
                                        </textarea>
                                    </div>


                                    <div class="form-group col-lg-12">
                                        <div class="col-lg-4">
                                            <div style="width: 150px; height: 40px;" id="image_captcha">
                                                <img src="<?=
                                                base_url() .
                                                'contact_us/captcha_get'
                                                ?>" id="get_captcha">
                                            </div>
                                        </div>

                                        <div class="col-lg-2">
                                            <a class="reload-captcha1"><img style="background:#000000;" src="<?= base_url() ?>assets/img/refresh.png" width="25" height="25" /></a>
                                        </div>

                                    </div><br><br>

                                    <div class="col-md-12 mb-4">

                                        <span class="text-input"><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" id="captcha" name="captcha" class="form-control required" placeholder="Enter CAPTCHA" value=""  minlength="5", maxlength="5"></span>

                                    </div>
                                    <div class="form-group col-lg-12">
                                        <div class="advanced-button">
                                            <button type="submit" class="item-btn">
                                                Send Message <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>



                                </div>
                            </form>
                        </div>
                        <div class="widget widget-listing-box1">
                            <h3 class="widget-subtitle">Latest Project </h3>



                            <?php
                            $i = 0;
                            foreach ($latest_projects as $row) {
                                $i++;
                                if ($i == 1) {
                                    ?>


                                    <div class="item-img">
                                        <a href="<?= base_url() ?>project_view/<?= $row->slug ?>"
                                           ><img
                                                src="<?= base_url() ?>uploads/<?= $row->image ?>"
                                                alt="widget"
                                                width="540"
                                                height="360"
                                                /></a>
                                        <div class="item-category-box1">
                                            <div class="item-category">Villa</div>
                                        </div>
                                    </div>

                                    <div class="widget-content">
                                        <h4 class="item-title">
                                            <a href="<?= base_url() ?>project_view/<?= $row->slug ?>"
                                               > <?= $row->title ?></a
                                            >
                                        </h4>
                                        <div class="location-area">
                                            <i class="flaticon-maps-and-flags"></i> <?= $row->address ?></div>
        <!--                                        <div class="item-price">₹<?= $row->price ?></div>-->
                                    </div>

                                    <?php
                                } else {
                                    ?>




                                    <div class="widget-listing">
                                        <div class="item-img">
                                            <a href="<?= base_url() ?>project_view/<?= $row->slug ?>"
                                               ><img
                                                    src="<?= base_url() ?>uploads/<?= $row->image ?>"
                                                    alt="widget"
                                                    width="120"
                                                    height="102"
                                                    /></a>
                                        </div>
                                        <div class="item-content">
                                            <h5 class="item-title">
                                                <a href="<?= base_url() ?>project_view/<?= $row->slug ?>"
                                                   ><?= $row->title ?></a
                                                >
                                            </h5>
                                            <div class="location-area">
                                                <i class="flaticon-maps-and-flags"></i><?= $row->address ?>
                                            </div>
        <!--                                            <div class="item-price">₹<?= $row->price ?></div>-->
                                        </div>
                                    </div>

                                    <?php
                                }
                            }
                            ?>

                        </div>


                        <!--                        <div class="widget widget-post pt-5 mt-5">
                                                    <div class="item-content">
                                                        <div class="post-button">
                                                            <a href="<?= base_url() ?>uploads/<?= $project_view->brocher_file ?>" class="item-btn">Download brochure </a>
                                                        </div>
                                                    </div>
                                                </div>-->



                        <div class="widget widget-post">
                            <div class="item-img">
                                <img src="<?= base_url() ?>uploads/<?= $project_view->image ?>" alt="widget" style="width:510px; height:120px;" />
                                <div class="circle-shape">
                                    <span class="item-shape"></span>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4 class="item-title">Our Brochure</h4>

                                <div class="post-button">
                                    <a href="<?= base_url() ?>uploads/<?= $project_view->brocher_file ?>" class="item-btn">Download brochure </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=   Property     Start              =-->
<!--=====================================-->

<section class="property-wrap1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-7 col-sm-7">
                <div class="item-heading-left">
                    <span class="section-subtitle">Our Projects</span>
                    <h2 class="section-title">Latest <?= $property_type ?> Projects</h2>
                    <div class="bg-title-wrap" style="display: block">
                        <span class="background-title solid">Projects</span>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-5 col-sm-5">
                <div class="heading-button">
                    <a href="  <?php base_url() ?>../projects/search?property=<?= $project_view->property_type_id ?> " class="heading-btn item-btn2"
                       >See All</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">




            <?php foreach ($latest_projects_list as $row) { ?>

                <?php
                $this->db->where('id', $row->property_type_id);
                $property_type = $this->db->get('property_type')->row()->name;
                ?>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
                        <div class="item-img">
                            <a href="<?= base_url() ?>project_view/<?= $row->slug ?>"><img src="<?= base_url() ?>uploads/<?= $row->image ?>" alt="blog" style="width:510px; height:250px;" ></a>
                            <div class="item-category-box1">
                                <div class="item-category"> <?= $property_type ?></div>
                            </div>
                            <div class="rent-price">
    <!--                                <div class="item-price"> ₹ <?= $row->price ?></div>-->
                            </div>
                        </div>
                        <div class="item-category10"><a href="<?= base_url() ?>projects/search?property=<?= $row->property_type_id ?>"><?= $property_type ?></a></div>
                        <div class="item-content">
                            <div class="verified-area">
                                <h3 class="item-title"><a href="<?= base_url() ?>project_view/<?= $row->slug ?>"><?= $row->title ?></a></h3>
                            </div>
                            <div class="location-area"><i class="flaticon-maps-and-flags"></i><?= $row->address ?></div>
                            <div class="item-categoery3 item-categoery4">
                                <ul>
                                    <li><i class="flaticon-bed"></i>Beds: <?= $row->total_bed_rooms ?></li>
                                    <li><i class="flaticon-shower"></i>Baths: <?= $row->total_baths_rooms ?></li>
                                    <li><i class="flaticon-two-overlapping-square"></i>931 <?= $row->area ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>





        </div>
    </div>
</section>



<script>

    $(document).ready(function () {
        $("#phone").keypress(function (event) {
            return /\d/.test(String.fromCharCode(event.keyCode));
        });

    });


</script>