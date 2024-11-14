<?php
$time = $blog_view->created_at;
$mytime = ' ' . ago_timing($time) . ' ago';
?>
<!--=====================================-->
<!--=   Breadcrumb     Start            =-->
<!--=====================================-->



<div class="breadcrumb-wrap breadcrumb-wrap-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
</div>

<section class="blog-wrap5">
    <div class="container">
        <div class="row gutters-40">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-box1 blog-box3 wow fadeInUp" data-wow-delay=".4s">
                            <div class="item-img img-style-3">
                                <a href="#"><img src="<?= base_url() ?>uploads/<?= $blog_view->image_one ?>" alt="blog" width="739" height="399"></a>
                            </div>
                            <div class="item-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li class="theme-cat"><a >by admin</a></li>
                                        <li class="calendar-icon"><a ><i class="far fa-calendar-alt"></i><?= date("F j, Y, ", $blog_view->created_at) ?></a></li>
                                        <li><a>

                                                <?= $categories ?>

                                            </a></li>
                                        <li><a href="#"><?= $mytime ?></a></li>
                                    </ul>
                                </div>
                                <div class="heading-title title-style-2">

                                    <h3><?= $blog_view->title ?></h3>

                                    <p><?= $blog_view->blog_view_description_one ?> </p>
                                </div>


                                <!-- <?php if (!empty($blog_view->quotation)) { ?>
                                              <div class="quotation-style">
                                                  <blockquote class="item-quotation"> <?= $blog_view->quotation ?>
                                                  </blockquote>
                                              </div>
                                <?php } ?>-->

                                <p class="style-2"> <?= $blog_view->blog_view_description_two ?> </p>




                                <div class="row gutters-10">

                                    <?php if (!empty($blog_view->image_two)) { ?>
                                        <div class="col-lg-6 col-md-6 col-sm-6">

                                            <div class="single-blog-img">
                                                <img src="<?= base_url() ?>uploads/<?= $blog_view->image_two ?>" alt="blog" width="363" height="240">
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php if (!empty($blog_view->image_three)) { ?>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="single-blog-img">
                                                <img src="<?= base_url() ?>uploads/<?= $blog_view->image_three ?>" alt="blog" width="363" height="240">
                                            </div>
                                        </div>
                                    <?php } ?>





                                    <?php if (!empty($blog_view->image_four)) { ?>
                                        <div class="col-lg-12">
                                            <div class="single-blog-img single-blog-img2">
                                                <img src="<?= base_url() ?>uploads/<?= $blog_view->image_four ?>" alt="blog" width="739" height="370">
                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>


                                <?php if (!empty($blog_view->points)) { ?>
                                    <div class="heading-title title-style-2">
                                        <!-- <h3><a href="#">12 Walkable Cities Where You Can Live Affordably</a></h3> -->
                                        <p class="style-3"><?= $blog_view->points ?> </p>
                                    </div>
                                <?php } ?>


                            </div>
                        </div>
                    </div>
                </div>

            </div>





            <div class="col-lg-4 widget-break-lg sidebar-widget">
                <div class="widget widget-categoery-box">
                    <h3 class="widget-subtitle">Categories</h3>
                    <ul class="categoery-list">
                        <?php
                        foreach ($blog_categories as $row) {

                            $this->db->where("status", 1);
                            $this->db->where('blog_categories_id', $row->id);
                            $services = $this->db->count_all_results('blog_view');
                            ?>
                            <input type="hidden" value="<?= $row->id ?>" name="blog_category">
                            <li><a href="<?php base_url() ?>../blog?blog_category=<?= $row->id ?>"><?= $row->category_name ?><span class="categoery-count"><?= $services ?></span></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="widget widget-listing-box1">
                    <h3 class="widget-subtitle">Latest Project </h3>


                    <?php foreach ($latest_blogs as $row) { ?>
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
    <!--                                <div class="item-price"> ₹<?= $row->price ?></div>-->
                            </div>
                        </div>
                    <?php } ?>

                </div>


                <!--                <div class="widget widget-taglist">
                                    <h3 class="widget-subtitle">Popular Tags</h3>
                                    <ul class="tag-list">
                <?php foreach ($property_type as $row) { ?>
                                                                                                                                                        <li><a href="#"><?= $row->name ?></a></li>
                <?php } ?>
                    </ul>
                </div>-->


            </div>






        </div>
    </div>
</section>


