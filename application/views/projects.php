
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
                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Projects</li>
                <li class="breadcrumb-item active" aria-current="page"><?=
                    ucwords(str_replace('_', ' ', $project_name)
                    )
                    ?></li>

            </ol>
        </nav>
    </div>
</div>

<!--=====================================-->
<!--=   Grid     Start                  =-->
<!--=====================================-->

<div id="header-bottombar" class="header-bottombar-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-9 col-lg-9">
                <form action="" class="map-form" method="GET">
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
                                        $selected_cities = $this->input->get_post("city");

                                        foreach ($cities as $city) {
                                            $i++;
                                            ?>
                                            <li class="option">
                                                <input id="a-<?= $i ?>" onclick="check()" class="checkbox-custom" value="<?= $city->id ?>" type="checkbox" name="city[]" <?= (!empty($selected_cities) && in_array($city->id, $selected_cities)) ? 'checked' : '' ?>>
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

<section class="grid-wrap1 grid-wrap2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row justify-content-center">

                    <?php foreach ($projects as $row) { ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-box2 property-box8 wow animated fadeInUp" data-wow-delay=".6s">
                                <div class="item-img">
                                    <a href="<?= base_url() ?>project_view/<?= $row->slug ?>"><img src=" <?= base_url() ?>uploads/<?= $row->image ?>" alt="blog" style="width:510px; height:250px;"    ></a>
                                    <div class="item-category-box1">
                                        <?php
                                        $this->db->where('id', $row->property_type_id);
                                        $property_type = $this->db->get('property_type')->row()->name;
                                        ?>
                                        <div class="item-category"><?= $property_type ?></div>
                                    </div>
                                    <div class="rent-price">
    <!--                                        <div class="item-price">₹<?= $row->price ?></div>-->
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
    <!--                                            <li><i class="flaticon-bed"></i>Beds: <?= $row->total_bed_rooms ?></li>
                                            <li><i class="flaticon-shower"></i>Baths: <?= $row->total_baths_rooms ?></li>-->
                                            <li><i class="flaticon-two-overlapping-square"> </i>Area land size : <?= $row->area_land_size ?> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>


                </div>
                <!------------------------>
                <div class="pagination-style-1">
                    <ul class="pagination">
                        <!-- pagination dynamic -->
                        <?php echo $pagination['pagination'] ?>
                    </ul>
                </div>
                <!------------------------->

            </div>
        </div>
    </div>
</section>


<script>
    $(".chosen-select").chosen({
        no_results_text: "Oops, nothing found!"
    })
</script>