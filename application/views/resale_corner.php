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
                <li class="breadcrumb-item active" aria-current="page">Resale Corner</li>
            </ol>
        </nav>
    </div>
</div>

<!--=====================================-->
<!--=   Blog     Start                  =-->
<!--=====================================-->

<section class="contact-wrap resale_corner_sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contact-box1">
                    <div class="contact-img">
                        <div class="contact-box2">
                            <div class="contact-content">
                                <h3 class="contact-title">Enter Your Project Details </h3>

                                <form class="contact-box" id="resellerForm" action=" "  method="POST">

                                    <?php
                                    if (!empty($this->session->flashdata('success'))) {
                                        echo "<div class='alert alert-success alert-dismissible'>" . $this->session->flashdata('success') . "</div>";
                                    }
                                    ?>

                                    <?php
                                    if (!empty($this->session->flashdata('failed'))) {
                                        echo "<div class='alert alert-danger alert-dismissible'>" . $this->session->flashdata('success') . "</div>";
                                    }
                                    ?>

                                    <?php
                                    if (!empty($this->session->flashdata('captcha_err'))) {
                                        echo "<div class='alert alert-danger alert-dismissible'>" . $this->session->flashdata('captcha_err') . "</div>";
                                    }
                                    ?>

                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label>Name *</label>
                                            <input type="text" class="form-control"  name="name" value="<?= set_value('name') ?>"  >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Phone *</label>
                                            <input type="text" class="form-control" name="phone" maxlength="10" minlength="10" id="phone" value="<?= set_value('phone') ?>" >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Project Name * </label>
                                            <select name="project_name" id="project_name" class="form-control" required >
                                                <option value="" selected disabled>-- Choose Project--</option>

                                                <?php foreach ($project_name as $row) { ?>
                                                    <option value="<?= $row->title ?>" <?= (!empty($this->input->get_post('project_name')) && $this->input->get_post('project_name') == $row->title) ? 'selected' : '' ?>   >  <?= $row->title ?></option>
                                                <?php } ?>
                                            </select>

                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Select Phase </label>
                                            <select name="phase" id="phase" class="form-control" required>
                                                <option  value="" selected disabled>-- Choose Phase --</option>
                                                <?php foreach ($project_phase as $row) { ?>

                                                    <option value="<?= $row->phase ?>" <?= (!empty($this->input->get_post('phase')) && $this->input->get_post('phase') == $row->phase) ? 'selected' : '' ?>   >  <?= $row->phase ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Plot No *</label>
                                            <input type="text" class="form-control" name="plot_no" value="<?= set_value('plot_no') ?>" >
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label>Location *</label>
                                            <input type="text" class="form-control" name="location" value="<?= set_value('location') ?>" >
                                        </div>


                                        <div class="row ml-2 mb-2">
                                            <div class="col-lg-8">
                                                <div style="width: 150px; height: 40px;" id="image_captcha">
                                                    <img src="<?= base_url() . 'resale_corner/captcha_get' ?>" id="get_captcha"  >
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mt-0 mb-2 ml-2">
                                            <a class="reload-captcha"><img style="background:#000000;" src="<?= base_url() ?>assets/img/refresh.png" width="25" height="25" /></a>
                                        </div>
                                        <div class="col-md-12 mb-4">

                                            <span class="text-input"><input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" id="captcha" name="captcha" class="form-control required" placeholder="Enter CAPTCHA" value=""  minlength="5", maxlength="5"></span>

                                        </div>


                                        <div class="form-group col-lg-12 mt-30">
                                            <button type="submit" class="item-btn">Submit</button>
                                        </div>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>

    </div>

</section>

<script type="text/javascript">


    String.prototype.ltrim = function () {
        var trimmed = this.replace(/^\s+/g, '');
        return trimmed;
    };



    $("#resellerForm").validate(
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
                            project_name:
                                    {
                                        required: true
                                    },
                            phase:
                                    {
                                        required: true
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
                            plot_no:
                                    {
                                        required: {
                                            depends: function () {
                                                var nameVar = $(this).val();
                                                $(this).val(nameVar.ltrim());
                                                return true;
                                            }
                                        }


                                    },
                            location:
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
                            location:
                                    {
                                        required: '*Please enter location'
                                    },
                            phone:
                                    {
                                        required: '*Please enter mobile number'
                                    },
                            plot_no:
                                    {
                                        required: '*Please Enter your plot number'
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




