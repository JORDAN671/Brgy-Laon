<?php $current_page = $this->uri->segment(1); ?>
<script>
    var SITE_URL = "<?php echo base_url(); ?>";
</script>

<!-- ===== jQuery ===== -->
<script src="<?= site_url() ?>assets/plugins/components/jquery/dist/jquery.min.js"></script>
<!-- ===== Bootstrap JavaScript ===== -->
<script src="<?= site_url() ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ===== Slimscroll JavaScript ===== -->
<script src="<?= site_url() ?>assets/js/jquery.slimscroll.js"></script>
<!-- ===== Wave Effects JavaScript ===== -->
<script src="<?= site_url() ?>assets/js/waves.js"></script>
<!-- ===== Menu Plugin JavaScript ===== -->
<script src="<?= site_url() ?>assets/js/sidebarmenu.js"></script>
<!-- ===== Custom JavaScript ===== -->
<script src="<?= site_url() ?>assets/js/custom.js"></script>

<!-- ===== Plugin JS ===== -->
<script src="<?= site_url() ?>assets/plugins/components/dropify/dist/js/dropify.min.js"></script>
<script src="<?= site_url() ?>assets/plugins/components/select2/select2.full.min.js" type="text/javascript"></script>
<!-- datatables -->
<script src="<?= site_url() ?>assets/plugins/components/datatables/jquery.dataTables.min.js"></script>
<script src="<?= site_url() ?>assets/plugins/components/moment/min/moment.min.js"></script>
<script src="<?= site_url() ?>assets/plugins/components/datatables/dataTables.dateTime.min.js"></script>
<script src="<?= site_url() ?>assets/plugins/components/datatables/Buttons-1.6.1/js/dataTables.buttons.min.js"></script>
<script src="<?= site_url() ?>assets/plugins/components/datatables/JSZip-2.5.0/jszip.min.js"></script>
<script src="<?= site_url() ?>assets/plugins/components/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
<script src="<?= site_url() ?>assets/plugins/components/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
<script src="<?= site_url() ?>assets/plugins/components/datatables/Buttons-1.6.1/js/buttons.html5.min.js"></script>
<script src="<?= site_url() ?>assets/plugins/components/datatables/Buttons-1.6.1/js/buttons.print.min.js"></script>
<script src="<?= site_url() ?>assets/plugins/components/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
<script src="<?= site_url() ?>assets/plugins/components/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
<script src="<?= site_url() ?>assets/plugins/components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>

<script src="<?= site_url() ?>assets/plugins/components/summernote/summernote.min.js"></script>
<!-- Bootstrap Notify -->
<script src="<?= site_url() ?>assets/plugins/components/toast-master/js/jquery.toast.js"></script>

<script src="<?= site_url() ?>assets/js/jquery.PrintArea.js" type="text/JavaScript"></script>

<script src="<?= site_url() ?>assets/webcamjs/webcam.min.js"></script>

<script src="<?= site_url() ?>assets/js/mydatatables.js"></script>
<script src="<?= site_url() ?>assets/js/myscript.js"></script>
<script src="<?= site_url() ?>assets/js/myajax.js"></script>

<!-- ===== Style Switcher JS ===== -->
<script src="<?= site_url() ?>assets/plugins/components/styleswitcher/jQuery.style.switcher.js"></script>

<script src="<?= site_url() ?>assets/plugins/components/jquery-validation/jquery.validate.min.js"></script>

<?php if ($current_page == 'dashboard') : ?>
    <!--Morris JavaScript -->
    <script src="<?= site_url() ?>assets/plugins/components/raphael/raphael.js"></script>
    <script src="<?= site_url() ?>assets/plugins/components/morrisjs/morris.js"></script>

    <script src="<?= site_url() ?>assets/plugins/components/chartist-js/dist/chartist.min.js"></script>
    <script src="<?= site_url() ?>assets/plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>

    <script src="<?= site_url() ?>assets/js/chart-data.js"></script>
<?php endif ?>

<?php if ($current_page == 'payments') : ?>
    <script src="<?= site_url() ?>assets/js/mydate_range.js"> </script>
<?php endif ?>