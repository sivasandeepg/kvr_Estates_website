</div>
</div>
</div>
<!-- Mainly scripts -->

<script src="<?= base_url() ?>admin_assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>admin_assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?= base_url() ?>admin_assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Flot -->
<script src="<?= base_url() ?>admin_assets/js/plugins/flot/jquery.flot.js"></script>
<script src="<?= base_url() ?>admin_assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?= base_url() ?>admin_assets/js/plugins/flot/jquery.flot.spline.js"></script>
<script src="<?= base_url() ?>admin_assets/js/plugins/flot/jquery.flot.resize.js"></script>
<script src="<?= base_url() ?>admin_assets/js/plugins/flot/jquery.flot.pie.js"></script>

<!-- Peity -->
<script src="<?= base_url() ?>admin_assets/js/plugins/peity/jquery.peity.min.js"></script>
<script src="<?= base_url() ?>admin_assets/js/demo/peity-demo.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?= base_url() ?>admin_assets/js/inspinia.js"></script>
<script src="<?= base_url() ?>admin_assets/js/plugins/pace/pace.min.js"></script>


<!--For Dashboard Page Only because charts is there-->
<!-- GITTER -->
<script src="<?= base_url() ?>admin_assets/js/plugins/gritter/jquery.gritter.min.js"></script>

<!-- Sparkline -->
<script src="<?= base_url() ?>admin_assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- Sparkline demo data  -->
<script src="<?= base_url() ?>admin_assets/js/demo/sparkline-demo.js"></script>

<!-- ChartJS-->
<script src="<?= base_url() ?>admin_assets/js/plugins/chartJs/Chart.min.js"></script>
<!--For Dashboard Page only because charts is there end-->




<!-- jQuery UI -->
<script src="<?= base_url() ?>admin_assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Toastr -->
<script src="<?= base_url() ?>admin_assets/js/plugins/toastr/toastr.min.js"></script>

<!--Loading Overlay-->
<script src="<?= base_url() ?>admin_assets/js/loadingoverlay_progress.min.js"></script>
<script src="<?= base_url() ?>admin_assets/js/loadingoverlay.min.js"></script>

<!--Choosen Select-->
<script src="<?= base_url() ?>admin_assets/js/chosen.jquery.min.js"></script>
<script>$(function () {
        $(".chosen-select").chosen({no_results_text: "Oops, nothing found!"});
    });</script>

<script src="<?= base_url() ?>admin_assets/js/jquery.fancybox.js"></script>
<script src="<?= base_url() ?>admin_assets/js/jquery.fancybox-media.js"></script>
<script src="<?= base_url() ?>admin_assets/js/jquery.datetimepicker.js"></script>
<script src="<?= base_url() ?>admin_assets/js/jquery.validate.min.js"></script>

<script src="<?= base_url() ?>admin_assets/js/plugins/dataTables/datatables.min.js"></script>
<script src="<?= base_url() ?>admin_assets/js/additional-methods.js"></script>
<script>
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            helpers: {
                overlay: {
                    speedIn: 0,
                    speedOut: 0,
                    opacity: 0.5
                }
            }
        });
        $('.fancybox-media').fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            helpers: {
                media: {}
            }
        });
        $('.datepicker').datetimepicker({
            timepicker: false,
            format: 'm-d-Y',
            scrollInput: false
        });
        $(document).on('mousewheel', '.datepicker', function () {
            return false;
        });
    });
