

<style>

    .pagination li a {
        position: relative;
        display: inline-block;
        height: 50px;
        width: 50px;
        line-height: 50px;
        text-align: center;
        color: #141417;
        z-index: 1;
        border: 1px solid #e5e5e5;
        transition: all 500ms ease;
        font-size: 18px;
        font-family: "Roboto", sans-serif;
        font-weight: 600;
    }

    .item-img.align-img-cls img {
        width: 100%;
        height: 216px;
        object-fit: contain;
    }
    .pagination li:hover {
        background-color: var(--rt-primary-color);

    }



    .pagination li.active  {
        background-color: var(--rt-primary-color);
        border-color: var(--rt-primary-color);
        color: #ffffff;
    }
    .pagination li.active  {
        color: #fff;
    }

    .pagination li {
        position: relative;
        display: inline-block;
        margin: 0px 3.5px;
        font-size: 16px;
        height: 50px;
        width: 50px;
        line-height: 50px;
        text-align: center;
        color: #141417;
        border-radius:6px;
    }

    .pagination {
        position: relative;
        display: block;
        text-align:center;
        border-radius:6px;

    }
    .gal-photo {
        width:100%;
        heigh:300px;
        object-fit: contain;
        border: 5px solid red;
    }
</style>

<!--=====================================-->
<!--=   Breadcrumb     Start            =-->
<!--=====================================-->

<div class="breadcrumb-wrap breadcrumb-wrap-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>home">Home</a></li>
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

                    foreach ($blog as $row) {

                        $time = $row->created_at;
                        $mytime = ' ' . humanTiming($time) . ' ago';

                        $type = explode(',', $row->property_type);

                        $timestamp = $row->created_at;
                        $mth = date("m", $timestamp);
                        $d = date("d", $timestamp);
                        $t = date("l jS  F   Y", $timestamp);
                        $m = date("M", mktime(null, null, null, $mth));
                        ?>
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-box1 blog-box2 wow fadeInUp" data-wow-delay=".4s">
                                <div class="item-img align-img-cls">
                                    <a href="<?= base_url() ?>blog_view/<?= $row->slug ?>"><img src="<?= base_url() ?>uploads/<?= $row->image_one ?>" alt="blog" width="520" height="350"></a>
                                </div>
                                <div class="thumbnail-date">
                                    <div class="popup-date">
                                        <span class="day"><?= $d ?></span><span class="month"><?= $m ?></span>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="<?= base_url() ?>blog_view/<?= $row->slug ?> ">


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
                                        <h3><a href="<?= base_url() ?>blog_view/<?= $row->slug ?>"> <?= $row->title ?></a></h3>
                                    </div>
                                    <div class="blog-button">
                                        <!-- <a href="blog_view.php" class="item-btn">Read More<i class="fas fa-arrow-right"></i></a> -->
                                        <a href="<?= base_url() ?>blog_view/<?= $row->slug ?>" class="item-btn">Read More<i class="fas fa-arrow-right"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>

                <div class="pagination-style-1">
                    <ul class="pagination">
                        <!-- pagination dynamic -->
                        <?php echo $pagination['pagination'] ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 widget-break-lg sidebar-widget">
                <div class="widget widget-categoery-box">
                    <h3 class="widget-subtitle">Categories</h3>
                    <form action="" method="get">
                        <ul class="categoery-list">

                            <?php
                            foreach ($blog_categories as $row) {
                                $this->db->where("status", 1);
                                $this->db->where('blog_categories_id', $row->id);
                                $services = $this->db->count_all_results('blog_view');
                                ?>
                                <input type="hidden" value="<?= $row->id ?>" name="blog_category">
                                <li><a href="<?php base_url() ?>blog?blog_category=<?= $row->id ?>"><?= $row->category_name ?><span class="categoery-count"><?= $services ?></span></a></li>
                            <?php } ?>

                        </ul>
                    </form>
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
    <!--                                <div class="item-price"> ₹ <?= $row->price ?></div>-->
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="widget widget-taglist">
                    <!--                    <h3 class="widget-subtitle">Popular Tags</h3>
                                        <ul class="tag-list">
                    <?php foreach ($property_type as $row) { ?>
                                                                                                <li><a ><?= $row->name ?></a></li>
                    <?php } ?>
                                        </ul>-->
                </div>
            </div>
        </div>
    </div>
</section>

