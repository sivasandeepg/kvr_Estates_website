
<!--=====================================-->
<!--=   Footer     Start                =-->
<!--=====================================-->
<footer class="footer-area">
    <div class="footer-top footer-top-style" style=" background-image:url('<?= base_url() ?>uploads/<?= $site_settings->footer_bg_image ?>');" >
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-logo-area footer-logo-area-2">
                        <div class="item-logo">
                            <img src="<?= base_url() ?>uploads/<?= $site_settings->logo ?>" width="157" height="40" alt="logo" class="img-fluid">
                        </div>
                        <p> <?= $site_settings->about_site ?></p>
                        <div class="item-social">
                            <ul>
                                <li><a href="<?= $social_media->facebook ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>

                                <li><a href="<?= $social_media->twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>

                                <li><a href="<?= $social_media->instagram ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>

                                <li><a href="<?= $social_media->youtube ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-link footer-link-style-2">
                        <div class="footer-title footer-title-style2">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="item-link">
                            <ul>
                                <li><a href="<?= base_url() ?>about_us">About Us </a></li>
                                <li><a href="<?= base_url() ?>projects/ongoing_projects">Projects</a></li>
                                <li><a href="<?= base_url() ?>photos">Gallery</a></li>
                                <li><a href="<?= base_url() ?>blog">Blog</a></li>
                                <li><a href="<?= base_url() ?>contact_us">Contact Us </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-insta">
                        <div class="footer-title footer-title-style2">
                            <h3>Instagram</h3>
                        </div>
                        <div class="insta-link">
                            <ul>


                                <?php foreach ($instagram_images as $row) { ?>
                                    <li>
                                        <div class="item-img">
                                            <a href="<?= $row->instagram_url ?>"target="_blank" class="insta-pic">
                                                <img src="<?= base_url() ?>uploads/<?= $row->image ?>" width="86" height="73"
                                                     alt="instagram">
                                            </a>
                                            <div class="item-overlay">
                                                <a href="<?= $row->instagram_url ?>" target="_blank">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>







                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-contact footer-contact-style-2">
                        <div class="footer-title footer-title-style2">
                            <h3>Contact</h3>
                        </div>
                        <div class="footer-location">
                            <ul>
                                <li class="item-map"><i class="fas fa-map-marker-alt"></i> <?= strip_tags($site_settings->address) ?></li>
                                <li><a href="mailto:<?= $site_settings->contact_email ?>"><i class="fas fa-envelope"></i><?= $site_settings->contact_email ?></a></li>
                                <li><a href="tel:<?= $site_settings->phone_number ?>"><i class="fas fa-phone-alt"></i><?= $site_settings->phone_number ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom footer-bottom-style-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-area1">
                        <ul>
                            <li><a href="<?= base_url() ?>terms_of_use">Terms of Use</a></li>
                            <li><a href="<?= base_url() ?>privacy_policy">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="copyright-area2">
                        <p>2022 © All rights reserved to KVR Estates, Designed & Developed by <a href="https://thecolourmoon.com/" target="_blank">Colourmoon</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- start back to top -->
<a href="javascript:void(0)" id="back-to-top">
    <i class="fas fa-angle-double-up"></i>
</a>
<!-- End back to top -->

</div>
<div id="template-search" class="template-search">
    <button type="button" class="close">×</button>
    <form class="search-form">
        <input type="search" value="" placeholder="Search" />
        <button type="submit" class="search-btn btn-ghost style-1">
            <i class="flaticon-search"></i>
        </button>
    </form>
</div>

<script>
    $(".reload-captcha1").on('click', function (event) {
        $.ajax("<?php base_url() ?>../contact_us/captcha_get").done(function (data, textStatus, jqXHR) {
            $("#get_captcha")
                    // Replace old captcha code.
                    .attr('data-attr-captcha', data)
                    // Reload captcha image.
                    .attr('src', "<?php base_url() ?>../contact_us/captcha_get");
        });
    });
</script>



<script>
    $(".reload-captcha").on('click', function (event) {
        $.ajax("<?php base_url() ?>contact_us/captcha_get").done(function (data, textStatus, jqXHR) {
            $("#get_captcha")
                    // Replace old captcha code.
                    .attr('data-attr-captcha', data)
                    // Reload captcha image.
                    .attr('src', "<?php base_url() ?>contact_us/captcha_get");
        });
    });
</script>
<script>
    $(".reload-captcha").on('click', function (event) {
        $.ajax("resale_corner/captcha_get").done(function (data, textStatus, jqXHR) {
            $("#get_captcha")
                    // Replace old captcha code.
                    .attr('data-attr-captcha', data)
                    // Reload captcha image.
                    .attr('src', "resale_corner/captcha_get");
        });
    });
</script>


<script src="<?= base_url() ?>assets/js/jquery-3.6.0.min.js"></script>
<!-- Popper Js Start Here -->
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<!-- Bootstrap Js Start Here -->
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<!-- Wow Js Start Here -->
<script src="<?= base_url() ?>assets/js/wow.min.js"></script>
<!-- Owl Carousel Js Start Here -->
<script src="<?= base_url() ?>assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/js/swiper-bundle.min.js"></script>
<!-- Count down Js Start Here -->
<script src="<?= base_url() ?>assets/js/jquery.appear.min.js"></script>
<!-- Pop up Js Start Here -->
<script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
<!-- Nice Select Js Start Here -->


<?php
if ($this->uri->segment(1) == 'contact_us' || $this->uri->segment(1) == 'resale_corner') {
    ?>

    <?php
} else {
    ?>
    <script src="<?= base_url() ?>assets/js/jquery.nice-select.min.js"></script> 

<?php } ?>







<!-- Parallaxie Js Start Here -->
<script src="<?= base_url() ?>assets/js/parallaxie.js"></script>
<!-- Tween Js Start Here -->
<script src="<?= base_url() ?>assets/js/tween-max.js"></script>
<!-- Appear Js Start Here -->
<script src="<?= base_url() ?>assets/js/appear.min.js"></script>
<!-- Isotope Js Start Here -->
<script src="<?= base_url() ?>assets/js/isotope.pkgd.min.js"></script>
<!-- Imagesloaded Js Start Here -->
<script src="<?= base_url() ?>assets/js/imagesloaded.pkgd.min.js"></script>
<!-- noUiRangeSlider -->
<script src="<?= base_url() ?>assets/vendor/noUiSlider/nouislider.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/noUiSlider/wNumb.js"></script>
<!-- Validator Slider -->
<script src="<?= base_url() ?>assets/js/validator.min.js"></script>
<!-- Pannellum  -->
<script src="<?= base_url() ?>assets/js/pannellum.js"></script>
<!-- Zoom Image  -->
<script src="<?= base_url() ?>assets/js/jquery.zoom.min.js"></script>

<!-- Main Js Start Here -->
<script src="<?= base_url() ?>assets/js/main.js"></script>



<!--Camera JS with Required jQuery Easing Plugin-->
<script src="<?= base_url() ?>assets/js/easing.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/js/camera.min.js" type="text/javascript"></script>
<!-- Custom JS --->
<script src="<?= base_url() ?>assets/js/plugins.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.validate.min.js"></script>



<script type="text/javascript">


    String.prototype.ltrim = function () {
        var trimmed = this.replace(/^\s+/g, '');
        return trimmed;
    };

    $("#contactUs").validate(
            {
                //Rules for form validation
                rules:
                        {
                            name:
                                    {
                                        required: {
                                            depends: function () {
                                                var nameVar = $(this).val();
                                                $(this).val(nameVar.ltrim());
                                                return true;
                                            }
                                        }
                                    },
                            email:
                                    {
                                        required: {
                                            depends: function () {
                                                var nameVar = $(this).val();
                                                $(this).val(nameVar.ltrim());
                                                return true;
                                            }
                                        }


                                    },
                            phone:
                                    {

                                        required: {
                                            depends: function () {
                                                $(this).val($.trim($(this).val()));
                                                return true;
                                            }
                                        },

                                        minlength: 10,
                                        digits: true

                                    },
                            message:
                                    {
                                        required: {
                                            depends: function () {
                                                var nameVar = $(this).val();
                                                $(this).val(nameVar.ltrim());
                                                return true;
                                            }
                                        }


                                    },
                        },
                //message for form validation
                messages:
                        {
                            name:
                                    {
                                        required: '*Please enter name'
                                    },
                            email:
                                    {
                                        required: '*Please enter email'
                                    },
                            phone:
                                    {
                                        required: '*Please enter mobile number'
                                    },
                            message:
                                    {
                                        required: '*Please Enter your message'
                                    }
                        },
                //alert("Message sent successfully...");
                //Do not change code below
                errorPlacement: function (error, element) {
                    error.css('color', 'red');
                    error.css('font-weight', 'bold');
                    error.insertAfter(element);
                }
            });



</script>


<script>

    $(document).ready(function () {
        $("#phone").keypress(function (event) {
            return /\d/.test(String.fromCharCode(event.keyCode));
        });

    });


</script>


</body>

</html>