<?php
if (isset($ajax_base_relation_result)) {
    $ajax_keys = array_keys($ajax_base_relation_result);
    for ($aj = 0, $ajl = count($ajax_keys); $aj < $ajl; $aj++) {
        ?>
            $(document).on("change", "#<?= $ajax_base_relation_result[$ajax_keys[$aj]]["parent_field_name"] ?>", function () {
                console.log('<?= $ajax_base_relation_result[$ajax_keys[$aj]]["parent_field_name"] ?>=' + $(this).val() + "&type=child_data&db_table_name=<?= $ajax_base_relation_result[$ajax_keys[$aj]]["filter_from_table"] ?>&field_name=<?= $ajax_base_relation_result[$ajax_keys[$aj]]["parent_field_name"] ?>&selected_id=<?= $this->uri->segment(4) ?>");

                $.LoadingOverlay("show");
                $.ajax({
                    data: '<?= $ajax_base_relation_result[$ajax_keys[$aj]]["parent_field_name"] ?>=' + $(this).val() + "&type=child_data&db_table_name=<?= $ajax_base_relation_result[$ajax_keys[$aj]]["filter_from_table"] ?>&field_name=<?= $ajax_base_relation_result[$ajax_keys[$aj]]["parent_field_name"] ?>&selected_id=<?= $this->uri->segment(4) ?>",
                    type: "POST",
                    async: false,
                    url: '<?= base_url() ?>admin/<?= $this->uri->segment(2) ?>',
                                success: function (response) {
                                    var jsdata = JSON.parse(response);
                                    $("#<?= $ajax_keys[$aj] ?>").html("");
                                    var label = $("#<?= $ajax_keys[$aj] ?>").parents(".form-group").find("label").text();
                                    var html = "<option>Choose " + label + "</option>";
                                    for (var i = 0, l = jsdata.length; i < l; i++) {
                                        var is_selected = "";
                                        if (jsdata[i].is_selected == true) {
                                            is_selected = 'selected="selected"';
                                        }
                                        html += "<option value='" + jsdata[i].id + "' " + is_selected + ">" + jsdata[i].name + "</option>";
                                    }
                                    $("#<?= $ajax_keys[$aj] ?>").html(html);
                                    console.log(html);
                                    $('#<?= $ajax_keys[$aj] ?>').trigger("chosen:updated");
                                    $.LoadingOverlay("hide");
                                }
                            });
                        });
                        $(document).ready(function () {
                            $("#<?= $ajax_base_relation_result[$ajax_keys[$aj]]["parent_field_name"] ?>").change();
                            console.log("#<?= $ajax_base_relation_result[$ajax_keys[$aj]]["parent_field_name"] ?>");
                        });
        <?php
    }
}
?>
</script>

<?php
if (isset($editor_type)) {
    if ($editor_type == "basic") {
        ?>
        <script src="<?= base_url() ?>admin_assets/ckeditor_basic/ckeditor.js"></script>
    <?php } else if ($editor_type == "standard") { ?>
        <script src="<?= base_url() ?>admin_assets/ckeditor_standard/ckeditor.js"></script>
    <?php } else if ($editor_type == "full") { ?>
        <script src="<?= base_url() ?>admin_assets/ckeditor_full/ckeditor.js"></script>
        <?php
    }
} else {
    ?><script src="<?= base_url() ?>admin_assets/ckeditor_basic/ckeditor.js"></script>
<?php } ?>

<!-- Tags Input -->
<script src="<?= base_url() ?>admin_assets/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script>
                $(document).ready(function () {
                    $('.tagsinput').tagsinput({
                        tagClass: 'label label-primary'
                    });
                });
</script>

<script>
    $(document).on("click", ".autoCopy", function () {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(this).attr("data-to-copy")).select();
        document.execCommand("copy");
        toastr.success('Path copied to clipboard');
        $temp.remove();
    });
</script>
<div class="container-fluid col-12" style="background-color: #2f4050; padding: 10px 30px">
    <span style="color: #ffffff; float: right; letter-spacing: 0.8px"><?php
        $this->benchmark->mark('code_end');
        echo 'This page took <b>' . $this->benchmark->elapsed_time('code_start', 'code_end') . '</b> Seconds and <b>' .
        $this->benchmark->memory_usage('code_start', 'code_end') . '</b> of Memory';
        ?></span>
</div>
</body>
</html>