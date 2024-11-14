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
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                <li class="breadcrumb-item active" aria-current="page">Videos</li>
            </ol>
        </nav>
    </div>
</div>

<!--=====================================-->
<!--=   About     Start                 =-->
<!--=====================================-->

<section class="about-wrap-4 motion-effects-wrap">

    <div class="container">
        <div class="row">
            <?php foreach ($videos as $row) { ?>
                <div class="col-lg-4 col-md-6">

                    <div class="item-gall">
                       <!-- <iframe width="100%" height="315" src="https://youtu.be/<?= $row->videos ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?= $row->videos ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>

                </div>
            <?php } ?>

        </div>
    </div>

    <!------------------------>
    <div class="pagination-style-1">
        <ul class="pagination">
            <!-- pagination dynamic -->
            <?php echo $pagination['pagination'] ?>
        </ul>
    </div>
    <!------------------------->


</section>

