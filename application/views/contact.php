<style>
    .resale_corner_sec .nice-select .list {
        width: 100% !important;
        height: 200px;
        overflow-y: scroll;
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
                <li class="breadcrumb-item active" aria-current="page">Contact Us <?= $name; ?></li>
            </ol>
        </nav>
    </div>
</div>

<!--=====================================-->
<!--=   Blog     Start                  =-->
<!--=====================================-->


<section class="contact-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-box1">
                    <div class="contact-img">
                        <div class="contact-box2">
                            <div class="contact-content">
                                <h3 class="contact-title">Enquiry Now</h3>



                                <form   class="contact-box" id="contactUs" action ="" method="post">
                                    <?php
                                    if (!empty($this->session->flashdata('success'))) {
                                        echo "<div class='alert alert-success'>" . $this->session->flashdata('success') . "</div>";
                                    }
                                    ?>
                                    <?php
                                    if (!empty($this->session->flashdata('captcha_err'))) {
                                        echo "<div class='alert alert-danger   '>    " . $this->session->flashdata('captcha_err') . "</div>";
                                    }
                                    ?>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="name" >Name *</label>
                                            <input type="text" class="form-control demo-input" name="name" placeholder="First Name*"  value="<?= set_value('name') ?>" >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Phone *</label>
                                            <input type="text" class="form-control numbers_only" name="phone" id="phone"  maxlength="10" minlength="10"  placeholder="Phone*"  value="<?= set_value('phone') ?>"  >
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Email *</label>
                                            <input type="email" class="form-control demo-input" name="email" placeholder="Email*"  value="<?= set_value('email') ?>"   >
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label>Select city</label>
                                            <select name="city" id="city" class="form-control"required>
                                                <option  value="" selected disabled>-- Choose city --</option>
                                                <?php foreach ($city as $row) { ?>

                                                    <option value="<?= $row->name ?>" <?= (!empty($this->input->get_post('city')) && $this->input->get_post('city') == $row->name) ? 'selected' : '' ?>   >  <?= $row->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>


                                        <div class="form-group col-lg-6">
                                            <label>Select Project Type </label>
                                            <select name="type" id="type" class="form-control"required>
                                                <option  value="" selected disabled>-- Choose type --</option>
                                                <?php foreach ($type as $row) { ?>

                                                    <option value="<?= $row->name ?>" <?= (!empty($this->input->get_post('type')) && $this->input->get_post('type') == $row->name) ? 'selected' : '' ?>   >  <?= $row->name ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>


                                        <div class="form-group col-lg-12">
                                            <label>Message *</label>
                                            <textarea name="message" id="message" class="form-text"  placeholder="Message" cols="30" rows="5"  ><?= set_value('message') ?>  </textarea>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div style="width: 150px; height: 40px;" id="image_captcha">
                                                    <img src="<?= base_url() . 'contact_us/captcha_get' ?>" id="get_captcha">
                                                </div>
                                            </div>
                                            <div class="mt-1 ml-2">
                                                <a class="reload-captcha"><img style="background:#000000;" src="<?= base_url() ?>assets/img/refresh.png" width="25" height="25" /></a>
                                            </div>
                                        </div><br><br><br>

                                        <div class="col-md-12 mb-4">

                                            <span class="text-input"><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" id="captcha" name="captcha" class="form-control required" placeholder="Enter CAPTCHA" value=""  minlength="5", maxlength="5"></span>

                                        </div>

                                        <div class="form-group col-lg-12">
                                            <button type="submit" class="item-btn">Send message</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-content" >
                    <h3 class="contact-title">Office Information</h3>
                    <div class="contact-list">
                        <ul>
                            <li><?= $site_settings->address ?></li>
                        </ul>
                    </div>
                    <div class="phone-box" >
                        <div class="item-lebel">Emergency Call<?= $site_settings->iframe ?> :</div>
                        <div class="phone-number"><?= $site_settings->contact_number ?></div>
                        <div class="item-icon"><i class="fas fa-phone-alt"></i></div>
                    </div>
                    <div class="social-box" id="enquiry_form">
                        <div class="item-lebel">Social Share :</div>
                        <ul class="item-social">
                            <li><a href="<?= $social_media->facebook ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?= $social_media->twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?= $social_media->instagram ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="<?= $social_media->youtube ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        <div class="item-icon"><i class="fas fa-share-alt"></i></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<div class="container-fluid p-0">
    <?= $site_settings->google_maps ?>
</div>



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

                            type:
                                    {
                                        required: true
                                    },

                            city:
                                    {
                                        required: true
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
                            type:
                                    {
                                        required: '*Please enter Project Type'
                                    },
                            city:
                                    {
                                        required: '*Please enter City Name'
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








